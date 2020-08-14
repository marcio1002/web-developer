<?php

namespace WebDeveloper\Models;

use CoffeeCode\DataLayer\DataLayer;

class Cursos  {
  protected int $id_curso;
  protected string $nome;


  public function __get($name)
  {
    return $this->$name;
  }

  public function __set($name, $value)
  {
    $this->$name = $value;
  }

  public function __isset($name)
  {
    return isset($this->$name);
  }

  public function toArray(): ?array
  {
    $array = [];
    foreach($this as $k => $v) $array[$k] = $v;
    return $array;
  }
}
