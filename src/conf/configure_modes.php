<?php
/* Mode-specific functionality */

/* Test */
$app->configureMode('test', function () use ($app) {
    $app->config(array(
        'log.enabled' => true,
        'log.level' => \Slim\Log::DEBUG,
        'debug' => true
    ));
});

/* Deployment */
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enabled' => true,
        'log.level' => \Slim\Log::INFO,
        'debug' => true
    ));
});

/* Acceptance */
$app->configureMode('acceptance', function () use ($app) {
    $app->config(array(
        'log.enabled' => false,
        'log.level' => \Slim\Log::WARN,
        'debug' => false
    ));
});


/* Production */
$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'log.enabled' => false,
        'log.level' => \Slim\Log::WARN,
        'debug' => false
    ));
});