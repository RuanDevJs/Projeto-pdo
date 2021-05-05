<?php

namespace App\Model;

class PostsDao {
  public function read(){
    $sql =  "SELECT * FROM post";

    $find = Conexao::getConn()->prepare($sql);
    $find->execute();

    if($find->rowCount() > 0){
      $resultado = $find->fetchAll(\PDO::FETCH_ASSOC);
      return $resultado;
    }
  }

}