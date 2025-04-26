<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'home::index');
$routes->get('/welcome','home::contacto');
$routes->get('terminos', 'Terminos::index');
$routes->get('quienes_somos', 'Quienes::index');
$routes->get('contacto', 'Contacto::index');
$routes->get('compras', 'Compras::index');
