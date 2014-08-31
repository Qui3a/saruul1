<?php
date_default_timezone_set('Asia/Ulaanbaatar');
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'fe80::1', '::1'))
) {
    require __DIR__.'/../resources/config/prod.php';
} else {
    require __DIR__.'/../resources/config/dev.php';
}

require __DIR__.'/../src/app.php';

require __DIR__.'/../src/controllers.php';

$app['http_cache']->run();