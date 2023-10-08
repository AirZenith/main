<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/challenges', 'Home::challenges');
$routes->get('/challenges/history', 'Home::history');
$routes->get('/reward', 'Home::reward');
$routes->get('/learn', 'Home::learn');
$routes->get('/community', 'Home::community');

$routes->add('/login', 'UserController::login', ['filter' => 'noauth']);
$routes->add('/register', 'UserController::register', ['filter' => 'noauth']);
$routes->post('/logout', 'UserController::logout', ['filter' => 'auth']);

$routes->get('/waqi', 'AqiController::getWAQI');
$routes->get('/aqi', 'AqiController::getCityAQI');
$routes->get('/dominant-polutant', 'AqiController::getDomPol');
$routes->get('/polutant', 'AqiController::getPol');
$routes->get('/polutant-forecast', 'AqiController::getPolForecast');

$routes->get('/current-location', 'AqiController::getCurrentLocation');
$routes->get('/temp', 'AqiController::getCurrentTemp');
$routes->get('/weather-forecast', 'AqiController::getForecast');

$routes->group('test', function ($routes) {
    $routes->get('me', 'AqiController::getCurrentLocation');
});
