<?php
require ("Conexion_Cap58.php");

class DevuelveProductos extends Conexion{

	public function DevuelveProductos(){
	
		parent::__construct();
	
	}

	
	public function get_productos($dato){
	
	$sql="SELECT * FROM hoja1 where PAISDEORIGEN='".$dato."'";
	$sentencia->$this->conexion_db->prepare($sql);
	$sentencia->execute(array());
	$resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
	$sentencia->closeCursor();
	return $resultado;
	/*
	$resultado=$this->conexion_db->query('SELECT*FROM hoja1 where PAISDEORIGEN="'.$dato.'"');
	$productos=$resultado->fetch_all(MYSQLI_ASSOC);
	
	return $productos;
	*/
	
	}
	

}



?>