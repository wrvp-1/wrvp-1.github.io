<?php
include 'conect.php';

$correo = $_POST ['correo'];
$correo_up = $_POST ['correo_up'];

if ($correo != '' && $correo_up != '')
{
    $update = mysqli_query($conexion, "UPDATE usuarios SET correo = '$correo_up' WHERE correo = '$correo ' ") or die(mysqli_error());
    echo "Registro actualizado";
}else
{
    echo "Error";
}

?>