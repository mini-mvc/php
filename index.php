<?php

use App\Controllers\HomeCtrl;
use App\Route;

require __DIR__ . '/vendor/autoload.php';


$route = new Route();
$route->get('home','HomeCtrl#index');
