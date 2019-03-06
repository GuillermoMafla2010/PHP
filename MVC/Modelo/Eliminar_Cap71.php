

<?php
require_once("Conexion_BDD_MVC_Cap78.php");
$base=Conexion_BDD_MVC_Cap78::Conexion();
$id=$_GET["Id"];
$base->query("DELETE FROM datos_usuarios where Id='$id'");
header("Location:../Index_Cap78.php");
?>

