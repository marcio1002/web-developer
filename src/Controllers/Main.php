<?php

namespace WebDeveloper\Controllers;

use WebDeveloper\Models\Data;
use Exception;
use WebDeveloper\Models\Alunos;
use WebDeveloper\Models\Cursos;

class Main  {

  public function createCurses($params): void 
  {
    try {
      $data = new Data();
      $data->open();
      $curse = new Cursos();
      foreach($params as $k => $v) $curse->$k = $v;
      $res = $data
        ->add("cursos","nome",count($curse->toArray()))
        ->prepareParam($curse->toArray())
        ->execNotRowSql();
      if($res)
        echo json_encode(["error" => false, "code" => 200]);
      else
        echo json_encode(["error" => true, "code" => 500]);

    }catch(Exception $ex) {
      header("{$_SERVER["SERVER_PROTOCOL"]} {$ex->getCode()}  server error");
    }
  }

  public function searchCurses(): void
  {
    try {
      $data = new Data();
      $data->open();
      $curses = $data->show("cursos")->executeSql();
      
      if($curses)
          echo json_encode(["error" => false, "code" => 200,"data" => is_array($curses) ? $curses : [$curses]]);
      else 
        echo json_encode(["error" => true, "code" => 500, "data" => []]);
    
    }catch(Exception $ex) {
      header("{$_SERVER["SERVER_PROTOCOL"]} {$ex->getCode()}  server error");
    }
  }
  public function createAccountStudents($params): void
  {
   try {
     $data = new Data();
     $aluno = new Alunos();

     foreach($params as $k => $v) {
       if($k == "cpf") 
        $aluno->$k = preg_replace("/\D/","",$v);
       else 
        $aluno->$k = $v;
     }

     $data->open();
     $res = $data
      ->add("alunos","nome,email,cpf,cidade,endereco,senha,id_curso",count($aluno->toArray()))
      ->prepareParam($aluno->toArray())
      ->execNotRowSql();

      if($res)
        echo json_encode(["error" => false, "code" => 200]);
      else
        echo json_encode(["error" => true, "code" => 500]);

   }catch(Exception $ex) {
      header("{$_SERVER["SERVER_PROTOCOL"]} {$ex->getCode()}  server error");
   }
    
  }
}