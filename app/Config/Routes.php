<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/note', 'Note::index');

$routes->post('/note/create', 'Note::create');
$routes->post('/note/(:num)', 'Note::findByEtudiant/$1');
$routes->delete('/note/(:num)', 'Note::delete/$1');
$routes->put('/note/(:num)', 'Note::update/$1');
$routes->get('/note/liste', 'Note::listNote');
$routes->get('/note/(:num)', 'Note::findByEtudiant/$1');
$routes->get('/note/(:num)', 'Note::findByMatiere/$1');

$routes->get('/etudiant', 'Etudiant::index');
$routes->get('/etudiant/(:num)', 'Etudiant::show/$1');




