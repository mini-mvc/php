<?php

spl_autoload_register(function($classe){
  $arquivo =  "$classe.php";
  require_once($arquivo);
});
