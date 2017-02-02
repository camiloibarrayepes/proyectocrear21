<center>
<table border="2">
	<thead>
	<tr>
	<th colspan="5"><a href="subir_imagen.php">Nueva Imagen</a></th>
	</tr>
	<tr>
		<th>Titulo</th>
		<th>Descripcion</th>
		<th>Imagen</th>
		<th colspan="2">Operaciones</th>
	</tr>
	</thead>

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



	$query = "SELECT * FROM adsinicial";
		$resultado = $link->query($query);
	while($row = $resultado->fetch_assoc())
	{

		?>
	<tr>
			<td><?php echo $row['titulo']; ?></td>
			<td><?php echo $row['descripcion']; ?></td>
			<td><img  src="<?php echo $row['ruta']; ?>"/></td>
			<th><a href="modificar_imagen.php?id=<?php echo $row['id'];?>">Modificar</a></th>
			<th><a href="eliminarfoto.php?id=<?php echo $row['id'];?>">Eliminar</a></th>
	</tr>
		<?php
	}

?>

