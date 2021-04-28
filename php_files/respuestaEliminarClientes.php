<!DOCTYPE>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>
	<?php
	include("conexion.php");

		$num_licencia = $_POST['num_licencia'];

		mysqli_query($conex, "DELETE FROM clientes where numLicencia='$num_licencia'") or die ("Error al eliminar");
		mysqli_close($conex);
		echo "<script>alert('Se ha eliminado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/Clientes.html'</script>";
	?>
</body>
</html>