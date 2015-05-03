<?php
// Include CFlashingMessage
include('../../autoloader.php');

$di->setShared('flash', function() {
    $flash = new \lova\CFlashingMessage\CFlashingMessage();
    return $flash;
});

// Starts the session (required by the Flashy class)
$app->session;

// Extra stylesheet
$app->theme->addStylesheet('css/flash.css');

// Routes
$app->router->add('', function() use ($app) {

    $app->theme->setTitle("Flash test");

    $app->session;

    $app->flash->add('info', 'This is an info message');
    $app->flash->add('success', 'This is a success message');
    $app->flash->add('warning', 'This is a warning message');
    $app->flash->add('error', 'This is an error message');
    
    $app->flash->message('info', 'This is an info message');
    $app->flash->message('success', 'This is a success message');
    $app->flash->message('warning', 'This is a warning message');
    $app->flash->message('error', 'This is an error message');