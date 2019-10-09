<?php
    require_once("conexao.php");

    $nomeUsuario = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];
    $curso = $_POST['curso'];

    if ($nomeUsuario == "" || $email == "" || $cpf == "" || $cidade == "" || $endereco == "" || $senha == "" || $curso == "") {
        echo "<script>alert('🚫 valor nulo')</script>";
        echo "<script>alert('',location = 'cadasCursos.php')</script>";
        exit;
    }

    $inseri = "INSERT INTO alunos(nome,email,cpf,cidade,endereco,senha,id_curso) VALUES ('$nomeUsuario','$email','$cpf','$cidade','$endereco','$senha','$curso');";
    $query = mysqli_query($conexaoMysql, $inseri);

        echo $query == 0 ? "<script>confirm('⛔ Erro ao guarda os dados no banco')</script>" : "<script>confirm('✔ Dados cadastrado', location = 'cadastro.php')</script>";
?>