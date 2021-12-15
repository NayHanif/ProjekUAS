<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Routes for Homepage
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/article', 'Article::article');

$routes->get('/article/(:any)', 'Article::articlePage/$1');

// Routes for User
$routes->get('/dashboard/(:any)', 'User::dashboard/$1');
$routes->get('/tukar/(:any)', 'User::tukar/$1');
$routes->get('/profile/(:any)', 'User::profile/$1');

$routes->get('/destroy', 'Auth::destroy');

// Routes for Admin
$routes->get('/admin', 'Admin::userList');
$routes->get('/admin/user-list', 'Admin::userList');
$routes->get('/admin/tukar-list', 'Admin::tukarList');
$routes->get('/admin/create-article', 'Admin::createArticle');
$routes->get('/admin/tukar/(:any)', 'Admin::button/$1');
$routes->get('/tukar/button/(:any)', 'Tukar::button/$1');
$routes->get('/admin/article', 'Admin::article');
$routes->get('/admin/article-list', 'Admin::articleList');
$routes->get('/admin/article/(:any)', 'Admin::deleteArticle/$1');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
