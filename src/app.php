<?php
/*
 * This file is part of the TravelMongolia.us package.
 *
 * (c) Enkhbayasgalan Galsandorj (g.enkhbayasgalan@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Silex\Provider\FormServiceProvider;
use Silex\Provider\HttpCacheServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\SessionServiceProvider;
use Silex\Provider\SwiftmailerServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Symfony\Component\HttpFoundation\Request;

/** @var $app Silex\Application */
$app->register(new HttpCacheServiceProvider());

$app->register(new SessionServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new FormServiceProvider());
$app->register(new UrlGeneratorServiceProvider());

// SWIFTMAILER
$app->register(new SwiftmailerServiceProvider());
$app['swiftmailer.options'] = array(
    'host' => 'travelallmongolia.com',
    'port' => '25',
    'username' => 'noreply@travelallmongolia.com',
    'password' => 'TWv03ReTmlu0',
    'auth_mode' => 'login'
);


$app->register(new TwigServiceProvider(), array(
    'twig.options'        => array(
        'cache'            => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
        'strict_variables' => true
    ),
    'twig.form.templates' => array('form_div_layout.html.twig'),
    'twig.path'           => array(__DIR__ . '/../resources/views')
));

if ($app['debug'] && isset($app['cache.path'])) {
    $app->register(new ServiceControllerServiceProvider());
}

// USER LOGIN
$app->register(new Silex\Provider\SecurityServiceProvider(), array(
    'security.firewalls' => array(
        'unsecured' => array(
            'pattern' => '^.*$',
            'form' => array('login_path' => '/login', 'check_path' => '/login_check'),
            'logout' => array('logout_path' => '/logout'),
            'users' => array(
                'enkuso' => array('ROLE_ADMIN', '5FZ2Z8QIkA7UTZ4BYkoC+GsReLf569mSKDsfods6LYQ8t+a8EW9oaircfMpmaLbPBh4FOBiiFyLfuZmTSUwzZg=='),
                'soyoloo' => array('ROLE_MODERATOR', '5FZ2Z8QIkA7UTZ4BYkoC+GsReLf569mSKDsfods6LYQ8t+a8EW9oaircfMpmaLbPBh4FOBiiFyLfuZmTSUwzZg=='),
            ),
            'anonymous' => true,
        ),
    )
));

// Database
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver'   => 'pdo_sqlite',
        'path'     => __DIR__.'/../resources/geoip.db3',
    ),
));

// COUNTRY CHECK
$app->before(function(Request $request) use ($app){
    if(!$app['debug']) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $ip_arr = explode('.',$ip);
        $ip_num = ( 16777216 * $ip_arr[0] ) + ( 65536 * $ip_arr[1] ) + ( 256 * $ip_arr[2] ) + $ip_arr[3];
        $sql = "SELECT * FROM geo_ip_country WHERE ? BETWEEN begin_ip_num AND end_ip_num LIMIT 1";
        $country = $app['db']->fetchAssoc($sql, array($ip_num));
        //if($country === false || $country['country_code'] == 'MN') {
        //    // IF FROM MONGOLIA
        //    if($app['security']->isGranted('IS_AUTHENTICATED_FULLY') === false
        //      && $request->getRequestUri() != '/login'
        //      && $request->getRequestUri() != '/login_check' )
        //        return $app->redirect('/login');
        //}
        if($country === false)
            $country['country_name'] = 'Unknown';
        $app['visitor_country'] = $country['country_name'];
    }
});


$app['content_tours'] = $app->share(function () {
    return new \Enkuso\Content\Tours();
});

$app['content_pages'] = $app->share(function () {
    return new \Enkuso\Content\Pages();
});

$app['content_seo'] = $app->share(function () {
    return new \Enkuso\Content\Seo();
});
$app['seo_key'] = 'all';

// config
$app['tourapi.host'] = 'http://tourapi.88125925.com';
$app['company'] = array(
    'name' => 'Travel All Mongolia',
    'email' => 'info@travelallmongolia.com',
    'website' => 'http://www.travelallmongolia.com',
    'video' => 'NShsdGOFb0k',
);
$app['upload_dir'] = __DIR__.'/../web/uploads';
$app['slides'] = array(
    array('src' => '/images/slider10_mini.jpg', 'alt' => 'Taste of Mongolia', 'caption' => '', 'link' => '/tour/taste-of-mongolia.html'),
    array('src' => '/images/slider7_mini.jpg', 'alt' => 'Naadam Festival Journey', 'caption' => '<p style="font-size: 22px;">July 23 - Aug 2</p><p>The Gobi Desert and the mountainous Mongolian steppe are the stuff of legend, but guided horseback expeditions, <br/>led by local herdsmen and supplied by yaks shouldering equipment and supplies, are coloring this myth with reality.</p>', 'link' => '/tour/taste-of-mongolia-with-naadam-festival.html'),
    array('src' => '/images/slider6_mini.jpg', 'alt' => 'Treasures of Mongolia', 'caption' => '<p><i>We have had an unspeakably delightful journey, one of those journeys which seem to divide one\'s life in two, <br/>by the new ideas they suggest and the new views of interest they open. George Eliot (Mary Ann Evans) (1819 - 1880)</i></p>', 'link' => '/tour/treasures-of-mongolia.html'),
    array('src' => '/images/slider1_mini.jpg', 'alt' => 'Khuvsgul Lake Tour', 'caption' => '<p style="font-size: 15px; color: #ffffff; background-color: rgba(0,0,0,0.7); padding: 5px; opacity: 0.7;">With Five-Star accommodations and lodges are chosen throughout for the best in Affordable Luxury. <br/>Mongolian Luxury Tours invites you on a journey of discovery with exciting, time-tested itineraries <br/>and attentive personal service in addition to exceptional value and Affordable Luxury.</p>', 'link' => '/tour/khuvsgul-lake-tour.html'),
    array('src' => '/images/slider5_mini.jpg', 'alt' => 'Gobi Desert tour', 'caption' => '<br/><p>This tour highlights the amazing Gobi Desert - a diversity of mountains, evergreen forests, sand dunes, and geological wonders.</p>', 'link' => '/tour/gobi-desert-tour.html'),
    array('src' => '/images/slider9_mini.jpg', 'alt' => 'Bird watching trip', 'link' => '/tour/bird-watching-trip.html'),
);
// registering the KnpMenu extension
$app->register(new \Knp\Menu\Silex\KnpMenuServiceProvider());

require 'menus.php';

$app['inquiry_form'] = $app['form.factory']->create(new \Enkuso\Form\ContactType(), array(), array())->createView();

return $app;