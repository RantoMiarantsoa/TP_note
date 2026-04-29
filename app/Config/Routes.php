<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/note', 'Note::index');
$routes->post('/note/create', 'Note::create');
$routes->post('/note/(:num)', 'Note::findByEtudiant/$1');
$routes->get('/etudiant', 'Etudiant::index');
$routes->get('/etudiant/(:num)', 'Etudiant::show/$1');
$routes->get('/etudiant/create', 'Etudiant::create');



