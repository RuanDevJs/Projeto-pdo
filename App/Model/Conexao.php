<?php 

namespace App\Model;

class Conexao{
  private static $instance;

  public static function getConn(){
    if(!isset(self::$instance)){
      self::$instance = new \PDO(
        'mysql:host=localhost;
        dbname=prova_3c1;
        charset=utf8',
        'RIT0',
        '12345e'
      );
    }
    return self::$instance;
  }

}