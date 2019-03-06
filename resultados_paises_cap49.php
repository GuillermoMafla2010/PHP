<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$pais=$_GET["buscar"];
require("datos_conexion.php");
$conexion=mysqli_connect($host,$usuario,$contra,$nombre);
if(mysqli_connect_errno()){
echo "Fallo al conectar con la BDD";
exit();
}
mysqli_select_db($conexion,$nombre)or die ("No se encuentra la BDDD");
mysqli_set_charset($conexion,"utf8");
$sql="SELECT CODART,SECCION, PRECIO , PAISDEORIGEN FROM hoja1 where PAISDEORIGEN=?";
$resultado=mysqli_prepare($conexion,$sql);
$ok=mysqli_stmt_bind_param($resultado,"s",$pais);
$ok=mysqli_stmt_execute($resultado);
if ($ok==false){
echo "Error al ejecutar la consulta";
}else{
$ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);
echo "Articulos encontrados: <br><br>";
while (mysqli_stmt_fetch($resultado)){
echo $codigo .  "  " . $seccion.  "  ".  $precio. "   ". $pais. "  "  ;
echo "<br>";
}
mysqli_stmt_close($resultado);
}




?>


</body>
</html>
