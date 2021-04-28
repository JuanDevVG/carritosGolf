<?php 

	include("conexion.php");

	$num_licencia = $_POST["num_licencia"];
	//guardar registro clientes
	$nombre = $_POST["nombre"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];
	
	//Guardar registro carritos
	$placa = $_POST["placa"];
	$especificacion = $_POST["especificacion"];
	$precio_hora = $_POST["precio_hora"];
	$precio_semana = $_POST["precio_semana"];
	$color_carro = $_POST["color_carro"];
	$modelo_carro = $_POST["modelo_carro"];
	$kilometraje_carro = $_POST["kilometraje_carro"];
	$disponible = $_POST["disponible"];

	//Guardar registro rentas
			
	$fecha_solicitud = $_POST["fecha_solicitud"];
	$hora_solicitud = $_POST["hora_solicitud"];
	$fecha_dev = $_POST["fecha_dev"];
	$hora_dev = $_POST["hora_dev"];
	$km_dev = $_POST["km_dev"];
	$estado_dev = $_POST["estado_dev"];
	$observaciones = $_POST["observaciones"];

	
	
	$sqlRentas = "INSERT INTO rentas (fechaSolicitud, horaSolicitud, fechaDevolucion, horaDevolucion, kmActualDevolucion, `estadoVehiculo`, `Observaciones`, `FK_Placa`, `FK_Cliente`) 
		VALUES ('$fecha_solicitud', '$hora_solicitud', '$fecha_dev', '$hora_dev', $km_dev, '$estado_dev', '$observaciones', '$placa', '$num_licencia')";
	$registro1 = mysqli_query($conex, $sqlRentas);

	if($registro1){
		echo "<script>alert('Se ha resgistrado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/Rentas.html'</script>";
	
		echo "<script>alert('No se pudo registrar'); window.history.go(-1);</script>";
	}
?>


