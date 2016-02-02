<?php

namespace App\Controllers;
use App\View;

class HomeCtrl {
  public function __construct(){

    $view = new View('home.php');
    $view->vars(array('msg'=>'Bem vindo!'));
  }
}
