<!DOCTYPE html>
<?php
require_once('../conexion.php');
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {

            $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
						if(!$link) {
							die('Failed to connect to server: ' . mysql_error());		
							}
						
						//Select database
						$db = mysqli_select_db($link,DB_DATABASE);
						if(!$db) {
							die("Unable to select database");
						}

            $sql = "UPDATE tbl_documentos SET tamanio='$tamanio', tipo='$tipo',nombre_archivo='$nombre'";
            $query = $link->query($sql);
            ?>
<style>
	.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
</style>
            <?php
            if($query){
                print "
         <center><div class='alert alert-success' role='alert'>
  <strong>Gracias!</strong> Archivo modificado con éxito...!!!</div></center>
";
	header( "refresh:1; url = ../adminlogin/editar_info.php");
            }
        } else {
            echo "Error";
        }
    }
}
?>
