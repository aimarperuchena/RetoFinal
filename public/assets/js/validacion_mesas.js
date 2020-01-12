$(document).ready(function() {

    let nombre;
    let capacidad;
    let enviar;
    let bol_nombre = true;
    let bol_capacidad = false;
    let error_val = null;
    let error_nombre = null;
    let error_capacidad = null;
    capacidad = document.getElementById('capacidad');
    nombre = document.getElementById('nombre');
    error_val = document.getElementById('error_val');
    error_capacidad = document.getElementById('error_capacidad');
    error_nombre = document.getElementById('error_nombre');
    enviar = document.getElementById("enviar");



    enviar.disabled = true;

    $('#nombre').on('input', function(e) {
        nombre = document.getElementById("nombre").value;
        bol_nombre = validarNombre(nombre);

        validar();
    });
    $('#capacidad').on('input', function(e) {
        capacidad = document.getElementById("capacidad").value;
        bol_capacidad = validarCapacidad(capacidad);
        validar();
    });







    const validar = () => {

        if (bol_nombre === true && bol_capacidad === true) {
            error_val.style.visibility = "hidden";
            enviar.disabled = false;
        } else {

            error_val.style.visibility = "visible";
            enviar.disabled = true;
        }
    }


    const validarNombre = (nombre) => {
        if (nombre.length >= 1) {
            error_nombre.style.visibility = "hidden";
            error_val.style.visibility = "hidden";
            return true;
        } else {
            error_nombre.style.visibility = "visible";
            return false;
        }
    }
    const validarCapacidad = (capacidad) => {
        if (capacidad.value >= 2) {
            error_capacidad.style.visibility = "hidden";
            error_val.style.visibility = "hidden";
            return true;
        } else {
            error_capacidad.style.visibility = "visible";

            return false;
        }
    }


})