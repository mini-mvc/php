<?php

use App\Controllers\Home;

include_once('autoload.php');

extract($_GET);

if(isset($url)){
  $url = explode('/',$url);
  $ctrl = $url[0];
}

if(isset($ctrl)){
  $ctrl = "\App\Controllers\\$ctrl";
  $controle = new $ctrl();
  $controle->index();
}
