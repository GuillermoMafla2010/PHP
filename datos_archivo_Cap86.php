<?php

	//Recibimos los datos de la imagen
	
	 $nombre_archivo=$_FILES['imagen']['name']; 
	 $tipo_archivo=$_FILES['imagen']['type']; 
	 $tamano_archivo=$_FILES['imagen']['size'];
	 
	
	
	if ($tamano_archivo<=1000000){
	
				$carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/intranet/uploads/';

		move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_archivo);
		
	
	
	}else {
	
	echo "El tamaño del archivo no es permitido maximo 1MB";
	
	}
	
	
	
	try{
	$conexion= new PDO ("mysql:host=localhost;dbname=usuarios","root","");
	$conexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");
	
	$archivo_objetivo=fopen($carpeta_destino.$nombre_archivo,"r");
	
	$contenido=fread($archivo_objetivo,$tamano_archivo);
	
	$contenido=addslashes($contenido);
	
	fclose($archivo_objetivo);
	
	$sql="INSERT INTO archivos (id,Nombre,Tipo,Contenido) values (0,'$nombre_archivo', 
	'$tipo_archivo','$contenido')";
	$resultado=$conexion->prepare($sql);
	$resultado->execute();
	if ($resultado->rowCount()>0){
	echo "Se ha insertado el registro con exito";
	}
	else{
	echo "No se ha podido insertar el registro";
	
	}
	
	
	
}catch(Exception $e){

echo "Error".$e->getLine();
}
?>