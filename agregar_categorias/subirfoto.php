<!--

Archivos usados

subirfoto.php
proceso_guardar.php
mostrar.php
modificarimagen.php
proceso_modificar.php
eliminarfoto.php

-->
<center>
<form action="proceso_guardar.php" method="POST" enctype="multipart/form-data">
<input type="text" REQUIRED name="name" placeholder="escribe categoria" value=""/><br>
<input type="file" REQUIRED name="imagen"/><br>
<input type="submit" value="aceptar">

</form></center>