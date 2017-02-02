	var contador;
	var cotizacion=[];
	var objFinal;
    var objGuardado;
    var datos="";
    window.onload=load;

	function load(){
	
	if(sessionStorage.getItem("contador")==undefined){
		contador=0;
		sessionStorage.setItem("contador",contador);
		document.getElementById('CartCount').innerHTML="0";
	}else{	
		contador=parseInt(sessionStorage.getItem("contador"));
		document.getElementById('CartCount').innerHTML=""+contador;}
	
	/*Se llena toda la informacion del producto seleccionado*/
	for (var k = 0; k < arrayJS.length ; k++){
		
		if(arrayJS[k]["idproducto"]==idselected){
			var idArray=k;
			
		}

	}
	document.getElementById("ProductPhotoImg").src=''+arrayJS[idArray]["imagen1"];
	document.getElementById("labeldescripcion").innerHTML=''+arrayJS[idArray]["descripcion"];
	document.getElementById("labelcolores").innerHTML=''+arrayJS[idArray]["colores"];
	document.getElementById("labeltecnica").innerHTML=''+arrayJS[idArray]["tecnicamarca"];
	document.getElementById("labelnombre").innerHTML=''+arrayJS[idArray]["nombre"];
	document.getElementById("labelMedidas").innerHTML=''+arrayJS[idArray]["medidas"];
	document.getElementById("labelPrecio").innerHTML=''+arrayJS[idArray]["precio"];

	/*Se consulta el carro guardado*/
	for (var i = 1; i < sessionStorage.length ; i++) {
		objGuardado=sessionStorage.getItem(i) ;
		objFinal=JSON.parse(objGuardado);
		console.log("item: "+i+" es:"+objFinal.imagen1 );
		datos=datos+"<div class='grid__item one-quarter'><a href='product.html' class='ajaxcart__product-image'><img src='"+objFinal.imagen1+"' alt=''></a></div><div class='grid__item three-quarters'><p><a  href='product.html' class='ajaxcart__product-name'>"+objFinal.nombre+"</a><span class='ajaxcart__product-meta'>S / Red</span></p><div class='grid--full display-table'><div class='grid__item'><div class='ajaxcart__qty'></div></div><div class='grid__item'><span class='money' data-currency-usd='$34.00 USD' data-currency='USD'>$34.00 USD</span></div></div></div><br><br>";}
						
		document.getElementById('datos').innerHTML=datos;

								}

	function mostrarDescripcion(clicked_id){
												 	
 		for (var j = 0; j < arrayJS.length ; j++){
		
		if(arrayJS[j]["idproducto"]==idselected){
			var idArray2=j;

		}

	}
 		document.getElementById('labeldescripcion').innerHTML=""+arrayJS[idArray2]["descripcion"];
 		document.getElementById('labelcolores').innerHTML=""+arrayJS[idArray2]["colores"];
 		document.getElementById('labeltecnica').innerHTML=""+arrayJS[idArray2]["tecnicamarca"];
 		document.getElementById('labelnombre').innerHTML=""+arrayJS[idArray2]["nombre"];
 		document.getElementById('labelMedidas').innerHTML=""+arrayJS[idArray2]["medidas"];
 		document.getElementById('labelPrecio').innerHTML=""+arrayJS[idArray2]["precio"];
												 	}
	

	 
    	
 
 


	