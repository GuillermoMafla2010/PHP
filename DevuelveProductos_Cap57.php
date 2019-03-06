<?php
require ("Conexion_Cap57.php");

class DevuelveProductos extends Conexion{

	public function DevuelveProductos(){
	
		parent::__construct();
	
	}

	
	public function get_productos(){
	
	$resultado=$this->conexion_db->query('SELECT*FROM hoja1');
	$productos=$resultado->fetch_all(MYSQLI_ASSOC);
	
	return $productos;
	
	
	}
	

}



?>