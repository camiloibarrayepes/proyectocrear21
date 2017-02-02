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


$categoria=$_GET["categoria"];
$sql1="SELECT id FROM ca WHERE nombre='$categoria'";

//$id=arra
$getid= mysqli_query($link,$sql1);
$idc=mysqli_fetch_array($getid, MYSQLI_NUM);

print $idc[0] ;
$sql= "SELECT * FROM producto WHERE idcategoria ='$idc[0]'";
$result= array();
$result= $link->query($sql);
while($row=$result->fetch_assoc()){
	$ar[]=$row;}

$opciones=array("primero","segundo","tercero");
$num_ran=array_rand($opciones,1);
echo $num_ran;

switch ($num_ran) {
	case '0':
		$sql2= "SELECT * FROM producto WHERE idcategoria ='$idc[0]' ORDER BY fechaingreso ASC";
		break;
	case '1':
		$sql2= "SELECT * FROM producto WHERE idcategoria ='$idc[0]' ORDER BY fechaingreso DESC";
		break;
	case '2':
		$sql2= "SELECT * FROM producto WHERE idcategoria ='$idc[0]' ORDER BY idproducto DESC";
		break;
	
}


$r= array();
$r= $link->query($sql2);
while($row3=$r->fetch_assoc()){
	$arrayVariable[]=$row3;}




?>