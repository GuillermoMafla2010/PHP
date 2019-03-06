<?php

	//Recibimos los datos de la imagen
	
	 $nombre_imagen=$_FILES['imagen']['name']; 
	 $tipo_imagen=$_FILES['imagen']['type']; 
	 $tamano_imagen=$_FILES['imagen']['size'];
	 
	
	
	//if ($tamano_imagen<=1000000){
	
		if($tipo_imagen=='image/jpeg'||'image/png'||'image/gif'||'image/jpg'){
	
		$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/uploads/';

		move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
		
	
	}else{
	echo "Solo es permitido subir imagenes";
	}
	
	//}else {
	
	//echo "El tamaño del archivo no es permitido maximo 1MB";
	
	//}
	
	
	
	try{
	$conexion= new PDO ("mysql:host=localhost;dbname=usuarios","root","");
	$conexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");
	$sql="UPDATE hoja1 SET FOTO='$nombre_imagen' WHERE CODART='AR01'";
	$resultado=$conexion->prepare($sql);
	$resultado->execute();
	
}catch(Exception $e){

echo "Error".$e->getMessage();
}
?>