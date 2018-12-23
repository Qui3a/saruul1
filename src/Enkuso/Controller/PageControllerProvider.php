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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Email;

// Swift mailer force run hack :P
// require_once __DIR__.'/../../../vendor/swiftmailer/swiftmailer/lib/classes/Swift.php';
// \Swift::registerAutoload(__DIR__.'/../../../vendor/swiftmailer/swiftmailer/lib/swift_init.php');
require_once __DIR__.'/../../../vendor/swiftmailer/swiftmailer/lib/swift_required.php';

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
    array('src' => '/images/slider/1.jpg', 'link' => '/tour/a-classic-journey-of-mongolia-with-naadam-festival.html'),
    array('src' => '/images/slider/9.jpg', 'link' => '/tour/overland-discovery.html'),
    array('src' => '/images/slider/2.jpg', 'link' => '/tour/jewels-of-mongolia.html'),
    array('src' => '/images/slider/3.jpg', 'link' => '/tour/a-classic-journey-of-mongolia.html'),
    array('src' => '/images/slider/4.jpg', 'link' => '/tour/unparalleled-luxury-tour.html'),
    array('src' => '/images/slider/5.jpg', 'link' => '/tour/luxury-tour-with-naadam-festival.html'),
    array('src' => '/images/slider/6.jpg', 'link' => '/tour/taste-of-mongolia.html'),
    array('src' => '/images/slider/7.jpg', 'link' => '/tour/treasures-of-mongolia.html'),
    array('src' => '/images/slider/8.jpg', 'link' => '/tour/eagle-festival-and-gobi-desert.html'),
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
        $controllers->get('join-our-group-travel-2018', function() use ($app) {
            return $app->redirect($app['url_generator']->generate('group_travel'));
        });
        $controllers->get('join-our-group-travel-2019', function() use ($app) {

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
		if (stripos($message['content'],"http://")===false && stripos($message['content'],"https://")===false) {
            $transporter = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                ->setUsername($app['smtp.mail'])
                ->setPassword($app['smtp.pass']);

                $mail = \Swift_Message::newInstance($transporter)
                    ->setSubject('['.$app['company']['name'].'] '.$form->get('name')->getData())
                    ->setFrom(array($form->get('email')->getData()))
                    ->setReplyTo(array($form->get('email')->getData()))
                    ->setTo($app['company']['email'])
                    ->setBody('<b>Email:</b> '.$form->get('email')->getData().'<br/><b>Country:</b> '.$app['visitor_country'].'<br/><b>Day time phone:</b> '.$form->get('phone')->getData().'<br/><b>Evening phone:</b> '.$form->get('phone2')->getData().'<br/><b>Message</b><br/>'.$form->get('content')->getData(), 'text/html');

                $app['mailer']->send($mail);
                }
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

                if (stripos($message['comment'],"http://")===false && stripos($message['comment'],"https://")===false) {
                    $transporter = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                        ->setUsername($app['smtp.mail'])
                        ->setPassword($app['smtp.pass']);

                    $mail = \Swift_Message::newInstance($transporter)
                        ->setSubject('['.$app['company']['name'].'] Booking from '.$form->get('first_name')->getData())
                        ->setFrom(array($form->get('email')->getData()))
                        ->setReplyTo(array($form->get('email')->getData()))
                        ->setTo($app['company']['email'])
                        ->setBody($app['twig']->render('Page/_booking.html.twig', array(
                            'form'      => $message,
                        )));

                    $app['mailer']->send($mail);
                }

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
                    $transporter = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                        ->setUsername($app['smtp.mail'])
                        ->setPassword($app['smtp.pass']);

                    $mail = \Swift_Message::newInstance($transporter)
                        ->setSubject('['.$app['company']['name'].'] '.$form->get('name')->getData().' downloaded PDF - '.$filename)
                        ->setFrom(array($form->get('email')->getData()))
                        ->setReplyTo(array($form->get('email')->getData()))
                        ->setTo($app['company']['email'])
                        ->setBody(
                            $form->get('name')->getData().' downloaded PDF - '.$filename.'<br/>'.
                            'Country from IP address: '.$app['visitor_country'].'<br/>'.
                            'Email: '. $form->get('email')->getData()
                        , 'text/html');

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
                $transporter = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername($app['smtp.mail'])
                    ->setPassword($app['smtp.pass']);

                $mail = \Swift_Message::newInstance($transporter)
                    ->setSubject('['.$app['company']['name'].'] '.' Newsletter subscribe request')
                    ->setFrom($email)
                    ->setReplyTo($email)
                    ->setTo($app['company']['email'])
                    ->setBody(
                        $email
                    );

                $app['mailer']->send($mail);

            }
            return $app->redirect('/');

        })->bind('newsletter');

        /** Request a catalog page */
        $controllers->get('request-a-catalog/form', function() use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\CatalogType(), array(), array());

            return $app['twig']->render('Page/request_catalog.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('catalog');

        $controllers->post('request-a-catalog/send', function() use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\CatalogType(), array(), array());

            $form->handleRequest($app['request']);

            if ($form->isValid()) {

                $message = $form->getData();

                $transporter = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername($app['smtp.mail'])
                    ->setPassword($app['smtp.pass']);

                $mail = \Swift_Message::newInstance($transporter)
                    ->setSubject('Requesting catalog: '.$form->get('first_name')->getData())
                    ->setFrom(array($form->get('email')->getData()))
                    ->setReplyTo(array($form->get('email')->getData()))
                    ->setTo($app['company']['email'])
                    ->setBody('<b>First Name: </b> '.$form->get('first_name')->getData().'<br/>'
                        .'<b>Last Name: </b>'.$form->get('last_name')->getData().'<br/>'
//                        .'<b>Title: </b>'.$form->get('title')->getData().'<br/>'
//                        .'<b>Organization: </b>'.$form->get('organization')->getData().'<br/>'
                        .'<b>Address: </b>'.$form->get('address_line_1')->getData().'<br/>'
                        .'<b>Address line 2: </b>'.$form->get('address_line_2')->getData().'<br/>'
                        .'<b>City: </b>'.$form->get('city')->getData().'<br/>'
                        .'<b>Country: </b>'.$form->get('country')->getData().'<br/>'
                        .'<b>Zip code: </b>'.$form->get('zip_code')->getData().'<br/>'
                        .'<b>Home phone: </b>'.$form->get('home_phone')->getData().'<br/>'
                        .'<b>Mobile phone: </b>'.$form->get('mobile_phone')->getData().'<br/>'
                        .'<b>Email: </b>'.$form->get('email')->getData().'<br/>'
                        .'<b>Country from IP address: </b>'.$app['visitor_country'].'<br/>'
                        , 'text/html');

                $app['mailer']->send($mail);

                return $app->redirect($app['url_generator']->generate('catalog_success'));
            }

            return $app['twig']->render('Page/request_catalog.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('catalog_send');

        $controllers->get('request-a-catalog/sent', function() use ($app) {

            return $app['twig']->render('Page/catalog_success.html.twig', array(
            ));
        })->bind('catalog_success');

        /** Request Airfare Quote page */
        $controllers->get('request-airfare-quote/form', function() use ($app) {
            $tours  = $app['content_tours']->getBookableTours();
            $guides = array('English' => 'English');


            $form = $app['form.factory']->create(new \Enkuso\Form\AirfareType(), array(), array(
                'tours' => $tours,
                'guides' => $guides,
            ));

            return $app['twig']->render('Page/request_airfare_quote.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('request_airfare_quote');

        $controllers->post('request-airfare-quote/send', function() use ($app) {
            $tours  = $app['content_tours']->getBookableTours();
            $guides = array('English' => 'English');

            $form = $app['form.factory']->create(new \Enkuso\Form\AirfareType(), array(), array(
                'tours' => $tours,
                'guides' => $guides,
            ));

            $form->handleRequest($app['request']);

            if ($form->isValid()) {

                $message = $form->getData();

                if (stripos($message['comment'],"http://")===false && stripos($message['comment'],"https://")===false) {
                    $transporter = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                        ->setUsername($app['smtp.mail'])
                        ->setPassword($app['smtp.pass']);

                    $mail = \Swift_Message::newInstance($transporter)
                        ->setSubject('['.$app['company']['name'].'] Request Airfare Quote from '.$form->get('first_name')->getData())
                        ->setFrom(array($form->get('email')->getData()))
                        ->setReplyTo(array($form->get('email')->getData()))
                        ->setTo($app['company']['email'])
                        ->setBody($app['twig']->render('Page/_request_airfare_quote.html.twig', array(
                            'form'      => $message,
                        )));

                    $app['mailer']->send($mail);
                }

                return $app->redirect($app['url_generator']->generate('request_airfare_quote_success'));
            }

            return $app['twig']->render('Page/request_airfare_quote.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('request_airfare_quote_send');

        $controllers->get('request-airfare-quote/sent', function() use ($app) {

            return $app['twig']->render('Page/request_airfare_quote_success.html.twig', array(
            ));
        })->bind('request_airfare_quote_success');

        $controllers->get('neg-udaa-haradah-modal/early-discount', function() use ($app) {
            $app['session']->set('neg_udaa_haragdah_modal_early_discount', true);
            return new Response('ok');
        })->bind('neg_udaa_haragdah_modal_early_discount');

        /** Request a Callback */
        $controllers->get('request-a-callback/form', function() use ($app) {
            
            $form = $app['form.factory']->create(new \Enkuso\Form\CallbackType(), array(), array());

            return $app['twig']->render('Page/request_a_callback.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('request_a_callback');

        $controllers->post('request-a-callback/send', function() use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\CallbackType(), array(), array());

            $form->handleRequest($app['request']);

            if ($form->isValid()) {

                $message = $form->getData();

                if (stripos($message['comment'],"http://")===false && stripos($message['comment'],"https://")===false) {
                    $transporter = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                        ->setUsername($app['smtp.mail'])
                        ->setPassword($app['smtp.pass']);

                    $mail = \Swift_Message::newInstance($transporter)
                        ->setSubject('['.$app['company']['name'].'] Request A Callback from '.$form->get('name')->getData())
                        ->setFrom(array($form->get('email')->getData()))
                        ->setReplyTo(array($form->get('email')->getData()))
                        ->setTo($app['company']['email'])
                        ->setBody($app['twig']->render('Page/_request_a_callback.html.twig', array(
                            'form'      => $message,
                        )));

                    $app['mailer']->send($mail);
                }

                return $app->redirect($app['url_generator']->generate('request_a_callback_success'));
            }

            return $app['twig']->render('Page/request_a_callback.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('request_a_callback_send');

        $controllers->get('request-a-callback/sent', function() use ($app) {

            return $app['twig']->render('Page/request_a_callback_success.html.twig', array(
            ));
        })->bind('request_a_callback_success');

        /** Private Customized Tours */
        $controllers->get('private-customized-tours/form', function() use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\PrivateCustomTourType(), array(), array());

            return $app['twig']->render('Page/private_customized_tours.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('private_customized_tours');

        $controllers->post('private-customized-tours/send', function() use ($app) {

            $form = $app['form.factory']->create(new \Enkuso\Form\PrivateCustomTourType(), array(), array());

            $form->handleRequest($app['request']);

            if ($form->isValid()) {

                $message = $form->getData();

                $transporter = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
                    ->setUsername($app['smtp.mail'])
                    ->setPassword($app['smtp.pass']);

                $mail = \Swift_Message::newInstance($transporter)
                    ->setSubject('Requesting catalog: '.$form->get('first_name')->getData())
                    ->setFrom(array($form->get('email')->getData()))
                    ->setReplyTo(array($form->get('email')->getData()))
                    ->setTo($app['company']['email'])
                    ->setBody('<b>First Name: </b> '.$form->get('first_name')->getData().'<br/>'
                        .'<b>Last Name: </b>'.$form->get('last_name')->getData().'<br/>'
//                        .'<b>Title: </b>'.$form->get('title')->getData().'<br/>'
//                        .'<b>Organization: </b>'.$form->get('organization')->getData().'<br/>'
                        .'<b>Address: </b>'.$form->get('address_line_1')->getData().'<br/>'
                        .'<b>Address line 2: </b>'.$form->get('address_line_2')->getData().'<br/>'
                        .'<b>City: </b>'.$form->get('city')->getData().'<br/>'
                        .'<b>Country: </b>'.$form->get('country')->getData().'<br/>'
                        .'<b>Zip code: </b>'.$form->get('zip_code')->getData().'<br/>'
                        .'<b>Home phone: </b>'.$form->get('home_phone')->getData().'<br/>'
                        .'<b>Mobile phone: </b>'.$form->get('mobile_phone')->getData().'<br/>'
                        .'<b>Email: </b>'.$form->get('email')->getData().'<br/>'
                        .'<b>Country from IP address: </b>'.$app['visitor_country'].'<br/>'
                        , 'text/html');

                $app['mailer']->send($mail);

                return $app->redirect($app['url_generator']->generate('catalog_success'));
            }

            return $app['twig']->render('Page/private_customized_tours.html.twig', array(
                'form'      => $form->createView(),
            ));
        })->bind('private_customized_tours_send');

        $controllers->get('private-customized-tours/sent', function() use ($app) {

            return $app['twig']->render('Page/private_customized_tours_success.html.twig', array(
            ));
        })->bind('private_customized_tours_success');

        return $controllers;
    }
}