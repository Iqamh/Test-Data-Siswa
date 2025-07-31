<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Siswa::index');
$routes->get('/create', 'Siswa::create');
$routes->post('create/store', 'Siswa::store');
$routes->get('/delete/(:num)', 'Siswa::delete/$1');
$routes->get('/detailSiswa/(:num)', 'Siswa::detail/$1');
$routes->get('/detailSiswa/edit/(:num)', 'Siswa::edit/$1');
$routes->post('/detailSiswa/update/(:num)', 'Siswa::update/$1');


