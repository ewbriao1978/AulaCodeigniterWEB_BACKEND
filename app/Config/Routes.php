<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/tela', 'Home::tela_func');
$routes->get('/telinha','Home::telinhafunc');
$routes->get('/formulario','Home::form');
$routes->post('/formreceivedata','Home::receiveData');
