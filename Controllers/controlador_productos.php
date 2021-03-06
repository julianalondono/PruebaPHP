<?php
require_once 'Models/modelo_productos.php';
 
class ControladorProducto{
    
    private $modelo;
    
    public function __CONSTRUCT(){
        $this->modelo = new Producto();
    }
    
    public function Index(){
        require_once 'Views/header.php';
        require_once 'Views/productos.php';  
    }
    
    public function Crud(){
        $producto = new Producto();
        if(isset($_REQUEST['id'])){
            $producto = $this->modelo->Obtener($_REQUEST['id']);
        }
        
        require_once 'Views/header.php';
        require_once 'Views/actualizar.php';   
    }
    
    public function Guardar(){
        $producto = new Producto();
        $producto->id = $_REQUEST['id'];
        $producto->nombre = $_REQUEST['nombre'];
        $producto->referencia = $_REQUEST['referencia'];
        $producto->precio = $_REQUEST['precio'];
        $producto->peso = $_REQUEST['peso'];  
        $producto->categoria = $_REQUEST['categoria']; 
        $producto->stock = $_REQUEST['stock'];  
        $producto->fechacreacion = $_REQUEST['fechacreacion'];   
        $producto->fechaultimaventa = $_REQUEST['fechaultimaventa'];  

        $producto->id > 0 ? $this->modelo->Actualizar($producto): $this->modelo->Registrar($producto);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->modelo->Eliminar($_REQUEST['id']);
        header('Location: /Views/productos.php');
    }
}