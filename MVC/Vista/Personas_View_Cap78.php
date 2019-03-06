<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>


<style>
td{
border:1px dotted #FF3300;

}
</style>
</head>

<body>

<table>
<?php
require("Modelo/Paginacion.php");
?>

<?php
require_once("Modelo/Conexion_BDD_MVC_Cap78.php");
$base=Conexion_BDD_MVC_Cap78::Conexion();
$registros=$base->query("SELECT*FROM datos_usuarios limit $inicio,$tamano_paginas")->fetchAll(PDO::FETCH_OBJ);
if(isset($_POST["cr"])){
	$nombre=$_POST["Nom"];
	$apellido=$_POST["Ape"];
	$direccion=$_POST["Dir"];
$sql="INSERT INTO datos_usuarios(Nombre,Apellido,Direccion)values(:nom,:ape,:dir)";
$resultado=$base->prepare($sql);
$resultado->execute(array(":nom"=>$nombre , ":ape"=>$apellido , "dir"=>$direccion));
header("Location:Index_Cap78.php");
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
   
   <?php
   foreach ($matrizPersonas as $persona):?>	
   	<tr>
      <td><?php echo $persona["id"]?> </td>
      <td><?php echo $persona["Nombre"]?></td>
      <td><?php echo $persona["Apellido"]?></td>
      <td><?php echo $persona["Direccion"]?></td>
 
      <td class="bot"><a href="Modelo/Eliminar_Cap71.php ?Id=<?php echo $persona["id"]?>">  <input type='button' name='del' id='del' value='Borrar'> </a> </td>
      <td class='bot'><a href="Modelo/Editar_Cap72.php ?Id=<?php echo $persona["id"]?>& nom=<?php echo $persona["Nombre"]?>& ape=<?php echo $persona["Apellido"]?>& dir=<?php echo $persona["Direccion"]?>"> <input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr> 
	<?php
	endforeach;
	
	?>      
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>   
	  <tr><td colspan="4"><?php
	for ($i=1; $i<=$total_paginas;$i++){
	echo "<a href='?pagina=" .$i . " '>" . $i ."</a> ";
	}
	?></td></tr> 
  </table>
</form>





</table>
</body>
</html>
