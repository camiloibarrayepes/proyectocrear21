<?php

	$destino=$_POST['email'];
	$asunto = "Landing Page";


	$comentario =" 

	nombre:$_POST[nombre]
	tel:$_POST[telefono]
	email:$_POST[email]
	
	";

	$headers = 'From: '.$destino."\r\n".
	'Reply-To:'.$destino."\r\n".
	'X-Mailer: PHP/'.phpversion();

	mail($destino,$asunto,$comentario,$headers);

	echo "mensaje enviado";



?>