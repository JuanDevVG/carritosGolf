$(function(){

	$('#placa').keyup(function(){
		if ($('#placa').val()) {

			let placa = $('#placa').val();
			$.ajax({
				url: '../php_files/consultarPlaca.php',
				type: 'POST',
				data: { placa },
				success: function(response){
					let datos = JSON.parse(response);

					let especificacion = '';
					let precioRentaHora = '';
					let precioRentaSemana = '';
					let color = '';
					let modelo = '';
					let kilometraje = '';
					let disponibilidad = '';
					let placaRe = '';
					datos.forEach(datos =>{
						placaRe += `${datos.Placa}`
						especificacion += `${datos.Especificacion}`
						precioRentaHora += `${datos.PrecioRentaHora}`
						precioRentaSemana += `${datos.PrecioRentaSemana}`
						color += `${datos.Color}`
						modelo += `${datos.Modelo}`
						kilometraje += `${datos.Kilometraje}`
						disponibilidad += `${datos.Disponibilidad}`
					});

					$('#especificacion').val(especificacion);
					$('#precioRentaHora').val(precioRentaHora);
					$('#precioRentaSemana').val(precioRentaSemana);
					$('#color').val(color);
					$('#modelo').val(modelo);
					$('#kilometraje').val(kilometraje);
					if (disponibilidad=='Si') {
						document.getElementById('disponibilidad-si').checked = true;
					} else {
						document.getElementById('disponibilidad-no').checked = true;
					}									
				}
			})
		} 
	})
})
