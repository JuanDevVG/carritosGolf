$(function(){

	$('#placa').keyup(function(){
		if ($('#placa').val()) {
			
			let placa = $('#placa').val();
			$.ajax({
				url: '../php_files/consultarRenta.php',
				type: 'POST',
				data: { placa },
				success: function(response){
					let datos = JSON.parse(response);

					let fechaSolicitud = '';
					let horaSolicitud = '';
					let fechaDevolucion = '';
					let horaDevolucion = '';
					let kmActualDevolucion = '';
					let estadoVehiculo = '';
					let Observaciones = '';
					
					datos.forEach(datos =>{
						fechaSolicitud += `${datos.fechaSolicitud}`
						horaSolicitud += `${datos.horaSolicitud}`
						fechaDevolucion += `${datos.fechaDevolucion}`
						horaDevolucion += `${datos.horaDevolucion}`
						kmActualDevolucion += `${datos.kmActualDevolucion}`
						estadoVehiculo += `${datos.estadoVehiculo}`
						Observaciones += `${datos.Observaciones}`
					});

					$('#fechaSolicitud').val(fechaSolicitud);
					$('#horaSolicitud').val(horaSolicitud);
					$('#fechaDevolucion').val(fechaDevolucion);
					$('#horaDevolucion').val(horaDevolucion);
					$('#kmDevolucion').val(kmActualDevolucion);
					$('#estadoDevolucion').val(estadoVehiculo);
                    $('#observaciones').val(Observaciones);
				
				}
			})
		} 
	})
})