<?php

require '../vendor/autoload.php';
require '../config.php';

// Setup custom Twig view
$twigView = new \Slim\Views\Twig();

$app = new \Slim\Slim(array(
    'debug' => true,
    'view' => $twigView,
    'templates.path' => '../templates/',
    'config' => $config
));

// GET index route
$app->get('/', function () use ($app) {
    $config = $app->config('config');
    $menu = lib\FExxx::getSections();
    $elements = lib\FExxx::getAllFrom('elements');
    $app->render('index.html', array('menu' => $menu, 'elements' => $elements, 'config' => $config));
});

// GET Folder to get all the elements
$app->get('/:folder', function ($folder) use ($app) {
    $config = $app->config('config');
    $menu = lib\FExxx::getSections();
    $elements = lib\FExxx::getAllFrom($folder);
    $app->render('index.html', array('menu' => $menu, 'elements' => $elements, 'config' => $config));
});

$app->run();
