<?php 
    require_once "menu.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de cursos</title>
    <link rel="shortcut icon" type="image/x-icon" href="svg/web.svg">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <?php
        menu();
    ?>
    <div class="row cursosbox">
        <h1>Cadastro do Curso</h1>
        <form action="cadastrarCursos.php" method="POST">
            <div>
                <div class="input-field col s5">
                    <input id="first_name" type="text" name="curso" class="validate input" />
                    <label class="active black-text" for="first_name">Digite o nome do curso:</label>
                </div>
            </div>
            <div class="btn-cursos">
                <button class="btn center waves-effect  red lighten-1" type="submit" ><i class=" material-icons right">book</i>Cadastrar</button>
            </div>
        </form>
    </div>
    <!--jaquery-->
    <script src="js/jquery.js"></script>
    <!--javaScript materialize -->
    <script src="js/materialize.min.js"></script>
    <!--JavaScript -->
    <script src="js/index.js"></script>
</body>

</html>