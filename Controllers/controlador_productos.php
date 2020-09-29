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
            $producto = $this->model->Obtener($_REQUEST['id']);
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

        $cliente->id > 0 
            ? $this->model->Actualizar($producto)
            : $this->model->Registrar($producto);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}