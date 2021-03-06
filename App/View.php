<?php

namespace App;

class View{

  private $arquivo;

  public function __construct($arquivo){
    $this->arquivo = $arquivo;
  }

  public function render(){
    echo file_get_contents("App\Views\\$this->arquivo");
  }


  public function vars($array){
    extract($array);
    include "App/Views/home.php";
  }

}
