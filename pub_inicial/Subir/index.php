
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/Estilos.css">
	<meta name="generator" content="Geany 1.22" />
</head>
<body>
	<h1>Sube tus productos con imagenes a este servidor.</h1>
	<br/>
<form action="guardar.php" method="post" enctype="multipart/form-data">
<table>
	<TR>
		<td><label>Nombre:</label></td>
		<td><label><input type="text" name="Nombre" /></label></td>
	</TR>
	<TR>
		<td><label>Precio:</label></td>
		<td><label><input type="text" name="descripcion"/></label></td>
	</TR>
	<TR>
		<td><label>Estado:</label></td>
		<td><label><select name="estado">
			  <option value="1">Activo</option>
			  <option value="0">No Activo</option>
			  
			</select>
			</label>
		</td>
	</TR>
</table>
	<input type="file" name="foto" />
	<br/>
	<input type="submit" value="Guardar"/>
	</form>
<table border="2px">
	<tr>
		<td>ID</td>
		<td>Nombre</td>
		<td>Descripcion</td>
		<td>Estado</td>
		<td>Imagen</td>

	</tr>

	<?php
		include '../../conexion.php';
		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}
						
						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}
		$re=mysqli_query($link,"select * from adsinicial")or die();
		while ($f=mysqli_fetch_array($re)) {
	?>
	
	<tr>
		<td><?php echo $f['id'];?></td>
		<td><?php echo $f['Nombre'];?></td>
		<td><?php echo $f['descripcion'];?></td>
		<td><?php if($f['estado']==1){echo "activo";}else{echo "no activo";}?></td>
		<td><img width="300px" src="Imagenes/<?php echo $f['Imagen']; ?>"</td>
		
	</tr>
	<?php
	}
	?>
	
	</table>	
</body>
</html>