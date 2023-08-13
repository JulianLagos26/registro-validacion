<?php

namespace Tellosa\App\libs;

class Controlador
{
  public $datos;
  public function __construct()
  {
  }

  public function cargarVista($ruta, $datos = null)
  {
    $this->datos = $datos;
    require_once 'src/vista/' . $ruta . '.php';
  }
}