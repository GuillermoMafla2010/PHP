<?php


$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$el_array = new stdClass();
$el_array2 = new stdClass();

if ($el_usuario=="Juan") {
  
	$el_array->Nombre = "Juan";
	$el_array->Apellido = "Gómez";
	$el_array->Edad = "18";
	$json = json_encode($el_array);
	echo $json;


} else if($el_usuario=="Cristian"){
$el_array->Nombre = "Cristian";
	$el_array->Apellido = "Jàtiva";
	$el_array->Edad = "24";
	$json = json_encode($el_array);
	echo $json;


}

} else if($el_usuario!="Cristian") && ($el_usuario!="Juan") {
$el_array2->Mensaje = "No existe";
	
$json = json_encode($el_array);
	echo $json;


}






?>