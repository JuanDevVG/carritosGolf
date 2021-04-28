<?php 
	include("conexion.php");
	
	$placa = $_POST['placa'];

	if (!empty($placa)) {
		
		$query = "SELECT * FROM carritos WHERE Placa LIKE '$placa'";
	    $result = mysqli_query($conex, $query);
	    if (!$result) {
			die("Error de consulta" . mysqli_error($conex));
		}

		//recorrer resultado de la consulta
		$json = array();
		while ($row = mysqli_fetch_array($result)) {
			$json[] = array(
				'Placa' => $row ['Placa'],
		    	'Especificacion' => $row ['Especificacion'],
		    	'PrecioRentaHora' => $row ['PrecioRentaHora'],
		    	'PrecioRentaSemana' => $row ['PrecioRentaSemana'],
		    	'Color' => $row ['Color'],
		    	'Modelo' => $row ['Modelo'],
		    	'Kilometraje' => $row ['Kilometraje'],
		    	'Disponibilidad' => $row ['Disponibilidad']	    		
		    );

		    /*devuelve los datos en una cadena de texto dentro de $jsonString y los envia al archivo script.js*/
		    $jsonString = json_encode($json); 
		    echo $jsonString;
		}
	}
 ?>