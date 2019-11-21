<?php
    session_start(); 

    if(!isset($_GET['idioma'])) {
      header($_SESSION['idioma'] = require_once 'pt-br.php');

    }else if(isset($_GET['idioma'])) {

       header( require_once $_GET['idioma'].".php");
    }

?>  