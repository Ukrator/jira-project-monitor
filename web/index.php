<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../src/Resources/view',
));

$app->get('/', function () use ($app) {
    return $app['twig']->render('monitor.twig.html', []);
});

$app->run();