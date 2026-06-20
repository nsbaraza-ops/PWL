<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PwnedController::index');
$routes->post('/cek-email', 'PwnedController::check');