<?php
include_once('config/db.php');

class Producto
{
    private $db;

    public $id;
    public $nombre;
    public $referencia;
    public $precio;  
    public $peso;
    public $categoria;
    public $stock;
    public $fechacreacion;
    public $fechaultimaventa;
 
	public function __CONSTRUCT()
	{
		try
		{
			$this->db=Conectar::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
	public function ListaProductos()
	{
		try
		{
			
			$result = array();
			$stm = $this->db->prepare("SELECT * FROM producto");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		
		}
		catch(Exception $e)
		{
			die($e->getMessage());
        }
  
	}
 
	public function Obtener($id)
	{
		try 
		{
			$stm = $this->db->prepare("SELECT * FROM producto WHERE id = ?");
			          
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->db->prepare("DELETE FROM producto WHERE id = ?");			          
 
			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE producto SET 
						Nombre      		= ?,
						Referencia          = ?, 
						Precio        = ?,
                        Peso        = ?,
                        Categoria        = ?,
                        Stock        = ?,
                        FechaUltimaVenta        = ?
						
				    WHERE id = ?";
 
			$this->db->prepare($sql)
			     ->execute(
				    array(
				    	$data->nombre, 
                        $data->referencia,                        
                        $data->precio,
                        $data->peso,
                        $data->categoria, 
                        $data->stock,
                        $data->fechaultimaventa,
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Vender($id)
	{
		try 
		{
			$sql = "UPDATE producto SET Stock  = 'Stock-1',	WHERE id = ?";
 
			$this->db->prepare($sql)
			     ->execute(
				    array($id)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
 
 
	public function Registrar(producto $data)
	{
		try 
		{
		$sql = "INSERT INTO producto (Nombre,Referencia,Precio,Peso,Categoria,Stock,FechaCreacion,FechaUltimaVenta) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
 
		$this->db->prepare($sql)
		     ->execute(
				array(
					$data->nombre, 
                    $data->referencia,                        
                    $data->precio,
                    $data->peso,
                    $data->categoria, 
                    $data->stock,
                    $data->fechacreacion,
                    $data->fechaultimaventa,
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}