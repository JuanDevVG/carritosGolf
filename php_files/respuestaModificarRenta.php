<?php
    include("conexion.php");

    $Placa = $_POST["placa"];
    $fechaSolicitud = $_POST["fecha_solicitud"];
    $horaSolicitud = $_POST["hora_solicitud"];
    $fechaDevolucion = $_POST["fecha_dev"];
    $horaDevolucion = $_POST["hora_dev"];
    $kmDevolucion = $_POST["km_dev"];
    $estadoDevolucion = $_POST["estado_dev"];
    $observaciones = $_POST["observaciones"];

    $query = "UPDATE rentas SET fechaSolicitud='$fechaSolicitud', horaSolicitud='$horaSolicitud', 
        fechaDevolucion = '$fechaDevolucion', horaDevolucion = '$horaDevolucion', kmActualDevolucion=$kmDevolucion, estadoVehiculo = '$estadoDevolucion', Observaciones = '$observaciones' WHERE FK_Placa='$Placa'";

    $ejecutar = mysqli_query($conex, $query);

    if ($ejecutar) {
         echo "<script>alert('Se ha modificado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/modificarRenta.html'</script>";
    }

    

?>