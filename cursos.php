<?php 
    require_once "menu.php";
    require_once "footer.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="description" content="Os melhores cursos EAD de programação gratuito com certificado.">
    <meta name="author" content="Marcio alemão">
    <title>Web Developer</title>
    <link rel="shortcut icon" type="image/x-icon" href="svg/web.svg">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php
        menu();
    ?>
    <div class="cards">
        <ul>
            <li>
                <div class="card z-depth-3">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/html-css.png">
                        <span class="card-title activator grey-text black-text ">Curso de HTML e CSS</span>
                    </div>
                    <div class="card-content">
                        <a href="cadastro.php" class="btn btn-large waves-effect waves-light "><i
                                class="material-icons small">card_giftcard</i> Gratis</a>
                    </div>
                </div>
                <!-- card 2 -->
                <div class="card z-depth-3">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/js.jpg">
                        <span class="card-title activator white-text ">Curso JavaScript</span>
                    </div>
                    <div class="card-content">
                        <a href="cadastro.php" class="btn btn-large waves-effect waves-light"><i
                                class="material-icons small">card_giftcard</i> Gratis</a>
                    </div>
                </div>
                <!-- card 3 -->
                <div class="card z-depth-3">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/php.png">
                        <span class="card-title activator white-text">Curso de PHP</span>
                    </div>
                    <div class="card-content">
                        <a href="cadastro.php" class="btn btn-large waves-effect waves-light"><i
                                class="material-icons small">card_giftcard</i> Gratis</a>
                    </div>
                </div>
            </li>
            <!-- card 4 -->
            <li>
                <div class="card z-depth-3">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/developer.png">
                        <span class="card-title activator grey-text text-darken-4">Curso de python, c# e c++</span>
                    </div>
                    <div class="card-content">
                        <span class="card-title  red-text">$100,00 </span>
                        <a href="cadastro.php" class="btn btn-large waves-effect waves-light"><i
                                class="material-icons small">shopping_cart</i> Comprar</a>
                    </div>
                </div>
                <!-- card 5 -->
                <div class="card z-depth-3">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/framework.png">
                        <span class="card-title activator grey-text text-darken-4">Curso completo de Frameworks web</span>
                    </div>
                    <div class="card-content">
                        <span class="card-title  red-text">$50,00 </span>
                        <a href="cadastro.php" class="btn btn-large waves-effect waves-light"><i
                                class="material-icons small">shopping_cart</i> Comprar</a>
                    </div>
                </div>
                <!-- card 6 -->
                <div class="card z-depth-3">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/cell.jpg">
                        <span class="card-title activator white-text">Curso Mobile completo</span>
                    </div>
                    <div class="card-content">
                        <span class="card-title  red-text">$50,00 </span>
                        <a href="cadastro.php" class="btn btn-large waves-effect waves-light"><i
                                class="material-icons small">shopping_cart</i> Comprar</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
  <?php
    footer();
  ?>
    <!--jaquery-->
    <script src="js/jquery.js"></script>
    <!--javaScript materialize -->
    <script src="js/materialize.min.js"></script>
    <!--JavaScript -->
    <script src="js/index.js"></script>
</body>

</html>