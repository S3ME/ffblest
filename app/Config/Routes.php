<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

service('auth')->routes($routes);

// Backoffice
$routes->group('office', ['filter' => ['chain','group:superadmin,admin']], static function ($routes) {
    service('auth')->routes($routes);
    $routes->get('/', 'Office::index');
    $routes->group('blog', static function ($routes) {
        $routes->get('/', 'Kegiatan::indexoffice');
        $routes->get('add', 'Kegiatan::indexadd');
        $routes->get('edit-(:num)', 'Kegiatan::indexedit/$1');
        $routes->post('new', 'Kegiatan::new');
        $routes->post('edit/(:num)', 'Kegiatan::edit/$1');
        $routes->post('delete', 'Kegiatan::delete');
        $routes->post('upload', 'Kegiatan::upload');
    });
    $routes->group('users', ['filter' => 'group:superadmin'], static function ($routes) {
        $routes->get('/', 'Users::index');
        $routes->post('new', 'Users::new');
        $routes->post('edit/(:num)', 'Users::edit/$1');
        $routes->post('delete', 'Users::delete');
    });
    $routes->group('gallery', static function ($routes) {
        $routes->get('/', 'Gallery::index');
        $routes->post('upload', 'Gallery::upload');
        $routes->post('delete', 'Gallery::delete');
    });
});

$routes->get('/', 'Home::index');
$routes->get('profil', 'Home::profile');
$routes->get('gallery', 'Gallery::page');
$routes->get('page-1', 'Home::page1');

// Migration
$routes->get('migration', 'Home::migration');

$routes->group('kegiatan', static function ($routes) {
    $routes->get('/', 'Kegiatan::index');
    $routes->get('(:any)', 'Kegiatan::detail/$1');
});