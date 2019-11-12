<?php 
    require_once "menu.php";
    require_once "footer.php";
    require_once "tradutor.php";
    $_SESSION['idioma']
?>

<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $sbMaisTitle;?></title>
    <link rel="shortcut icon" type="image/x-icon" href="svg/web.svg">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <?php  menu($menu, $menuSM, $menuIdioma,$btnBr, $btnEn);?>
    <div class="saibaMais">
        <div class="row">
            <div class="col s6 m4 left-align">
                <img class="materialboxed responsive-img" src="https://image.freepik.com/vetores-gratis/conceito-de-desenvolvimento-de-aplicativos-com-design-plano_23-2147850291.jpg" alt="desenvolvimento de software">
            </div>
    <h1 class="center-align"><?php echo $sbMaisH1;?></h1>
            <p><?php echo $sbMaisP;?></p>
        </div>
    </div>
    <?php footer($sujestoes,$contatos,$freepik,$redeSociais);?>
    <script src="js/jquery.js"></script>
    <!--javaScript materialize -->
    <script src="js/materialize.min.js"></script>
    <!--JavaScript -->
    <script src="js/index.js"></script>
</body>
</html>