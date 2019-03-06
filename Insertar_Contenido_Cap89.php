<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<p>
  <?php

$miconexion=mysqli_connect("localhost","root","","blog");
if(!$miconexion){
echo "La conexion ha fallado".mysqli_error();
exit();
} // cierre if conexion
if ($_FILES['imagen']['error']){
switch($_FILES['imagen']['error']){
case 1: // Error exceso de tañamao de archivo en php.ini
echo "El tamaño de archivo excede lo permitido";
break;
case 2: // Error tamaño archivo marcado desde formulario
echo "El tamaño del archivo excede los 2MB";
break;
case 3:
echo "El envio del archivo se interrumpio";
break;
case 4: 
echo "No se envio ningun archivo";
break; 
}} /* cierre del switch */ else{
echo "Entrada subida correctamente <br>";
if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){

$destino_de_ruta=$_SERVER['DOCUMENT_ROOT']."/CodigosPHP/imagenes/";
move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);
echo "El archivo ".$_FILES['imagen']['name'] ."se ha copiado en el directorio de imagenes";

} /* cierre del if isset */else{
echo "El archivo no se ha podido copiar al directorio de imagenes";
}// cierre else isset
}// cierre else switch

$eltitulo=$_POST['campo_titulo'];
$lafecha=date("Y-m-d H:i:s");
$comentarios=$_POST['area_comentarios'];
$laimagen=$_FILES['imagen']['name'];

$miconsulta="INSERT INTO contenido (Titulo, Fecha , Comentario , Imagen ) values ('".$eltitulo."','".$lafecha."','".$comentarios."','".$laimagen."')";


$resultado=mysqli_query($miconexion,$miconsulta);



echo "<br> Se ha agregado el comentario con exito <br>";

?>


<a href="Formulario_Blog_Cap89.php">Añadir nueva entrada </a> <br />
<a href="Mostrar_blog_Cap89.php"> Ver Blog</a> <br />
</body>
</html>
