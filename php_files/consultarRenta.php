<?php
    include("conexion.php");
    
    $Placa = $_POST["placa"];

    if (!empty($Placa)) {
        $query = "SELECT * FROM rentas WHERE FK_Placa LIKE '$Placa'";
        $ejecuta = mysqli_query($conex, $query);

        if (!$ejecuta) {
            die("Error de consulta" . mysqli_error($conex));
        }

        $json = array();
        while($row = mysqli_fetch_array($ejecuta)){
            $json[] = array(
                'fechaSolicitud' => $row['fechaSolicitud'],
                'horaSolicitud' => $row['horaSolicitud'],
                'fechaDevolucion' => $row['fechaDevolucion'],
                'horaDevolucion' => $row['horaDevolucion'],
                'kmActualDevolucion' => $row['kmActualDevolucion'],
                'estadoVehiculo' => $row['estadoVehiculo'],
                'Observaciones' => $row['Observaciones']
            );
        
            $jsonString = json_encode($json); 
            echo $jsonString;
        
        }
    }

?>