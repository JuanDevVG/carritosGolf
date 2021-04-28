$(function(){

	$('#num_licencia').keyup(function(){
		if ($('#num_licencia').val()) {

			let licencia = $('#num_licencia').val();
			$.ajax({
				url: '../php_files/consultarLicencia.php',
				type: 'POST',
				data: { licencia },
				success: function(response){
					let datos = JSON.parse(response);

					let nombre = '';
					let telefono = '';
					let direccion = '';

					datos.forEach(datos =>{
						nombre += `${datos.Nombre}`
						telefono += `${datos.Telefono}`
						direccion += `${datos.Direccion}`
					});

					$('#name').val(nombre);
					$('#telefono').val(telefono);
					$('#direccion').val(direccion);									
				}
			})
		} 
	})
})
