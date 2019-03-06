<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php

$conexion=new mysqli("localhost","root","","usuarios");

if($conexion-> connect_errno){
echo "Fallo la conexion con la base de datos".$conexion->connect_errno;
}
$conexion->set_charset("utf8");
$sql="SELECT*FROM hoja1";
$resultados=$conexion->query($sql);
if ($conexion->errno){
die($conexion->error);
}

while($fila=$resultados->fetch_assoc()){
echo "<table><tr><td>";
echo $fila['CODART'] ."<td></td>";
echo $fila['NOMBREARTICULO'] ."<td></td></tr></table>";
echo "<br>";
echo "<br>";


}

$conexion->close();
?>
</body>
</html>
