<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
	
	//$busqueda=$_GET["buscar"];
	
	require("datos_conexion.php");
	$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
	mysqli_set_charset($conexion , "utf8");
	$consulta="insert into hoja1 (CODART, SECCION, 		     NOMBREARTICULO) values ('AR44','Deportes','Jabulani Balon')";	
	$resultado=mysqli_query($conexion,$consulta);
	
		mysqli_close($conexion);

?>

</body>
</html>
