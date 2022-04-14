<?php
$conext = mysqli_connect('localhost','root','','prueba');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>MostrarTabla</title>
	<link rel="stylesheet"  href="estiloMostrar.css">
	<style> 
      .col{
      	color: white;
	</style>
</head >
<body class="Tabla" >
	<br>
	<h1>DATOS INSERTADOS EN LA BASE</h1>
	<table class ="tablaData" border="5">
		
		<tr>
			<th class="col">Id</th>
			<th class="col">Nombre</th>
			<th class="col">Apellido</th>
			<th class="col">Correo</th>
			<th class="col">Usuario</th>
			<th class="col">Clave</th>
			<th class="col">Teléfono</th>
		</tr>
		<?php 
		$sql = "SELECT * FROM usuarios";
		$result = mysqli_query($conext,$sql);
		while ($mostrar=mysqli_fetch_array($result)) {
		 ?>
		<tr>
			<td><?php echo $mostrar['id_usuario'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellidos'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['usuario'] ?></td>
			<td><?php echo $mostrar['clave'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
		</tr>
		<?php 
          }
		 ?>
	</table>

</body>
</html>