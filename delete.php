<?php
//conexion String
// servidor, usuario, pass, base datos
include 'conect.php';

$usuario = $_POST['usuario'];

if ($usuario != '')
{
  $eliminar = mysqli_query($conexion, "DELETE  FROM usuarios WHERE usuario = '$usuario' ") or die(mysqli_error());
  echo "Registro Eliminado";
}
else{
    echo "Error";
}
?>