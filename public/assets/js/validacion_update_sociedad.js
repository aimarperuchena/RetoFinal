$(document).ready(function() {

    let nombre;
    let ubicacion;
    let telefono;
    let aceptar;

    let patron_telefono = /(\+34|0034|34)?[ -]*(6|7)[ -]*([0-9][ -]*){8}/g;
    let error = '';
    let bol_nombre = false;
    let bol_ubicacion = false;
    let bol_telefono = false;
    let div_validacion = false;
    nombre = document.getElementById("nombre").value;
    ubicacion = document.getElementById("ubicacion").value;
    telefono = document.getElementById("telefono")
    aceptar = document.getElementById("update_sociedad");
    div_validacion = document.getElementById('validacion_update');

    aceptar.disabled = true;


    $('#nombre').on('input', function(e) {
        nombre = document.getElementById("nombre").value;

        bol_nombre = validarNombre(nombre);
        validar();
    });


    $('#ubicacion').on('input', function(e) {
        ubicacion = document.getElementById("ubicacion").value;
        bol_ubicacion = validarUbicacion(ubicacion);
        validar();
    });
    $('#telefono').on('input', function(e) {
        telefono = document.getElementById("telefono").value;

        bol_telefono = validarTelefono(telefono);
        validar();
    });


    const validar = () => {
        if (bol_nombre === true && bol_telefono === true && bol_ubicacion === true) {
            div_validacion.style.visibility = "hidden";
            aceptar.disabled = false;
        } else {
            aceptar.disabled = true;
            div_validacion.style.visibility = "visible";


        }
    }
    const validarNombre = (nombre) => {
        if (nombre.length > 5) {
            document.getElementById('error_nombre').innerHTML = "";
            return true;
        } else {
            document.getElementById('error_nombre').innerHTML = "Nombre mal introducido";
            return false;
        }
    }

    const validarTelefono = (telefono) => {
        if (patron_telefono.test(telefono)) {
            document.getElementById('error_telefono').innerHTML = "";
            return true;
        } else {
            document.getElementById('error_telefono').innerHTML = "Telefono mal Introducido";
            return false;
        }
    }



    const validarUbicacion = (ubicacion) => {
        if (ubicacion.length >= 5) {
            document.getElementById('error_ubicacion').innerHTML = "";
            return true;
        } else {
            document.getElementById('error_ubicacion').innerHTML = "Ubicación mal introducida";
            return false;
        }
    }
})