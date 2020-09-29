<?php

class Conectar
{
    public static function StartUp()
    {
        $db = new PDO('mysql:host=localhost;dbname=pruebakcrm;charset=utf8','root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $db;
    }
}


?>

