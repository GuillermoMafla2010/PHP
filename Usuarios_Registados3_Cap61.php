<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
session_start();
	if(!isset($_SESSION["usuario"])){
	header ("Location:index_Login_Cap59.php");
	
	}

	

?>
<h1> Bienvenidos Usuarios</h1>

<p>
  <?php
echo "Hola:". $_SESSION["usuario"];
?>
</p>
<p>&nbsp;</p>
<p><a href="Usuarios_Registados1_Cap60.php">Volver</a></p>
</body>
</html>
