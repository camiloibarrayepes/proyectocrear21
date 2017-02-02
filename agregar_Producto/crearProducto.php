<?php 
require_once('../conexion.php');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}
						
						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}


$sql= "SELECT * FROM ca";

$result= array();
$result= $link->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Crear Nuevo Producto</title>


</head>
<body>
	<form name="formulario" method="post" action="guardarProducto.php" enctype="multipart/form-data">
		<table border="1">
			<tr><h2>Ingrese Datos</h2></tr>		
			<tr><td>Nombre</td>
				<td><input type="text" name="name1" value=""></td></tr>
			<tr><td>Descripcion</td>
				<td><input type="text" name="descripcion" value=""></td></tr>
			<tr><td>Categoria</td>
				<td>
					<select name="categoria">
						<?php 
						if($result->num_rows>0){
						while($row=$result->fetch_assoc()){
							print '<option value="'.$row["nombre"].'" >'.$row["nombre"].'</option>';
						}}
						?>					
					</select>
				</td></tr>	
			<tr><td>Colores</td>
				<td><input type="text" name="colores" value=""></td></tr>
			<tr><td>Medidas</td>
				<td><input type="text" name="medidas" value=""></td></tr>
			<tr><td>Precio</td>
				<td><input type="text" name="precio1" value=""></td></tr>
			<tr><td>Técnica de Marca</td>
				<td><input type="text" name="tecnica" value=""></td></tr>
			<tr><td>Foto</td>
				<td><input type="file" name="photo1" value=""></td></tr>
			
			
			
			<tr><td colspan="2"><input type="submit" value="Ingresar"></td></tr>
			
			
			
		</table>
	</form><br><br>

</body>
</html>
