<?php

namespace WebDeveloper\Models;

use CoffeeCode\DataLayer\DataLayer;

class Alunos {
  protected int $id_aluno;
  protected string $nome;
  protected string $email;
  protected int $cpf;
  protected string $cidade;
  protected string $endereco;
  protected string $senha;
  protected int $id_curso;

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
