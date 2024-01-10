<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->group('/', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'Home::index');
});

$routes->get('login', 'LoginController::index');
$routes->post('api/login', 'LoginController::login');


// auto route
$routes->setAutoRoute(true);