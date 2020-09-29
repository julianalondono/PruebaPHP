<?php
require_once 'config/db.php';
require_once 'Controllers/controlador_productos.php';

    $controller = new ControladorProducto();
    $controller->Index();    
?>

<?php
require_once 'config/db.php';
 
if(!isset($_REQUEST['p']))
{
    require_once 'Controllers/controlador_productos.php';
    $controller = new ControladorProducto();
    $controller->Index();    
}
else
{

    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    require_once 'Controllers/controlador_productos.php';
    $controller = new ControladorProducto();
    
    call_user_func( array( $controller, $accion ));
}