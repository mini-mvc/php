<?php

namespace App;
class Route{

  private function error(){
    echo "Route not found";
  }

  public function get($url, $ctrl)
  {
    if(!isset($_GET['url']))
        $_GET['url'] = "/";

    if($url == $_GET['url'])
    {
      $ctrl = explode('#', $ctrl);
      $action = $ctrl[1];
      $class = $ctrl[0];
      $ctrl = "\App\Controllers\\$class";
      $controle = new $ctrl();
    }
    else
      $this->error();
  }

}
