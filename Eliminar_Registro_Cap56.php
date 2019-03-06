<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php

$busqueda_cart=$_POST['c_art'];


$base=new PDO('mysql:host=localhost;dbname=usuarios','root','');
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$base->exec("SET CHARACTER SET utf8");
$sql="delete from hoja1 where CODART=:c_art";
$resultado=$base->prepare($sql);
$resultado->execute(array(":c_art"=>$busqueda_cart));
echo "Registro eliminado";

?> 
</body>
</html>
