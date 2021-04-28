var respuesta;

function confirmaBorrarRenta() {
    respuesta= confirm("Desea eliminar el registro de la solicitud de renta");

    if (respuesta){
        return true;
    } else {
        return false;
    }
}

function confirmaBorrarCarrito() { 
    respuesta = confirm("Desea eliminar el registro del carro");
    
    if (respuesta) {
        return true;
    } else {
        return false;
    }
}

function confirmaBorrarCliente() { 
    respuesta = confirm("Desea eliminar el registro del cliente?");

    if (respuesta) {
        return true;
    } else {
        return false;
    }
}