<?php

// GET index route
$app->get('/', function () use ($app) {
    $config = $app->config('config');
    $elements = lib\FExxx::getAllFrom('elements');
    $app->render('index.html', array('elements' => $elements, 'config' => $config));
});
