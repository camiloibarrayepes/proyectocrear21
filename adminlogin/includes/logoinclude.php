 <?php
			
		$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
                        if(!$link) {
                            die('Failed to connect to server: ' . mysql_error());       
                            }
                        
                        //Select database
                        $db = mysqli_select_db($link,DB_DATABASE);
                        if(!$db) {
                            die("Unable to select database");
                        }

                        $re=mysqli_query($link,"select * from logo")or die();
			while ($f=mysqli_fetch_array($re)) {
?>	
	 <span><img src="../modificar_logo_2/Subir/Imagenes/<?php echo $f['imagen']; ?>" alt="Crear Publicidad" width="130px" height="70px"></span>
<?php
	}
?>