<?php 

include("funciones.php");
	function datos($files)
	{
		if(!empty($files))
	 {
	 	 $imagenes=$files["imagenes"]["name"];
	 	 $errorimg =$files["imagenes"]["error"];
	 	 @$tempimg = $files["imagenes"]["tmp_name"];
	 	 $typeimg =$files["imagenes"]["type"];
	 	

	 $j=0;
	 $tipos=array("image/jpg","image/jpeg");
	 	
	 for ($i=0; $i <count($imagenes) ; $i++) { 
	 	if($errorimg[$i] == 0)
	 	{
	 		if(in_array($typeimg[$i], $tipos))
	 		{
	 			$k=$j++;
				$logo='logo';
				
	 			$solonom= str_replace(".jpg", "", $imagenes[$i]);
	 			//$b=rand(20,30);
	 			$se_subio_imagen=subir_imagenes($typeimg[$i],$tempimg[$i],$logo,"img/",200);
	 		
	 		    echo $se_subio_imagen."<br>";
				
				header("location: ../../adminlogin/modificar_logo.html");

	 		
	 		}
			/* Si solo se quiere admitir un tipo de imagenes $tipos=array("image/jpg");
			*/else 
			{
			header("../../adminlogin/modificar_logo.html");
			echo "solo imegenes jpg";
			}
	 	
	 	}
	 	
	}
}
}
datos($_FILES);

	?>