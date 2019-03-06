<?php

if (isset($_POST["Enviar"])){

$nombre=$_POST["nombre"];
$edad=$_POST["edad"];

switch(true){

case $nombre=="Juan" && $edad=="1234":
echo "Usuario autorizado, Bienvenido" ;
break;

case $nombre=="Maria" && $edad=="2222":
echo "Usuario autorizado, Bienvenido " ;
break;

case $nombre=="Pedro" && $edad=="3333":
echo "Usuario autorizado, Bienvenido " ;
break;

default:
echo "Usuario no autorizado"; 

}// cierre del switch

}// cierre del IF ISSET
?>
