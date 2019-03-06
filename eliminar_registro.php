<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
	
	//$busqueda=$_GET["buscar"];
	$cod= $_GET["c_art"];
	$sec= $_GET["seccion"];
	$nom= $_GET["n_art"];
	$pre= $_GET["precio"];
	$fec= $_GET["fecha"];
	$imp= $_GET["importado"];
	$por= $_GET["p_orig"];
	
	
	require("datos_conexion.php");
	$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
	mysqli_set_charset($conexion , "utf8");
	$consulta="delete from hoja1 where CODART='$cod'";	
	$resultado=mysqli_query($conexion,$consulta);
	if ($resultado==false){
	echo "Error en la consulta";
	}
	else {
	if (mysqli_affected_rows($conexion)==0){
	echo "no hay registros que eliminar con ese criterio";
	}else{
	echo " se han eliminado".mysqli_affected_rows($conexion)."registros";
	}
	}
	
	
	
	
		mysqli_close($conexion);

?>

</body>
</html>
