<?php

	$database = "db_carritosgolf";
	$user = "root";
	$password = "";
	$server = "localhost";

	//Conectar con la base de datos
	$conex = mysqli_connect($server,$user,$password,$database);

	if (!$conex) {
			echo "Conexion Fallida";
	}

?>