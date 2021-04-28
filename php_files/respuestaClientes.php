<?php
	
	include("conexion.php");

	$num_licencia = $_POST["num_licencia"];
	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];

	// Guardar el registro en la base de datos

	$inser = "INSERT INTO clientes(numLicencia, Nombre, Telefono, Direccion) VALUES ('$num_licencia', '$nombre', '$telefono', '$direccion')";

	$registro1 = mysqli_query($conex, $inser);
	if($registro1){
		echo "<script>alert('Se ha resgistrado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/clientes.html'</script>";
	}else{
		echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
	}

?>