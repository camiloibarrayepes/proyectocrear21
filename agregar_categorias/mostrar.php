<center>
<table border="2">
	<thead>
	<tr>
	<th colspan="5"><a href="subirfoto.php">Nueva categoria</a></th>
	</tr>
	<tr>
		<th>Nombre categoria</th>
		<th>Imagen</th>
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
						
						$query = "SELECT * FROM ca";
						$resultado = $link->query($query);
						while($row = $resultado->fetch_assoc()){
						?>
						
						<tr>
							<td><?php echo $row['nombre']; ?></td>
							<td><img width="70px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/></td>
							<th><a href="modificarimagen.php?id=<?php echo $row['id'];?>">Modificar</a></th>
							<th><a href="eliminarfoto.php?id=<?php echo $row['id'];?>">Eliminar</a></th>
						</tr>

						<?php
						
						}
						
						?>
		
	</tbody>
</table>
</center>
