<?php
/*
 * This file is part of the TravelMongolia.us package.
 *
 * (c) Enkhbayasgalan Galsandorj (g.enkhbayasgalan@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Enkuso\Controller;


use Silex\Application;
use Silex\ControllerCollection;
use Silex\ControllerProviderInterface;

class TourControllerProvider implements ControllerProviderInterface
{
    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        /** @var ControllerCollection $controllers */
        $controllers = $app['controllers_factory'];

        /** Tour all */
        $controllers->get('/all.html', function (Application $app) {
            $tours = $app['content_tours']->getTours();
            $app['seo_key'] = 'tours';

            return $app['twig']->render('Page/tours.html.twig', array(
                    'tours' => $tours,
                ));
        })->bind('tour_all');

        /** Tour show */
        $controllers->get('/{slug}.html', function (Application $app, $slug) {
            $tour = $app['content_tours']->getTourInfo($slug);
            $template = $tour === null ? 'show_none.html.twig' : (isset($tour['layout']) ? $tour['layout'] : 'show.html.twig') ;

            $form = $app['form.factory']->create(new \Enkuso\Form\ContactType(), array(), array());

            $app['seo_key'] = $slug;

            return $app['twig']->render('Tour/'.$template, array(
                    'tour' => $tour,
                    'slug' => $slug,
                    'form' => $form->createView(),
                ));
        })->bind('tour_show');

        /** Inquiry send */
        $controllers->post('{slug}/inquiry', function($slug) use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\ContactType(), array(), array());

            $form->handleRequest($app['request']);

            if ($form->isValid()) {

                $message = $form->getData();

		if (stripos($form->get('content')->getData(),"http://")===false) {
                $mail = \Swift_Message::newInstance()
                    ->setSubject('['.$app['company']['name'].'] '.$form->get('name')->getData())
                    ->setFrom(array($form->get('email')->getData()))
                    ->setTo($app['company']['email'])
                    ->setBody('<b>Email:</b>'.$form->get('email')->getData().'<br/><b>Country:</b> '.$app['visitor_country'].'<br/><b>Message</b><br/>'.$form->get('content')->getData(), 'text/html');

                $app['mailer']->send($mail);
		}
                $app['session']->getFlashBag()->add('inquiry', 'Thank you for submitting your inquiry. We will answer for your question shortly.');

            } else {
                $app['session']->getFlashBag()->add('inquiry', 'Please enter correct form data!');
            }

            return $app->redirect($app['url_generator']->generate('tour_show', array('slug'=>$slug)));
        })->bind('inquiry_send');

        return $controllers;
    }
}