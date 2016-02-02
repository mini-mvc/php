<?php

namespace App\Controllers;
use App\View;

class Home {
  public function index(){

    $view = new View('home.php');
    $view->vars(array('msg'=>'Bem vindo!'));
  }
}
