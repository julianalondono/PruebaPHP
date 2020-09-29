<?php
require_once 'config/db.php';
require_once 'Controllers/controlador_productos.php';

    $controller = new ControladorProducto();
    $controller->Index();    
