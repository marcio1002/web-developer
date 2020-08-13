<?php
    require_once "conexao.php";

    $curso = $_POST['curso'];

   if($curso === "") {
        echo "<script>alert('🚫 valor nulo')</script>";
        echo "<script>alert('',location = 'cadasCursos.php')</script>";
        exit;
   }

    $inseri = "INSERT INTO cursos (nomeCursos) VALUES('$curso');";
    $executa = mysqli_query($conexaoMysql, $inseri);

    echo $executa == 0 ? "<script>confirm('⛔ Erro ao guarda os dados no banco')</script>" : "<script>confirm('✔ Dados cadastrado', location = 'cadasCursos.php')</script>";
?>