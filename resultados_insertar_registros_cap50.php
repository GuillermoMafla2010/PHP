<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$codigo_articulo=$_GET["codigo_articulo"];
$seccion=$_GET["seccion"];
$nombre_articulo=$_GET["nombre_articulo"];
$precio=$_GET["precio"];
$fecha=$_GET["fecha"];
$importado=$_GET["importado"];
$pais_origen=$_GET["pais_origen"];

require("datos_conexion.php");
$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
if(mysqli_connect_errno()){
echo "Fallo al conectar con la BDD";
exit();
}
mysqli_select_db($conexion,$nombre)or die ("No se encuentra la BDDD");
mysqli_set_charset($conexion,"utf8");
$sql="INSERT INTO productos (CODART,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAIS) values (?,?,?,?,?,?,?)";
$resultado=mysqli_prepare($conexion,$sql);
$ok=mysqli_stmt_bind_param($resultado,"sssssss",$codigo_articulo,$seccion,$nombre_articulo,$precio,$fecha,$importado,$pais_origen);
$ok=mysqli_stmt_execute($resultado);
if ($ok==false){
echo "Error al ejecutar la consulta";
}else{
	echo "Agregado nuevo registro";

	mysqli_stmt_close($resultado);
}





?>


</body>
</html>
