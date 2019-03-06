<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>ACTUALIZAR</h1>
<?php
require_once("Conexion_BDD_MVC_Cap78.php");
$base=Conexion_BDD_MVC_Cap78::Conexion();
if (!isset($_POST["bot_actualizar"])){
$id=$_GET["Id"];
$Nombre=$_GET["nom"];
$Apellido=$_GET["ape"];
$Direccion=$_GET["dir"];
}else{
$Id=$_POST["id"];
$nombre=$_POST["nom"];
$apellido=$_POST["ape"];
$direccion=$_POST["dir"];

$sql="UPDATE datos_usuarios SET Nombre=:miNom,Apellido=:miApe,Direccion=:miDir WHERE id=:miId";
$resultado=$base->prepare($sql);
$resultado->execute(array(":miId"=>$Id,":miNom"=>$nombre,":miApe"=>$apellido,":miDir"=>$direccion)); 

header("Location:../Index_Cap78.php");

}
?>
<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id?>" ></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $Nombre?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $Apellido?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $Direccion?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>