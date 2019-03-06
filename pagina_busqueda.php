<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
	
	$busqueda=$_GET["buscar"];
	
	require("datos_conexion.php");
	$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
	mysqli_set_charset($conexion , "utf8");
	$consulta="select*from hoja1 where NOMBREARTICULO like'%$busqueda%'";	
	$resultado=mysqli_query($conexion,$consulta);
	while($fila=mysqli_fetch_array($resultado,MYSQL_ASSOC)){
	echo "<table><tr><td>";
	echo $fila["CODART"] . " </td><td>";
	echo $fila["NOMBREARTICULO"] . " </td><td>";
	echo $fila["PAISDEORIGEN"] . " </td><td></tr></table>";
	
	echo"<br>";
	echo"<br>";
}

		mysqli_close($conexion);

?>

</body>
</html>
