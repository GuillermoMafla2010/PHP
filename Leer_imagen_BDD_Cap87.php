<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
$ID="";
$contenido="";
$tipo="";
$nombre="";

require("datos_conexion.php");
/*$conexion= new PDO ("mysql:host=localhost;dbname=usuarios","root","");
	$conexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$consulta="SELECT * FROM archivos WHERE id=3";
	$resultado=$conexion->prepare($consulta);
	$resultado->execute(array());
	while($fila =$resultado->fetch(PDO::FETCH_ASSOC)){
		$ID=$fila["id"];
		$contenido=$fila["Contenido"];
		$tipo=$fila["Tipo"];
		$nombre=$fila["Nombre"];
}*/
$conexion=mysqli_connect($host ,$usuario, $contra);
if (mysqli_connect_errno()){
echo "Fallo al conectar la BDD";
exit();
}
mysqli_select_db($conexion,$nombre) or die ("No se encuentra la BDD");

$consulta="SELECT * FROM archivos WHERE id=3";
$resultado=mysqli_query($conexion,$consulta);
while ($fila=mysqli_fetch_array($resultado)){
$ID=$fila["id"];
		$contenido=$fila["Contenido"];
		$tipo=$fila["Tipo"];
		$nombre=$fila["Nombre"];


}
echo "Id:".$ID."<br>";
echo "Tipo:".$tipo."<br>";
echo "Nombre".$nombre."<br>";
//echo "<img src='data:image/jpg; base64,".base64_encode($contenido)."'>";
echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) ."'>";
?>


</body>
</html>
