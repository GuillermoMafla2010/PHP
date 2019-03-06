<?php
include_once("../Modelo/Objeto_Blog.php");
include_once("../Modelo/Manejo_Objetos.php");

try{
$miconexion= new PDO("mysql:host=localhost;dbname=blog","root","");
$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



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
}
if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){

$destino_de_ruta=$_SERVER['DOCUMENT_ROOT']."/CodigosPHP/imagenes/";
move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);
echo "El archivo ".$_FILES['imagen']['name'] ."se ha copiado en el directorio de imagenes";

} /* cierre del if isset */else{
echo "El archivo no se ha podido copiar al directorio de imagenes";
}// cierre else isset

$Manejo_Objetos= new Manejo_Objetos($miconexion);
$blog=new Objeto_Blog();
$blog->setTitulo(htmlentities(addslashes($_POST['campo_titulo']),ENT_QUOTES));
$blog->setFecha(Date("Y-m-d H:i:s"));
$blog->setComentario(htmlentities(addslashes($_POST['area_comentarios']),ENT_QUOTES));
$blog->setImagen($_FILES["imagen"]["name"]);
$Manejo_Objetos->insertaContenido($blog);
echo "<br> Entrada de blog agregada con exito <br>";

}catch(Exception $e){
die("Error:".$e->getMessage());
}

?>