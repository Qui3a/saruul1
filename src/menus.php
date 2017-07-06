<?php
/*
 * This file is part of the TravelMongolia.us package.
 *
 * (c) Enkhbayasgalan Galsandorj (g.enkhbayasgalan@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$app['head_menu'] = function($app) {
    /** @var \Knp\Menu\ItemInterface $menu */
    $menu = $app['knp_menu.factory']->createItem('root')->setChildrenAttribute('class', 'pull-right inline');;

    $menu->addChild('Home', array('route' => 'homepage'))->setLinkAttribute('class', 'invarseColor');
    $menu->addChild('')->setAttribute('class', 'sep-vertical');
    $menu->addChild('Contact Us', array('route' => 'contact'))->setLinkAttribute('class', 'invarseColor');

    return $menu;
};
$app['main_menu'] = function($app) {
    $uri = $app['request']->getRequestUri();
    /** @var \Knp\Menu\ItemInterface $menu */
    $menu = $app['knp_menu.factory']->createItem('root')->setChildrenAttribute('class', 'nav');

    $menu->addChild('Home', array('route' => 'homepage', 'label' => '<i class="icon-home"></i>', 'extras' => array('safe_label' => true)))->setCurrentUri($uri);
    $aboutMongolia = $menu->addChild('About Mongolia', array('route' => 'page_show', 'routeParameters' => array('slug' => 'about-mongolia')))->setLabel('About Mongolia &nbsp;<i class="icon-caret-down"></i>')->setExtra('safe_label', true)->setCurrentUri($uri);
    $aboutMongolia->addChild('Nomadic Experience', array('route' => 'page_show', 'routeParameters' => array('slug' => 'nomadic-experience')))->setLabel('<i class="icon-caret-right"></i> Nomadic Experience')->setExtra('safe_label', true)->setCurrentUri($uri);
    $aboutMongolia->addChild('Mongolian Visa', array('route' => 'page_show', 'routeParameters' => array('slug' => 'mongolian-visa')))->setLabel('<i class="icon-caret-right"></i> Mongolian Visa')->setExtra('safe_label', true)->setCurrentUri($uri);
    $aboutMongolia->addChild('Journey Accommodations', array('route' => 'page_show', 'routeParameters' => array('slug' => 'journey-accommodations')))->setLabel('<i class="icon-caret-right"></i> Journey Accommodations')->setExtra('safe_label', true)->setCurrentUri($uri);
    $aboutMongolia->addChild('Geography', array('route' => 'page_show', 'routeParameters' => array('slug' => 'geography')))->setLabel('<i class="icon-caret-right"></i> Geography')->setExtra('safe_label', true)->setCurrentUri($uri);

    $tours = $menu->addChild('Tours', array('route' => 'tour_all'))->setLabel('Tours &nbsp;<i class="icon-caret-down"></i>')->setExtra('safe_label', true)->setCurrentUri($uri);
    foreach($app['content_tours']->getTours() as $key => $tour) {
        $c = $uri == $app['url_generator']->generate('tour_show', array('slug' => $key));
        if($c)
            $tours->setCurrent(true);
        $tours->addChild($tour['name'], array('route' => 'tour_show', 'routeParameters' => array('slug' => $key)))->setLabel('<i class="icon-caret-right"></i> '.$tour['name'] . (isset($tour['duration']) ? ' ('.$tour['duration'].')' : '') )->setExtra('safe_label', true)->setCurrentUri($uri);
    }
    $tours->addChild('Trip calendar', array('route' => 'page_show', 'routeParameters' => array('slug' => 'trip-calendar-2018')))->setLabel('<i class="icon-caret-right"></i> Trip Calendar')->setExtra('safe_label', true)->setCurrentUri($uri);

    $menu->addChild('Gallery', array('route' => 'gallery'));
    $menu->addChild('Tourist events', array('route' => 'page_show', 'routeParameters' => array('slug' => 'tourist-events')))->setCurrentUri($uri);
    $menu->addChild('Tourist attractions', array('route' => 'page_show', 'routeParameters' => array('slug' => 'tourist-attractions')))->setCurrentUri($uri);

    $aboutUs = $menu->addChild('About Us', array('route' => 'page_show', 'routeParameters' => array('slug' => 'about-us')))->setLabel('About Us &nbsp;<i class="icon-caret-down"></i>')->setExtra('safe_label', true)->setCurrentUri($uri);
    $aboutUs->addChild('Experience Luxury in Mongolia', array('route' => 'page_show', 'routeParameters' => array('slug' => 'experience-luxury-in-mongolia')))->setLabel('<i class="icon-caret-right"></i> Experience Luxury in Mongolia')->setExtra('safe_label', true)->setCurrentUri($uri);
    $aboutUs->addChild('Contact Us', array('route' => 'contact'))->setLabel('<i class="icon-caret-right"></i> Contact Us')->setExtra('safe_label', true)->setCurrentUri($uri);

    return $menu;
};
$app['knp_menu.menus'] = array('head' => 'head_menu', 'main' => 'main_menu');

return $app;