<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
	try{
	$base=new PDO("mysql:host=localhost; dbname=usuarios","root","");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");
	$tamano_paginas=3;
	if(isset($_GET["pagina"])){
		if($_GET["pagina"]==1){
		header("location:Paginacion_Cap74.php");
		}else{
		$pagina=$_GET["pagina"];
		}
	}else{
	$pagina=1;
	}	
	$inicio=($pagina-1)*$tamano_paginas;
	$sql_total="SELECT NOMBREARTICULO,SECCION,PRECIO,PAISDEORIGEN FROM hoja1 WHERE SECCION='DEPORTES'";
	$resultado=$base->prepare($sql_total);
	$resultado->execute(array());
	$num_filas=$resultado->rowCount();
	$total_paginas=ceil($num_filas/$tamano_paginas);
	echo "Numero de registros de la consulta". $num_filas."<br>";
	echo "Mostramos " . $tamano_paginas . "registros por pagina" ."<br>";
	echo"Mostrando la pagina".$pagina . " de " . $total_paginas ."<br>";
	$sql_limite="SELECT NOMBREARTICULO,SECCION,PRECIO,PAISDEORIGEN FROM hoja1 WHERE SECCION='DEPORTES' limit $inicio,$tamano_paginas";
	$resultado=$base->prepare($sql_limite);
	$resultado->execute(array());
	while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	echo "NOMBRE ARTICULO".$registro["NOMBREARTICULO"]."PRECIO".	$registro["PRECIO"]."PAISDEORIGEN".$registro["PAISDEORIGEN"];
	echo"<br>";
	}
	}catch(Exception $e){
	echo "Linea de error";
	}
	
	//________PAGINACION____________
	
	for ($i=1; $i<=$total_paginas;$i++){
	echo "<a href='?pagina=" .$i . " '>" . $i ."</a> ";
	}

?>
</body>
</html>
