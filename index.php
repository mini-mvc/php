<?php

use App\Controllers\Home;

include_once('autoload.php');

$ctrl = new Home();
$ctrl->index();
