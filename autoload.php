<?php

function auto_load($classe)
{
  $arquivo =  "$classe.php";
  require_once($arquivo);
}

spl_autoload_register("auto_load");
