<?php
/*
 * This file is part of the TravelMongolia.us package.
 *
 * (c) Enkhbayasgalan Galsandorj (g.enkhbayasgalan@gmail.com)
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/** @var $app Silex\Application */

$app->mount('/', new \Enkuso\Controller\PageControllerProvider());
$app->mount('/tour', new \Enkuso\Controller\TourControllerProvider());

return $app;