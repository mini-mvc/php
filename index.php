<?php

use App\Controllers\HomeCtrl;

include_once('autoload.php');

$route = new Route();

$route->get('home','HomeCtrl#index');
