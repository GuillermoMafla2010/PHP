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
//	echo "<table><tr><td>";
    echo"<form action='Actualizar.php' method='get'>";
	echo"<input type='text' name='c_art' value='".$fila["CODART"]."'><br>";
	echo"<input type='text' name='n_art' value='".$fila["NOMBREARTICULO"]."'><br>";
	echo"<input type='text' name='seccion' value='".$fila["SECCION"]."'><br>";
	echo"<input type='text' name='importado' value='".$fila["IMPORTADO"]."'><br>";
	echo"<input type='text' name='precio' value='".$fila["PRECIO"]."'><br>";
	echo"<input type='text' name='fecha' value='".$fila["FECHA"]."'><br>";
	echo"<input type='text' name='p_origen' value='".$fila["PAISDEORIGEN"]."'><br>";
	
	echo "<input type='submit' name='enviando' value='Actualizar'>";
	
	
	echo"</form>";
	
}

		mysqli_close($conexion);

?>

</body>
</html>
