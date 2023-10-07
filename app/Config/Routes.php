<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('login', 'UserController::login', ['filter' => 'noAuth']);
$routes->add('register', 'UserController::register', ['filter' => 'noAuth']);

$routes->post('logout', 'UserController::logout', ['filter' => 'noAuth']);

$routes->get('waqi', 'AqiController::getWAQI');
$routes->get('aqi', 'AqiController::getCityAQI');
$routes->get('dominant-polutant', 'AqiController::getDomPol');
$routes->get('polutant', 'AqiController::getPol');
$routes->get('forecast', 'AqiController::getForecast');
