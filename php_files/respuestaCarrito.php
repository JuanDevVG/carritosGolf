<?php
	
	include("conexion.php");

	$placa = $_POST["placa"];
	$especificacion = $_POST["especificacion"];
	$precio_hora = $_POST["precio_hora"];
	$precio_semana = $_POST["precio_semana"];
	$color_carro = $_POST["color_carro"];
	$modelo_carro = $_POST["modelo_carro"];
	$kilometraje_carro = $_POST["kilometraje_carro"];
	$disponible = $_POST["disponible"];

	$insertar = "INSERT INTO carritos(Placa, Especificacion, PrecioRentaHora, PrecioRentaSemana, Color, Modelo, Kilometraje, Disponibilidad) VALUES ('$placa', '$especificacion' ,'$precio_hora', '$precio_semana', '$color_carro', '$modelo_carro', '$kilometraje_carro', '$disponible')";

	$registro = mysqli_query($conex, $insertar);
	if($registro){
		echo "<script>alert('Se ha resgistrado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/carritos.html'</script>";
	}else{
		echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
	}

?>
	
	
