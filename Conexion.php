<?php
$conexion = new mysqli("localhost", "root", "", "transcaribe");

if($conexion){
	echo "";
}else{
	echo "ERROR DE CONEXION";
}

?>
