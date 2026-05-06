<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/keranjang', 'TransaksiController::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/riwayat', 'Home::riwayat');
$routes->get('/profil', 'Home::profil');
$routes->get('/pembayaran', 'Home::pembayaran');
