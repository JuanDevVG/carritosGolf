<?php 
	include("conexion.php");
	
	$licencia = $_POST['licencia'];

	if (!empty($licencia)) {
		
		$query = "SELECT * FROM clientes WHERE numLicencia LIKE '$licencia'";
	    $result = mysqli_query($conex, $query);
	    if (!$result) {
			die("Error de consulta" . mysqli_error($conex));
		}

		//recorrer resultado de la consulta
		$json = array();
		while ($row = mysqli_fetch_array($result)) {
			$json[] = array(
				'Nombre' => $row ['Nombre'],
		    	'Telefono' => $row ['Telefono'],
		    	'Direccion' => $row ['Direccion'],  		
		    );

		    /*devuelve los datos en una cadena de texto dentro de $jsonString y los envia al archivo script.js*/
		    $jsonString = json_encode($json); 
		    echo $jsonString;
		}
	}
 ?>