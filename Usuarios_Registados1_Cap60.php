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
<p>&nbsp;</p>
<table width="313" height="154" border="1">
  <tr>
    <td colspan="3"><p>&nbsp;</p>      
      <p> Zona Usuarios Registrados </p>      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td height="47"><a href="Usuarios_Registados2_Cap61.php">Pagina 1 </a></td>
    <td><a href="Usuarios_Registados3_Cap61.php">Pagina 2 </a></td>
    <td><a href="Usuarios_Registados4_Cap61.php">Pagina 3 </a></td>
  </tr>
</table>
<p>&nbsp;</p>
<?php
echo "Hola:". $_SESSION["usuario"];
?>
</body>
</html>
