<?php
$conexion = mysqli_connect('localhost','root','','prueba');
if (!$conexion) {
	echo "error al conectar a la base de datos";
	# code...
}
else{
	echo "conectado a la base de datos";
}
