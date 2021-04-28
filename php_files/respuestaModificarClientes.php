<!DOCTYPE>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>
	<?php
	include("conexion.php");

		$num_licencia = $_POST["num_licencia"];
		$nombre = $_POST["nombre"];
		$telefono = $_POST["telefono"];
		$direccion = $_POST["direccion"];

		mysqli_query($conex, "UPDATE clientes set Nombre='$nombre', Telefono='$telefono', Direccion='$direccion' where numLicencia='$num_licencia'") or die ("Error al actualizar");
		mysqli_close($conex);
		echo "<script>alert('Se ha modificado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/clientes.html'</script>";
	?>
</body>
</html>