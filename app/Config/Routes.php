<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('login', 'UserController::login', ['filter' => 'noAuth']);
$routes->add('register', 'UserController::register', ['filter' => 'noAuth']);

$routes->post('logout', 'UserController::logout', ['filter' => 'noAuth']);

$routes->get('waqi', 'Home::getWAQI');
$routes->get('aqi', 'Home::getCityAQI');
$routes->get('dominant-polutant', 'Home::getDomPol');
$routes->get('polutant', 'Home::getPol');
$routes->get('forecast', 'Home::getForecast');
