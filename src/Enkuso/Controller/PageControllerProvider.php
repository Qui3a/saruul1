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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Email;

// Swift mailer force run hack :P
require_once __DIR__.'/../../../vendor/swiftmailer/swiftmailer/lib/classes/Swift.php';
\Swift::registerAutoload(__DIR__.'/../../../vendor/swiftmailer/swiftmailer/lib/swift_init.php');

class PageControllerProvider implements ControllerProviderInterface
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

        /** Homepage */
        $controllers->get('/', function (Application $app) {
            $slides = array(
                array('src' => '/images/slider10_mini.jpg', 'alt' => 'Taste of Mongolia', 'caption' => '', 'link' => '/tour/taste-of-mongolia.html'),
                array('src' => '/images/slider7_mini.jpg', 'alt' => 'Naadam Festival Journey', 'caption' => '<p style="font-size: 22px;">July 23 - Aug 2</p><p>The Gobi Desert and the mountainous Mongolian steppe are the stuff of legend, but guided horseback expeditions, <br/>led by local herdsmen and supplied by yaks shouldering equipment and supplies, are coloring this myth with reality.</p>', 'link' => '/tour/taste-of-mongolia-with-naadam-festival.html'),
                array('src' => '/images/slider6_mini.jpg', 'alt' => 'Treasures of Mongolia', 'caption' => '<p><i>We have had an unspeakably delightful journey, one of those journeys which seem to divide one\'s life in two, <br/>by the new ideas they suggest and the new views of interest they open. George Eliot (Mary Ann Evans) (1819 - 1880)</i></p>', 'link' => '/tour/treasures-of-mongolia.html'),
                array('src' => '/images/slider1_mini.jpg', 'alt' => 'Khuvsgul Lake Tour', 'caption' => '<p style="font-size: 15px; color: #ffffff; background-color: rgba(0,0,0,0.7); padding: 5px; opacity: 0.7;">With Five-Star accommodations and lodges are chosen throughout for the best in Affordable Luxury. <br/>Mongolian Luxury Tours invites you on a journey of discovery with exciting, time-tested itineraries <br/>and attentive personal service in addition to exceptional value and Affordable Luxury.</p>', 'link' => '/tour/khuvsgul-lake-tour.html'),
                array('src' => '/images/slider5_mini.jpg', 'alt' => 'Gobi Desert tour', 'caption' => '<br/><p>This tour highlights the amazing Gobi Desert - a diversity of mountains, evergreen forests, sand dunes, and geological wonders.</p>', 'link' => '/tour/gobi-desert-tour.html'),
                //array('src' => '/images/slider2_mini.jpg', 'alt' => 'Splendors of Mongolia', 'caption' => '<p>Blue skies and huge expanses of near-empty land epitomize Mongolia. <br/>There are few roads, and nomadic herders still roam the steppe as they have for centuries</p>', 'link' => '/tour/splendors-of-mongolia'),
                //array('src' => '/images/slider8_mini.jpg', 'alt' => 'Highlights of Mongolia', 'caption' => '<p>A good traveller has no fixed plans and is not intent on arriving. Lao Tzu ( 570-490 BC)</p>', 'link' => '/tour/highlights-of-mongolia'),
                //array('src' => '/images/slider9_mini.jpg', 'alt' => 'Bird watching trip', 'link' => '/tour/bird-watching-trip'),
            );
            $app['seo_key'] = 'homepage';
            return $app['twig']->render('homepage.html.twig', array(
                'slides' => $slides,
            ));
        })->bind('homepage');

        /** Login page */
        $controllers->get('/login', function(Request $request) use ($app) {
            return $app['twig']->render('login.html.twig', array(
                'error'         => $app['security.last_error']($request),
                'last_username' => $app['session']->get('_security.last_username'),
            ));
        })->bind('login');

        /** Search result page */
        $controllers->get('/search', function() use ($app) {
            return $app['twig']->render('Page/search.html.twig', array(
            ));
        })->bind('search_show');

        /** Gallery page */
        $controllers->get('/gallery', function() use ($app) {
            $slides = array();
            for($i=1;$i<=41;$i++)
                $slides[$i] = 'http://www.mongolianluxurytours.com/img/gallery/'.$i.'.jpg';
            return $app['twig']->render('Page/gallery.html.twig', array(
                'slides' => $slides,
            ));
        })->bind('gallery');

        /** Group travel */
        $controllers->get('join-our-group-travel-2014', function() use ($app) {

            return $app['twig']->render('Page/group_travel.html.twig', array(
            ));
        })->bind('group_travel');

        /** Generic page show */
        $controllers->get('/{slug}.html', function($slug) use ($app) {
            $page    = $app['content_pages']->getPageInfo($slug);
            $template = array_key_exists('layout', $page) ? $page['layout'] : 'show';
            $app['seo_key'] = $slug;
            return $app['twig']->render('Page/'.$template.'.html.twig', array(
                'page'          => $page,
                'slug'          => $slug,
            ));
        })->bind('page_show');

        /** Hotels list */
        $controllers->get('/hotels/index.html', function() use ($app) {
            $hotels = array();

            $result = '{
    "Hotels": {
        "terelj-hotel": {
            "slug": "terelj-hotel",
            "title": "Terelj Hotel",
            "star": "5",
            "intro": "A scenic upcountry drive from Ulaanbaatar transports you to the Terelj Hotel and Spa, one of the Small Luxury Hotels of the World. Nestled in an almost untouched corner of the earth &ndash; Gorkhi-Terelj National Park, part of the vast Khan Khentii Strictly Protected Area &ndash; this palatial yet intimate hotel is a destination in itself.",
            "photo": "http://farm9.staticflickr.com/8068/8171535586_1c05f81732_n.jpg"
        },
        "ramada-hotel": {
            "slug": "ramada-hotel",
            "title": "Ramada Hotel",
            "star": "4",
            "intro": "Ramada Ulaanbaatar Citycenter hotel, near Gandan Tegchilen Khiid, combines the best accommodations and a great location in the heart of the city. Each morning, our Ulaanbaatar hotel serves a free breakfast, and we provide free newspapers for your convenience. Scout out area attractions from your hotel room with free Wi-Fi Internet access or ...",
            "photo": "http://farm9.staticflickr.com/8339/8171535200_2ba3de75f3_n.jpg"
        },
        "blue-sky-hotel": {
            "slug": "blue-sky-hotel",
            "title": "Blue Sky Hotel",
            "star": "5",
            "intro": "The Blue Sky Hotel and Tower",
            "photo": "http://farm9.staticflickr.com/8487/8171516793_b1ee25843a_n.jpg"
        },
        "kempinski-hotel": {
            "slug": "kempinski-hotel",
            "title": "Kempinski Hotel",
            "star": "5",
            "intro": "Kempinski Hotel Khan Palace features 102 hotel guest rooms and suites; luxuriously appointed and classically-styled; yet in keeping with the ever changing needs of the international traveler, each providing latest digital technology and communications.",
            "photo": "http://farm9.staticflickr.com/8207/8171538480_369431d5c2_n.jpg"
        }
    },
    "stat": "ok"
}';

            $result = json_decode($result,true);

            if($result['stat'] == 'ok')
                $hotels = $result['Hotels'];

            return $app['twig']->render('Pages/hotels_list.html.twig', array(
                'hotels'          => $hotels
            ));
        })->bind('hotel_list');

        /** Hotel show */
        $controllers->get('/hotel/{slug}', function($slug) use ($app) {
            $hotel    = array();

            $result = file_get_contents($app['tourapi.host'].'/hotel/'.$slug.'.json');

            $result = json_decode($result,true);

            if($result['stat'] == 'ok')
                $hotel = $result['Hotel'];

            return $app['twig']->render('Hotel/show.html.twig', array(
                'hotel'         => $hotel,
                'slug'          => $slug,
            ));
        })->bind('hotel_show');

        /** Contact page */
        $controllers->get('contact/form', function() use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\ContactType(), array(), array());

            return $app['twig']->render('Page/contact.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('contact');

        $controllers->post('contact/send', function() use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\ContactType(), array(), array());

            $form->handleRequest($app['request']);

            if ($form->isValid()) {

                $message = $form->getData();

                $mail = \Swift_Message::newInstance()
                    ->setSubject('['.$app['company']['name'].'] '.$form->get('name')->getData())
                    ->setFrom(array($form->get('email')->getData()))
                    ->setTo($app['company']['email'])
                    ->setBody('<b>Country:</b> '.$app['visitor_country'].'<br/><b>Message</b><br/>'.$form->get('content')->getData(), 'text/html');

                $app['mailer']->send($mail);

                return $app->redirect($app['url_generator']->generate('contact_success'));
            }

            return $app['twig']->render('Page/contact.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('contact_send');

        $controllers->get('contact/sent', function() use ($app) {

            return $app['twig']->render('Page/contact_success.html.twig', array(
            ));
        })->bind('contact_success');

        /** Booking page */
        $controllers->get('booking/form', function() use ($app) {
            $tours  = $app['content_tours']->getBookableTours();
            $guides = array('English' => 'English');


            $form = $app['form.factory']->create(new \Enkuso\Form\BookingType(), array(), array(
                'tours' => $tours,
                'guides' => $guides,
            ));

            return $app['twig']->render('Page/booking.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('booking');

        $controllers->post('booking/send', function() use ($app) {
            $tours  = $app['content_tours']->getBookableTours();
            $guides = array('English' => 'English');

            $form = $app['form.factory']->create(new \Enkuso\Form\BookingType(), array(), array(
                'tours' => $tours,
                'guides' => $guides,
            ));

            $form->handleRequest($app['request']);

            if ($form->isValid()) {

                $message = $form->getData();

                $mail = \Swift_Message::newInstance()
                    ->setSubject('['.$app['company']['name'].'] Booking from '.$form->get('first_name')->getData())
                    ->setFrom(array($form->get('email')->getData()))
                    ->setTo($app['company']['email'])
                    ->setBody($app['twig']->render('Page/_booking.html.twig', array(
                        'form'      => $message,
                    )));

                $app['mailer']->send($mail);

                return $app->redirect($app['url_generator']->generate('booking_success'));
            }

            return $app['twig']->render('Page/booking.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('booking_send');

        $controllers->get('booking/sent', function() use ($app) {

            return $app['twig']->render('Page/booking_success.html.twig', array(
            ));
        })->bind('booking_success');

        /** Request a quote */
        $controllers->get('/request-a-quote/{slug}', function($slug) use ($app) {
            $tours  = $app['content_tours']->getBookableTours();
            $guides = array('English' => 'English');


            $tour = $app['content_tours']->getTourInfo($slug);

            if(is_null($tour)) {
                $app->redirect($app['url_generator']->generate('homepage'));
            }

            $form = $app['form.factory']->create(new \Enkuso\Form\BookingType(), array('tour' => $tour['name']), array(
                'tours' => $tours,
                'guides' => $guides,
            ));

            $app['seo_key'] = $slug;
            return $app['twig']->render('Page/request_quote.html.twig', array(
                'form'      => $form->createView(),
                'tour' => $tour
            ));
        })->bind('request_quote');

        /** Download PDF */
        $controllers->get('download-pdf/{slug}', function($slug) use ($app) {

            $filename = ucwords(str_replace('-',' ',$slug));

            if(file_exists($app['upload_dir'].'/tour-pdf/'.$filename.'.pdf') ) {
                $form = $app['form.factory']->create(new \Enkuso\Form\DownloadPdfType(), array('tour' => $slug), array());

                return $app['twig']->render('Page/download_pdf.html.twig', array(
                    'form'      => $form->createView(),
                    'slug' => $slug
                ));
            }

            return $app['twig']->render('Page/pdf_notfound.html.twig', array(
                'filename' => $filename,
                'slug' => $slug
            ));
        })->bind('download_pdf');

        $controllers->post('download-pdf', function() use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\DownloadPdfType(), array(), array());

            $form->handleRequest($app['request']);

            if ($form->isValid()) {

                $filename = ucwords(str_replace('-',' ',$form->get('tour')->getData()));

                if(file_exists($app['upload_dir'].'/tour-pdf/'.$filename.'.pdf') ) {
                    $mail = \Swift_Message::newInstance()
                        ->setSubject('['.$app['company']['name'].'] '.$form->get('name')->getData().' downloaded PDF - '.$filename)
                        ->setFrom(array($form->get('email')->getData()))
                        ->setTo($app['company']['email'])
                        ->setBody(
                            $form->get('name')->getData().' downloaded PDF - '.$filename.'<br/>'.
                            'Country: '.$form->get('country')->getData().'<br/>'.
                            'Email: '. $form->get('email')->getData()
                        );

                    $app['mailer']->send($mail);

                    return $app->redirect($app['company']['website'].'/uploads/tour-pdf/'.$filename.'.pdf');
                }
            }

            return $app['twig']->render('Page/download_pdf.html.twig', array(
                'form'      => $form->createView(),
                'slug'      => $form->get('tour')->getData()
            ));
        })->bind('download_pdf_send');

        /** Newsletter subscribe */
        $controllers->post('subscribe', function() use ($app) {

            // TODO: use form type
            $email = $app['request']->request->get('email');
            $errors = $app['validator']->validateValue($email, new Email());

            if (count($errors) <= 0) {
                $mail = \Swift_Message::newInstance()
                    ->setSubject('['.$app['company']['name'].'] '.' Newsletter subscribe request')
                    ->setFrom($email)
                    ->setTo($app['company']['email'])
                    ->setBody(
                        $email
                    );

                $app['mailer']->send($mail);

            }
            return $app->redirect('/');

        })->bind('newsletter');

        return $controllers;
    }
}