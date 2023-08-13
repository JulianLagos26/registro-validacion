<?php

use Tellosa\App\modelo\Cliente;
use Tellosa\App\libs\Controlador;


class Cliente_Controller extends Controlador
{
  public function crear()
  {
    $this->cargarVista('Cliente/login');
  }
  public function registro()
  {
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $cliente = new Cliente($ci, $nombre, $apellido, $edad, $celular, $email, $contrasena);
    $id = $cliente->registro();
  }
  public function inicio()
  {
    $email = trim($_POST['email'])?? "defecto";
    $contrasena = trim($_POST['contrasena']) ?? "defecto";
    Cliente::inicio($email, $contrasena);
  }
}