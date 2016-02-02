<?php

class Route{

  public function get($url, $ctrl)
  {
    if(isset($_GET['url']))
    {
      $ctrl = explode('#', $ctrl);
      $action = $ctrl[1];
      $class = $ctrl[0];
      $ctrl = "\App\Controllers\\$class";
      $controle = new $ctrl();
    }
  }

}
