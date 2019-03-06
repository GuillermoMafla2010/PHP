<?php
class Conexion_BDD_MVC_Cap78{
public static function Conexion(){
try{
$conexion=new PDO("mysql:host=localhost; dbname=usuarios","root","");
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conexion->exec("SET CHARACTER SET utf8");
}catch(Exception $e){
die("Error". $e->getMessage());
echo "Linea del error".$e->getLine();
}
return $conexion;
}
}
?>

