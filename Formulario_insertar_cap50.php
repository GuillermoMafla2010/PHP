<!doctype html>
<html>
    
    <head>
    
        <meta charset="utf-8">
        <title>Documento sin t�tulo</title>
        <style>
			table{
				background-color:#FFC;
				border:1px solid #FF0000;
				margin:auto;
				padding:25px;
			}
		h1{
			width:50%;
			margin:25px auto;
			
			text-align:center;
			margin-bottom:50px;
		}
		
		body{
			background-color:#FC9;
		}
		
		#boton{
			padding-top:25px;
			
		}
		
		</style>
    </head>
    
    <body>
    <h1> Alta de art�culos nuevos</h1>
    
        <form action="resultados_insertar_registros_cap50.php" method="get">
        <table>
        <tr><td>
            <label>C�digo Art�culo:</label></td><td> <input type="text" name="codigo_articulo"></td></tr>
            <tr><td><label>Secci�n:</label></td><td><input type="text" name="seccion"></td></tr>
          <tr><td>  <label>Nombre Art�culo:</label> </td><td><input type="text" name="nombre_articulo"></td></tr>
          <tr><td>  <label>Precio: </label></td><td><input type="text" name="precio"></td></tr>
           <tr><td> <label>Fecha: </label></td><td><input type="text" name="fecha"></td></tr>
           <tr><td> <label>Importado:</label> </td><td><input type="text" name="importado"></td></tr>
           <tr><td> <label>Pa�s de Origen: </label></td><td><input type="text" name="pais_origen"></td></tr>
          <tr><td colspan="2" align="center" id="boton">  <input type="submit" name="enviando" value="�Dale!"></td></tr>
        </table>
        </form>
    
    </body>
    
</html>