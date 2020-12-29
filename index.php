<?php
require __DIR__ . "/vendor/autoload.php";

require_once __DIR__ . "/src/config.php";

$router = new CoffeeCode\Router\Router(BASE_URL); 

ob_start();
ob_clean();

function directory($dir = null): \League\Plates\Engine
{
  $directory = __DIR__. "/src/Views" . $dir ?? __DIR__ . "/src/Views";
  return new League\Plates\Engine($directory,"php");
}

function getLanguage(): array
{
  if (
    session_status() == PHP_SESSION_NONE ||
    session_status() == PHP_SESSION_DISABLED
  )
  session_start();
  $lang = "pt-BR";
  if(isset($_COOKIE["lang"])) $lang = $_COOKIE["lang"];
  return LANGUAGE[$lang];
}

$router->group(null);
$router->get("/",fn() => print_r(directory()->render("index",["lang" => getLanguage()])));
$router->get("/cursos",fn() => print_r(directory()->render("cursos",["lang" => getLanguage()])));
$router->get("/saiba-mais", fn() => print_r(directory()->render("saibaMais",["lang" => getLanguage()])));
$router->get("/login",fn() => print_r(directory()->render("login",["lang" => getLanguage()])));
$router->get("/cadastro",fn() => print_r(directory()->render("cadastro",["lang" => getLanguage()])));
$router->get("/cadastro-de-cursos",fn() => print_r(directory()->render("cadasCursos",["lang" => getLanguage()])));

$router->get("/error/{httpError}", fn($params) => print_r(directory()->render("httpError",["errorCode" => $params["httpError"]])));

$router->namespace("WebDeveloper\Controllers");
$router->group("system");
$router->post("/traduzir","Translator:translate");
$router->post("/createcurses","Main:createCurses");
$router->post("/searchcurses","Main:searchCurses");
$router->post("/createaccountstudants","Main:createAccountStudents");

$router->dispatch();

if ($router->error()) $router->redirect("/error/{$router->error()}");


$content =  ob_get_contents();
ob_end_clean();

echo $content;

mb_http_output('UTF-8');