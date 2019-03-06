<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
	
	//$busqueda=$_GET["buscar"];
	$cod=$_GET["c_art"];
	$sec=$_GET["seccion"];
	$nom=$_GET["n_art"];
	$pre=$_GET["precio"];
	$fec=$_GET["fecha"];
	$imp=$_GET["importado"];
	$por=$_GET["p_orig"];
	
	require("datos_conexion.php");
	$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
	if (mysqli_connect_errno()){
	echo "Fallo al conectar con la BDD";
	exit();
	
	}
	mysqli_select_db($conexion,$nombre)or die ("No se encuentra la BDD");
	mysqli_set_charset($conexion , "utf8");
	$consulta="insert into hoja1 (CODART,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) values ('$cod','$sec','$nom','$pre','$fec','$imp','$por')";	
	$resultado=mysqli_query($conexion,$consulta);
	
	if ($resultado==false){
	echo "Error en la consulta";
	}else{
	echo "Registro guardado";
	}
	
		mysqli_close($conexion);

?>

</body>
</html>
