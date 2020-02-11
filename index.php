<?php
require 'vendor/autoload.php';

$app = new Slim\App();

$app->get('/', function($request, $response, $args) {
	return $response->write('Home!');
});

$app->get('/contact', function($request, $response, $args) {
	return $response->write('Contact form!');
});

$app->post('/contact', function($request, $response, $args) {
//
});

$app->run();
