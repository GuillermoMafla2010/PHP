<?php
class Personas_Modelo_Cap78{
private $db;
private $personas;

public function __construct(){

	require_once("Conexion_BDD_MVC_Cap78.php");
	$this->db=Conexion_BDD_MVC_Cap78::Conexion();
	$this->personas=array();

}
public function get_personas(){
	require("Paginacion.php");
	$consulta=$this->db->query("SELECT*FROM datos_usuarios limit $inicio,$tamano_paginas");
	while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
		$this->personas[]=$filas;
	
	}
	
	return $this->personas;

}


}

?>