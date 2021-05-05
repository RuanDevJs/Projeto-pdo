<?php

namespace App\Model;

class Posts {
  private $id, $nome, $descricao;

  public function getId(){
    return $this->id; 
  }

  public function setId($id){
    $this->id = $id; 
  }

  public function getNome(){
    return $this->nome; 
  }

  public function setNome($nome){
    $this->nome = $nome; 
  }

  public function getTitulo(){
    return $this->nome; 
  }

  public function setTitulo($nome){
    $this->nome = $nome; 
  }

  public function getDescricao(){
    return $this->descricao; 
  }

  public function setDescricao($descricao){
    $this->descricao = $descricao; 
  }
}