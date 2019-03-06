<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
if (!$_COOKIE["idioma_seleccionado"]){
header("location:Indice_Cookies_Cap65.php");
}else if ($_COOKIE["idioma_seleccionado"]=="es"){
header("location:Spanish_Cap65.php");
}
else if ($_COOKIE["idioma_seleccionado"]=="in"){
header("location:Ingles_Cap65.php");
}

?>
</body>
</html>
