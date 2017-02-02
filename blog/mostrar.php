<!DOCTYPE html>
<html>
<table border="2">
	<thead>
	<tr>
	<th colspan="7"><a href="subirfoto.php">Nueva categoria</a></th>
	</tr>
	<tr>
		<th>Fecha</th>
		<th>Titulo</th>
		<th>Imagen</th>
		<th colspan="4">Operaciones</th>
	</tr>
	</thead>
<tbody>
<?php
if(isset($_GET['created'])){
	echo "<div class='alert alert-success'>
  <strong>Post añadido con exito</strong> al blog.
</div>";
}
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
						
						$query = "SELECT * FROM post ORDER BY id_post DESC";
						$resultado = $link->query($query);
						while($row = $resultado->fetch_assoc()){
						$id = $row['id_post'];
						$query2 = mysqli_query($link, "SELECT * FROM comentarios_post WHERE post_id = '$id'");

						print '<tr>';
							echo "<td><span>".$row['fecha_post']."</span></td>";
							echo "<td>".$row["titulo_post"]."</td>";
							echo "<td><img width='100px' height='100px' src='imagenes/".$row["imagen_post"]."'><br></td>";
							echo "<td><span>".$row['autor_post']."</span></td>";							
							echo "<td><a href='leer_mas.php?id=".$row['id_post']."'>Ver</a><br></td>";
							echo "<td><a href='editar_post.php?id=".$row['id_post']."'>Editar</a></td>";
							echo "<td><a href='leer_mas.php?id=".$row['id_post']."'>Eliminar</a></td>";
							

						print '</tr>';
						}
?>
</tbody>
</table>


</html>


