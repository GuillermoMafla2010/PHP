<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>

<?php	

	function ejecuta_consulta($labusqueda){
	//$busqueda=$_GET["buscar"];
	
	require("datos_conexion.php");
	$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
	mysqli_set_charset($conexion , "utf8");
	$consulta="select*from hoja1 where NOMBREARTICULO like'%$labusqueda%'";	
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
}
?>

</head>

<body>

<?php
 
 $mibusqueda=$_GET["buscar"];
 $mipagina=$_SERVER["PHP_SELF"];
 
 if ($mibusqueda!=NULL){
 
 ejecuta_consulta($mibusqueda);
 
 }else{
 
 echo("<form action ='".$mipagina."' method='get'>
	<label>Buscar:<input type='text' name='buscar'></label>
	<input type='submit' name='enviando' value='Aceptar'>
	</form>");
	}
?>
</body>
</html>
