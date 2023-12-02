<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'User::loginPage');
$routes->get('/register', 'User::registerPage');
$routes->get('/logout', 'User::logout');

$routes->get('/order', 'User::showOrder');
$routes->post('/add/(:num)', 'Product::add/$1');
$routes->post('/saveUser', 'User::addUser');
$routes->post('/auth', 'User::authUser');
