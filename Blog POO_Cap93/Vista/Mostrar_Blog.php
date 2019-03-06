<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php
include("../Modelo/Manejo_Objetos.php");
try{
$miconexion= new PDO("mysql:host=localhost;dbname=blog","root","");
$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$Manejo_Objetos = new Manejo_Objetos($miconexion);
$tabla_blog=$Manejo_Objetos->getContenidoPorFecha();

if (empty($tabla_blog)){

echo "No hay entradas de blog aun";

}

foreach ($tabla_blog as $valor){
echo "<h3>".$valor->getTitulo()."</h3>";
echo "<h4>".$valor->getFecha()."</h4>";
echo "<div style='width:400px'>";
echo $valor->getComentario()."</div>";
if ($valor->getImagen()!=""){
echo "<img src='/CodigosPHP/imagenes/";
echo $valor->getImagen()."'width='300px' height='200px'/>";
}
echo "<hr>";
}
}catch(Exception $e){
die("Error:".$e->getMessage());
}

?>
<br>
<a href="Formulario_Cap89.php">Volver a la pagina de insercion </a>
</body>
</html>
