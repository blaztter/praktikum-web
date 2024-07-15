<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/form', 'FormController::index');
$routes->post('/form', 'FormController::tampil');
// $routes->get('/form', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->get('/latihanview', 'HelloWorld::halodunia');

$routes->get('/profile', 'formcon::Profile');
$routes->get('/experience', 'formcon::Experience');
// bab 5
$routes->get('/soraya', 'soraya::index');
$routes->get('/profilee', 'ProfileController::index');

// bab 6
$routes->get('/crud', 'Crud::index');
// $routes->match(['get', 'post'],'/crud/tambah', 'Crud::tambah');
$routes->get('/crud/tambah', 'Crud::tambah');
$routes->post('/crud/tambah', 'Crud::store');
$routes->get('/edit/(:segment)', 'Crud::edit/$1');
$routes->post('/crud/edditan', 'Crud::editan');
$routes->get('/crud/hapus/(segment)', 'Crud:hapus/$1');