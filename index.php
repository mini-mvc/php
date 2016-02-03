<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\VarDumper\VarDumper;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class People{};
$people = new People();
$people->name = "N1k3";
$people->age = "21";

die(VarDumper::dump($people));
