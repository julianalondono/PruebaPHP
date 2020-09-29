<?php

/*class Conectar extends mysqli{
    #Credenciales de la DB
    public $connection;
    const Host = "localhost";
    const Database = "pruebakcrm";
    const User = "root";
    const Password = "";

    #Constructor
    public function __construct(){    
        $this->connection = new mysqli(self::Host, self::User, self::Password,self::Database) or die('Error de conexion'. mysqli_errno($connection));;
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    }
}*/

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

