<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Agregar post</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.min.css">
	<script src="tinymce/plugin/tinymce/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#contenido',height: 500, width: 600,statusbar: false,menubar: false,plugins: [
				"advlist autolink autosave link image lists charmap preview hr anchor spellchecker",
				"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				"table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern"
				],toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | cut copy paste | bullist numlist | outdent indent | undo redo | link unlink image media | preview | forecolor backcolor | formatselect",
			toolbar3: "subscript superscript | emoticons",
			toolbar_items_size: 'small',content_css: [
				'//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
				'//www.tinymce.com/css/codepen.min.css'
				]
	});
	</script>
	
	<style>
		*{
			margin: 0;
			font-family: 'Cabin';
			padding: 0;
		}

		body{
			background: #eee;
		}

		#caja{
			width: 625px;
			background: white;
			box-shadow: 0 0 2px #ccc;
			margin: auto;
			padding: 10px;
		}
		input[type="text"]{
			width: 560px;
			padding: 5px 10px;
			border: 1px solid #ccc;
		}
		#descripcion{
			width: 575px;
			padding: 5px 10px;
			border: 1px solid #ccc;
			margin-top: 5px;
		}
		
		
		
		
	</style>
	
</head>
<body>
	<div id="caja">
	<img src="../assets/images/logo.png">
		<form action="procesar_guardar_post.php" method="POST" enctype="multipart/form-data"><br>
			<input type="text" name="titulo" id="" placeholder="Titulo del post"><br><br>
			<input type="text" name="autor" id="" placeholder="Nombre del Autor"><br><br>
			<textarea name="descripcion" id="descripcion" placeholder="descripcion del post"></textarea><br>
			<br>
			<input type="file" name="imagen" id="imagen"><br><br>
			<label for="">Categoria:   </label>
			<select name="categoria" id="">
				<optgroup label="categoria">
					<option value="Publicidad">Publicidad</option>
					<option value="Empresas">Empresas</option>
					<option value="Educacion">Educación</option>
				</optgroup>
			</select><br><br>
			<label for="">Contenido del Post</label>
			<textarea name="contenido" id="contenido"></textarea>
			<br><input class="btn btn-primary" type="submit" value="Agregar post">

		</form>
	</div>
	
</body>
</html>