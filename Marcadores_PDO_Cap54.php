<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$busqueda_sec=$_GET['seccion'];
$busqueda_porig=$_GET['p_orig'];
$base=new PDO('mysql:host=localhost;dbname=usuarios','root','');
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$base->exec("SET CHARACTER SET utf8");
$sql="select NOMBREARTICULO,SECCION,PRECIO,PAISDEORIGEN FROM hoja1 where SECCION= :SECC AND PAISDEORIGEN=:PORIG";
$resultado=$base->prepare($sql);
$resultado->execute(array(":SECC"=>$busqueda_sec,":PORIG"=>$busqueda_porig));
while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
echo "Nombre Articulo ". $registro['NOMBREARTICULO']."Pais de Origen".$registro['PAISDEORIGEN']."<br>";


}



//$resultado->closeCursor();




?> 
</body>
</html>
