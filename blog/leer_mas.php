<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="estilos.css">
<script src="../../assets/js/jquery.min.js" type="text/javascript"></script>	
	<title>Blog</title>
	<style>
		
	section{
		width: 565px;
		box-shadow: 0 0 2px #ccc;
		height: 700px;
		background: white;
	}
	aside{
		width: 375px;
		height: 500px;
	}
	#recientes{
	width: 950px;
	height: 150px;
	background: white;
	box-shadow: 0 0 2px #ccc;
	clear: both;
	margin-bottom: 10px;
	}
	#recientes article{
		width: 200px;
		float: left;
	}
	aside textarea{
		width: 345px;
		height: 25px;
		border: 1px solid #eee;
		border-radius: 5px;
		color: #333;
		padding: 2px;
		transition: all .5s;

	}
	aside textarea:focus{
		height: 60px;
		border: 1px solid teal;
	}
	aside input[type="text"]{
		margin-top: 5px;
		border: 1px solid #eee;
		border-radius: 5px;
		color: #333;
		padding: 2px;
		transition: all .5s;
		width: 200px;

	}

	input[type="text"]:focus{
		border: 1px solid teal;
	}
	aside article{
		margin-bottom: 5px;
		border-bottom: 2px solid #eee;
	}
	aside article img{
		float: left;
		margin-right: 5px;
	}
	aside article p{
		margin-bottom: 5px;
	}
	</style>
	
</head>
<body>
<div id="principal" contenteditable="false">
<section>
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
	$id = $_GET['id'];
	$consulta = mysqli_query($link, "SELECT * FROM post WHERE id_post = '$id'");
	while($registro = mysqli_fetch_array($consulta)){

				echo $registro['contenido_completo_post'];
				
				echo "<span>
					<i class='fa fa-user' aria-hidden='true'></i>".$registro['autor_post'].
					"<i class='fa fa-calendar' aria-hidden='true'></li>". $registro['fecha_post']."
					<a href='#'><i class='fa fa-tags' aria-hidden='true'>".$registro['autor_post']."</a></span>";
				
			}

?>
</section>
<aside>

	
	<form action="procesar_leer_mas.php?id=<?php echo $_GET['id'];?>" method="POST">
		<textarea name="comentario" placeholder="comentario..."></textarea>
		<input type="text" name="usuario" placeholder="Nombre completo">
		<input type="email" name="email_usuario" placeholder="Email...">
		<input type="submit" value="Comentar">
	</form>
	<?php
		include("mostrar_comentarios.php");
	?>
</aside>
<div id="recientes">
	<?php
		$consulta = mysqli_query($link, "SELECT * FROM post WHERE id_post != '$id' LIMIT  5");
		while($registro = mysqli_fetch_array($consulta)){
			echo "<article>";
			echo "<a href='leer_mas.php?id=".$registro['id_post']."'><img src='imagenes/".$registro['imagen_post']."'>";
		}
	?>
</div>

</div>

</body>
</html>