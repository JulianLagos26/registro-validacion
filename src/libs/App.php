<?php

namespace Tellosa\App\Libs;


class App
{
  public static function iniciar()
  {
    $c = $_GET['c'] ?? "index";
    $m = $_GET['m'] ?? "index";
    $con = ucfirst($c) . "_Controller";
    $conRuta = "src/controller/" . $con . ".php";
    require_once $conRuta;
    $controlador = new $con();
    $controlador->{$m}();    
  }
}

