<?php



define("BASE_URL", "https://127.0.0.1/www/web-developer");

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: X-PINGARUNER, Content-Type');
header('Access-Control-Allow-Methods: POST, GET, PUT, DELETE');
header('Content-type: text/html; application/json;charset=UTF-8');
header("Accept-Language: *");
header("Content-Language: pt-BR,en");

function renderUrl(?string $url = null): string
{
  $baseUrl = BASE_URL;
  return empty($url) ? $baseUrl : "$baseUrl$url";    
}


define("BD_CONFIG",[
  "DRIVER" => "mysql",
  "HOST" => "localhost",
  "PORT" => "3306",
  "USERNAME" => "root",
  "PASSWD" => "",
  "DBNAME" => "web_developer",
  "OPTIONS" => [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]
]);