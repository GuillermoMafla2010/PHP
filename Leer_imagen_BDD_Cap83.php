<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
$conexion= new PDO ("mysql:host=localhost;dbname=usuarios","root","");
	$conexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");
	$consulta="SELECT FOTO FROM hoja1 WHERE CODART='AR01'";
	$resultado=$conexion->prepare($consulta);
	$resultado->execute(array());
	while($fila =$resultado->fetch(PDO::FETCH_ASSOC))
		$ruta_img=$fila["FOTO"];


?>

<div>
<img src="/intranet/uploads/<?php echo $ruta_img;?>" alt="Imagen del primer articulo" width="258"/>
</div>
</body>
</html>
