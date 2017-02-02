<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<center>
<div class="container">

        <div class="text-center"><br>
		<h4>Imagenes</h4>
		  <img src="img/logo.jpg" width="200px" class="avatar img-square" alt="avatar">
          <h6>Upload a different photo...</h6>
         <form action="upload.php" method="POST" role="form" enctype="multipart/form-data"> 
         <input type="file" name="imagenes[]" class="form-control" id="" placeholder="Input field" multiple>
		 <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
        
      </div></div></center>