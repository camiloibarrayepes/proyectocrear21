<?php
@session_start();
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

$res;
$nombrecategoria=$_POST['categoria'];

$sql1="SELECT id FROM ca WHERE nombre='$nombrecategoria'";
//$id=arra
$getid= mysqli_query($link,$sql1);
$idc=mysqli_fetch_array($getid, MYSQLI_NUM);

$sql= "UPDATE vista SET opcion = '$idc[0]'";

if($link->query($sql)==TRUE){
//if(mysqli_query($conn,$sql)==TRUE){
	header("location:../adminlogin/elegir_vista.php?res=1"); 
	
}else{
	//echo "Error: ".$sql."<br>".mysql_error($conn);
	echo "Error: ".$sql."<br>".$link->error;
}


?>
