 <?php

require_once('conexion.php');
 $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
        if(!$link) {
        die('Failed to connect to server: ' . mysql_error());       
        }
                        
        //Select database
        $db = mysqli_select_db($link,DB_DATABASE);
        if(!$db) {
        die("Unable to select database");
    }
                        
    $query = "SELECT * FROM tbl_documentos";
    $resultado = $link->query($query);
    while($row = $resultado->fetch_assoc()){

?>
<br><br>
 <a href="archivos/<?php echo $row['nombre_archivo']; ?>">Descargar Formato de Cotización</a>﻿
<?php
}
?>