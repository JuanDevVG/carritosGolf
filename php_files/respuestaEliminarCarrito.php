<?php
	include("conexion.php");

	$placa = $_POST['placa'];
	mysqli_query($conex, "DELETE FROM carritos where Placa='$placa'") or die ("Error al eliminar");
	mysqli_close($conex);
	echo "<script>alert('Se ha eliminado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/Carritos.html'</script>";
?>
