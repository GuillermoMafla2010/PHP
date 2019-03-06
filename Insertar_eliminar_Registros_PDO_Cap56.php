<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php

$busqueda_cart=$_POST['c_art'];
$busqueda_seccion=$_POST['seccion'];
$busqueda_nart=$_POST['n_art'];
$busqueda_precio=$_POST['precio'];
$busqueda_fecha=$_POST['fecha'];
$busqueda_importado=$_POST['importado'];
$busqueda_porig=$_POST['p_orig'];

$base=new PDO('mysql:host=localhost;dbname=usuarios','root','');
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$base->exec("SET CHARACTER SET utf8");
$sql="insert into hoja1 (CODART,SECCION,NOMBREARTICULO,PRECIO,FECHA,IMPORTADO,PAISDEORIGEN) values (:c_art, :seccion , :n_art, :precio ,:fecha,:importado , :p_orig)";
$resultado=$base->prepare($sql);
$resultado->execute(array(":c_art"=>$busqueda_cart ,":seccion"=>$busqueda_seccion,":n_art"=>$busqueda_nart ,":precio"=>$busqueda_precio,":fecha"=>$busqueda_fecha,":importado"=>$busqueda_importado,":p_orig"=>$busqueda_porig));
echo "Registro insertado";

?> 
</body>
</html>
