<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php

try{

$base= new PDO("mysql:host=localhost;dbname=usuarios","root","");
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="SELECT*FROM USUARIOS_PASS WHERE USUARIOS=:login AND PASSWORD=:password";
$resultado=$base->prepare($sql);
$login=htmlentities(addslashes($_POST["login"]));

$password=htmlentities(addslashes($_POST["password"]));

$resultado->bindValue(":login",$login);$resultado->bindValue(":password",$password);
$resultado->execute();
$numero_registro=$resultado->rowCount();

if ($numero_registro !=0){
session_start();
$_SESSION["usuario"]=$_POST["login"];
header("location:Usuarios_Registados1_Cap60.php");
}else{
header("location:index_Login_Cap59.php");
}

}catch(Exception $e){
die ("Error: ". $e-> getMessage());


}



?>
</body>
</html>
