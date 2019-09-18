<?php
$MiObjeto= new stdClass();
$MiObjeto->nombre=$_GET['nombre'];
$MiObjeto->apellido=$_GET['apellido'];
$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo,json_encode($MiObjeto)."\n");
fclose($archivo);
?> 