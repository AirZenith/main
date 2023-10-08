<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->add('login', 'UserController::login');
$routes->add('register', 'UserController::register');

$routes->post('logout', 'UserController::logout', ['filter' => 'noAuth']);

$routes->get('waqi', 'AqiController::getWAQI');
$routes->get('aqi', 'AqiController::getCityAQI');
$routes->get('dominant-polutant', 'AqiController::getDomPol');
$routes->get('polutant', 'AqiController::getPol');
$routes->get('polutant-forecast', 'AqiController::getPolForecast');

$routes->get('/current-location', 'AqiController::getCurrentLocation');
$routes->get('/temp', 'AqiController::getCurrentTemp');
$routes->get('/weather-forecast', 'AqiController::getForecast');
