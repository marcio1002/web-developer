<?php
    require_once("conexao.php");

    $curso = $_POST['curso'];

   if($curso === "") {
        return "<script>location = 'cadasCursos.php'</script>";
   }

    $inseri = "INSERT INTO cursos (nomeCursos) VALUES('$curso');";
    $executa = mysqli_query($conexaoMysql, $inseri);

    echo $executa == 0 ? "<script>confirm('⛔ Erro ao guarda os dados no banco')</script>" : "<script>confirm('✔ Dados cadastrado')</script>";
?>