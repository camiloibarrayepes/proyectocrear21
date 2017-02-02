<center>
<table border="2">
	<thead>
	<tr>
	<th colspan="5"><a href="inicial.php">Nuevo opcion para el menu</a></th>
	</tr>
	<tr>
		<th>Titulo</th>
		<th>Url</th>
		<th colspan="2">Operaciones</th>
	</tr>
	</thead>
	<tbody>
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
						
						$query = "SELECT * FROM menu_header";
						$resultado = $link->query($query);
						while($row = $resultado->fetch_assoc()){
						?>
						
						<tr>
							<td><?php echo $row['titulo']; ?></td>
							<td><?php echo $row['url']; ?></td>
							<th><a href="modificar.php?id=<?php echo $row['id'];?>"><img width="40px" src="http://findicons.com/files/icons/99/office/256/edit.png"></a></th>
							<th><a href="eliminar.php?id=<?php echo $row['id'];?>"><img width="40px" src="http://www.iconarchive.com/download/i51281/awicons/vista-artistic/delete.ico"></a></th>
						</tr>

						<?php
						
						}
						
						?>
		
	</tbody>
</table>
</center>
