<?php
    
namespace WebDeveloper\Controllers;

use Exception;

class Translator {

    private static $language = array("pt-BR", "en-US");

    
    public function translate($params) {
        try {
            $name = hash("crc32","WDEV{$_SERVER['REMOTE_ADDR']}WDEV{$_SERVER['HTTP_USER_AGENT']}");
            session_name($name);

            if (
                session_status() == PHP_SESSION_DISABLED || 
                session_status() == PHP_SESSION_NONE
                ) 
                session_start();

            if(in_array($params["language"],static::$language)) {
                setcookie("lang",null,0,"/");

                $expire = time() + (12 * 30 * 24 * 3600);

                setcookie('lang', $params["language"], $expire, '/', "", false, true);

                echo json_encode(["error" => false,"code" => 201]);
            } else {
                echo json_encode(["error" => false,"code" => 304]);
            }

        }catch(Exception $ex) {
            header("{$_SERVER["SERVER_PROTOCOL"]} {$ex->getCode()}  server error");
        }finally {
            if (session_status() == PHP_SESSION_ACTIVE) {
                session_destroy(); session_write_close();
            }
        }
    }
}
    