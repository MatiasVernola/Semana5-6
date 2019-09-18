<!DOCTYPE html>
<html>
<body>

<h2>Listado de usuario</h2>

<ol>
	<?php
	$miArchivo = fopen("usuarios.txt", "r") ;
	while(!feof($miArchivo)) {
		$objeto=json_decode(fgets($miArchivo));
  		echo "<li>".$objeto->nombre."</li>";
	}
	fclose($miArchivo);
?> 

</ol> 

</body>
</html>