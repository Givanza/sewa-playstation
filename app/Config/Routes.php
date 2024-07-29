<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// admin Routes
$routes->get('/home', 'AdminController::index');
$routes->post('/home', 'AdminController::login');
$routes->get('/', 'AdminController::formLogin');
$routes->get('/register', 'AdminController::register');
$routes->get('/pinjam', 'AdminController::pinjam');
$routes->get('/selesai', 'AdminController::selesai');
$routes->get('/transaksi', 'AdminController::transaksi');


// users routes
$routes->get('/user', 'UserController::user');
$routes->get('/history', 'UserController::history');
$routes->get('/payments', 'UserController::payments');