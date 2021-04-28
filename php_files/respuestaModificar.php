
	<?php
	include("conexion.php");

		$placa = $_POST['placa'];
		$especificacion = $_POST['especificacion'];
		$precio_hora = $_POST['precio_hora'];
		$precio_semana = $_POST['precio_semana'];
		$color_carro = $_POST['color_carro'];
		$modelo_carro = $_POST['modelo_carro'];
		$kilometraje_carro = $_POST['kilometraje_carro'];
		$disponible = $_POST['disponible'];

		mysqli_query($conex, "UPDATE carritos set Especificacion='$especificacion', PrecioRentaHora='$precio_hora', PrecioRentaSemana='$precio_semana', Color='$color_carro', Modelo='$modelo_carro', Kilometraje='$kilometraje_carro', Disponibilidad='$disponible' where Placa='$placa'") or die ("Error al actualizar");
		mysqli_close($conex);
		echo "<script>alert('Se ha modificado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/Carritos.html'</script>";
	?>
