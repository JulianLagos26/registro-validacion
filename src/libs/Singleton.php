<?php

namespace Tellosa\App\Libs;

use PDO;

class Singleton
{
  private static $instancia = null;
  private $pdo;
  private function __construct()
  {
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
  }

  public static function getInstancia()
  {
    if (!isset(self::$instancia)) {
      self::$instancia = new Singleton();
    }
    return self::$instancia;
  }

  public function getPdo()
  {
    return self::$instancia->pdo;
  }
}
