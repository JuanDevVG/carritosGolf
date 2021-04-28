<?php 
    include("conexion.php");
    $FK_Cliente=$_POST["num_licencia"];
    $FK_Placa=$_POST["placa"];
    
    $sqlRentas = "DELETE FROM rentas WHERE FK_Cliente='$FK_Cliente' AND FK_Placa='$FK_Placa'";
    $registro1 = mysqli_query($conex, $sqlRentas);
    echo "<script>alert('Se ha eliminado con exito'); window.location='/Proyecto-SENA/CarritosGolf/html_files/eliminarRenta.html'</script>";
    
?>