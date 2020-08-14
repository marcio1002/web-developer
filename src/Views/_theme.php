<?php
require_once dirname(__DIR__, 2) . "/vendor/autoload.php";

use WebDeveloper\Controllers\Componente;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <meta name="description" content="Os melhores cursos EAD de programação gratuito com certificado.">
  <meta name="author" content="Marcio alemão">
  <link rel="shortcut icon" type="image/x-icon" href="./src/assets/svg/web.svg">
  <link rel="stylesheet" href="./src/assets/css/materialize.min.css">
  <link rel="stylesheet" href="./src/assets/css/style.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?= $this->section("css"); ?>
  <title><?= $title; ?></title>
</head>

<body>
  <?php
  if ($this->section("error")) :
    echo $this->section("error");
  else :
    echo Componente::menu($lang);
    echo $this->section("content");
    if($this->section("cadastro-curso")):
      echo $this->section("cadastro-curso");
    else:
      echo Componente::footer($lang);
    endif;
  endif;
  ?>
  <!--jquery-->
  <script src="./src/assets/js/jquery.js"></script>
  <!--javaScript materialize -->
  <script src="./src/assets/js/materialize.min.js"></script>
  <!--JavaScript -->
  <script src="./src/assets/js/index.js"></script>
  <script> const BASE_URL = "https://127.0.0.1/www/web-developer/"; </script>
  <?= $this->section("scripts"); ?>
</body>

</html>