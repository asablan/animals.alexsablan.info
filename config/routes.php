<?php

use App\Controllers\AdminController;
use App\Controllers\HomeController;

$routes = [
    [
        'path' => '/',
        'controller' => HomeController::class,
        'action' => 'index',
        'method' => 'GET'
    ],
    [
        'path' => '/admin',
        'controller' => AdminController::class,
        'action' => 'index',
        'method' => 'GET'
    ],
    [
        'path' => '/admin/create-slideshow',
        'controller' => AdminController::class,
        'action' => 'createSlideshow',
        'method' => 'GET'
    ],
    [
        'path' => '/admin/create-slideshow',
        'controller' => AdminController::class,
        'action' => 'createSlideshow',
        'method' => 'POST'
    ],
];
