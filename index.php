<?php 
    require_once "menu.php";
    require_once "footer.php" ;   
    require_once "tradutor.php";
    $_SESSION['idioma'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="description" content="Os melhores cursos EAD de programação gratuito com certificado.">
    <meta name="author" content="Marcio alemão">
    <title><?php echo $title;?></title>
    <link rel="shortcut icon" type="image/x-icon" href="svg/web.svg">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php 
    
        menu($menu, $menuSM, $menuIdioma,$btnBr, $btnEn);
    ?>
    <div id="principal">
        <div class="row">
            <div class=" col l4 s6">
                <div class="caixa-text col s8">
                    <p><?php echo $p1; ?></p>
                </div>
            </div>
            <div class="caixa-img col  s6">
                <img class="img-desen responsive-img" src="img/desen.jpg" />
            </div>
        </div>
    </div>
    <div class="slide-carrosel">
        <div class="carousel carousel-slider">
            <a class="carousel-item" id="um" href="#one!"><img src="img/web-designer.jpg"></a>
            <a class="carousel-item" id="dois" href="#two!"><img src="img/lenguage.jpg"></a>
            <a class="carousel-item" id="tres" href="#three!"><img src="img/web-dev.jpg"></a>
        </div>
    </div>
   <?php 
    footer($sujestoes,$contatos,$freepik,$redeSociais);
   ?>
    <!--jaquery-->
    <script src="js/jquery.js"></script>
    <!--javaScript materialize -->
    <script src="js/materialize.min.js"></script>
    <!--JavaScript -->
    <script src="js/index.js"></script>
</body>

</html>