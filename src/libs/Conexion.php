<?php

namespace Tellosa\App\libs;

use PDO;
use PDOException;

class Conexion
{
  private static $conexion;
  private $pdo;

  private function __construct()
  {
    try {
      $host     = constant('HOST');
      $port     = constant('PORT_DB');
      $db       = constant('DB');
      $user     = constant('USER');
      $password = constant('PASSWORD');
      $charset  = constant('CHARSET');
      $connection = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";
      $options    = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
      ];
      $this->pdo = new PDO($connection, $user, $password, $options);
    } catch (PDOException $e) {
      print_r('Error connection: ' . $e->getMessage());
    }
  }

  public static function getConexion()
  {
    if (!isset(self::$conexion)) {
      self::$conexion = new Conexion();
    }
    return self::$conexion;
  }

  /**
   * Get the value of pdo
   */
  public function getPdo()
  {
    return $this->pdo;
  }
}