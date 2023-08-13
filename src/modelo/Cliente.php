<?php

namespace Tellosa\App\modelo;

use Exception;
use Tellosa\App\Libs\Conexion;
use PDOException;
use Tellosa\App\libs\Spdo;

class Cliente
{
  private $ci;

  private $nombre;

  private $apellido;

  private $edad;

  private $celular;

  private $email;

  private $contrasena;

  public function __construct($ci, $nombre, $apellido, $edad, $celular, $email, $contrasena)
  {
    if (empty($ci) || empty($nombre) || empty($apellido) || empty($edad) || empty($celular) || empty($email) || empty($contrasena)) {
      throw new Exception("Todos los campos son obligatorios");
    }
    $this->setCi($ci);
    $this->setNombre($nombre);
    $this->setApellido($apellido);
    $this->setEdad($edad);
    $this->setCelular($celular);
    $this->setEmail($email);
    $this->setContrasena($contrasena);
  }


  public function registro()
  {
    $pdo = null;
    $query = null;
    $pdo = Conexion::getConexion()->getPdo();
    $id = -1;
    try {
      $query = $pdo->prepare('INSERT INTO clientes
    (ci,
    nombre,
    apellido,
    edad,
    celular,
    email,
    contrasena) 
    VALUES(:ci, :nombre, :apellido, :edad, :celular, :email, :contrasena)');
      $query->bindParam(':ci', $this->ci);
      $query->bindParam(':nombre', $this->nombre);
      $query->bindParam(':apellido', $this->apellido);
      $query->bindParam(':edad', $this->edad);
      $query->bindParam(':celular', $this->celular);
      $query->bindParam(':email', $this->email);
      $query->bindParam(':contrasena', $this->contrasena);
      if ($query->execute()) {
        $id = $pdo->lastInsertId();
      }
    } catch (PDOException $e) {
      var_dump($e);
    } finally {
      $pdo = null;
    }
    echo "usuario creado correctamente";
  }
  public static function inicio($email, $contrasena)
  {
    $pdo = null;
    $query = null;
    $pdo = Conexion::getConexion()->getPdo();
    $id = -1;
    try {
      $query = $pdo->prepare('SELECT FROM clientes
    (ci,
    nombre,
    apellido,
    edad,
    celular,
    email,
    contrasena WHERE usuario = :usuario) 
    VALUES(:ci, :nombre, :apellido, :edad, :celular, :email, :contrasena)');
      $query->bindParam(':email', $email);
      $query->bindParam(':contrasena', $contrasena);
      $query->execute();
      $paswordBD = "";
      while ($row = $query->fetch()) {
        $$paswordBD = $row['contrasena'];
      }
      if ($contrasena == $paswordBD) {
        $tieneAcceso = true;
      }
    } catch (PDOException $e) {
      var_dump($e);
    } finally {
      $pdo = null;
    }
    if ($tieneAcceso == true){
    echo "usuario logeado";
  }
  }
  public static function listar()
  {
    $pdo = Conexion::getConexion()->getPdo();
    try {
      $query = $pdo->prepare("SELECT ci,nombre,apellido,edad,celular,email FROM clientes");
      $lista = [];
      while ($row = $query->fetch()) {
        $cliente = new Cliente($row['ci'], $row['nombre'], $row['apellido'], $row['edad'], $row['celular'], $row['email'], null);
        $lista[] = $cliente;
      }
      return $lista;
    } catch (PDOException $e) {
      var_dump($e);
    } finally {
      $pdo = null;
    }
  }
  public function getCi()
  {
    return $this->ci;
  }

  public function setCi($ci)
  {
    $lenght = strlen((string)$ci);
    if ($lenght = 8) {
      $this->ci = $ci;
    } else {
      throw new Exception("El campo CI debe tener 8 caracteres");
    }
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    if (strlen($nombre) <= 45) {
      $this->nombre = $nombre;
    } else {
      throw new Exception("El campo Nombre excede la longitud máxima");
    }
  }

  public function getApellido()
  {
    return $this->apellido;
  }

  public function setApellido($apellido)
  {
    if (strlen($apellido) <= 45) {
      $this->apellido = $apellido;
    } else {
      throw new Exception("El campo Apellido excede la longitud máxima");
    }
  }

  public function getEdad()
  {
    return $this->edad;
  }

  public function setEdad($edad)
  {
    if (is_numeric($edad) || $edad > 0) {
      $this->edad = $edad;
    } else {
      throw new Exception("El campo Edad debe ser un número positivo");
    }
  }

  public function getCelular()
  {
    return $this->celular;
  }

  public function setCelular($celular)
  {
    if (strlen($celular) <= 45) {
      $this->celular = $celular;
    } else {
      throw new Exception("El campo Celular excede la longitud máxima");
    }
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    if (strlen($email) <= 45) {
      $this->email = $email;
    } else {
      throw new Exception("El campo Email excede la longitud máxima");
    }
  }

  public function getContrasena()
  {
    return $this->contrasena;
  }

  public function setContrasena($contrasena)
  {
    if (strlen($contrasena) <= 55) {
      $this->contrasena = $contrasena;
    } else {
      throw new Exception("El campo Contraseña excede la longitud máxima");
    }
  }
}
