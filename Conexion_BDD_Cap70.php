<?php
try{
$base= new PDO('mysql:host=localhost;dbname=usuarios',"root","");
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
die('Error'.$e->getMessage());
echo "Linea del error";
}
?>
