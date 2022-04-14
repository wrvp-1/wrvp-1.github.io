<?php
include'conect.php';
//Recibimos los datos y las almacenamos en las variables
$name = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$email = $_POST['correo'];
$user = $_POST['usuario'];
$pass = $_POST['clave'];
$cel = $_POST['telefono'];
//consulta para insertar
$insertar = "INSERT INTO usuarios(nombre, apellidos, correo, usuario, clave, telefono)VALUES('$name', '$apellido', '$email', '$user', '$pass', '$cel')";

$verificar = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$user'");
if (mysqli_num_rows($verificar)>0) {
	echo '<script>
	      alert("El usuario ya esta registrado");
	      window.history.go(-1);
	       </script> ';
	exit;
}
//ejcutamos la consulta
$resultado = mysqli_query($conexion,$insertar);
if (!$resultado){
    echo '<script>
	      alert("Error al registrarse");
	      window.history.go(-1);
	       </script> ';
	# code...
}else{
	echo '<script>
	      alert("Datos guardados correctamente");
	      window.history.go(-1);
	       </script> ';
}
// cerramos conexion
mysqli_close($conexion);
