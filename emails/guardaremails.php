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

$email = $_POST['email'];
$query = "INSERT INTO emails(`email`) VALUES('$email')";
$resultado = $link->query($query);

if($resultado){
?>

<style>
	.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
</style>

<?php
	print "
         <center><div class='alert alert-success' role='alert'>
  <strong>Gracias!</strong> Tu Email ha sido registrado con exito...!!!</div></center>
";
	header( "refresh:1; url = ../index.php");
}
else
{ 
echo "no";
}
?>