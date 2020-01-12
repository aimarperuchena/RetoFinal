$(document).ready(function() {

    let descripcion;

    let enviar;


    let error = '';
    let bol_descripcion = false;

    descripcion = document.getElementById("descripcion").value;

    enviar = document.getElementById("enviar");
    div_validacion = document.getElementById('div_validacion');




    $('#descripcion').on('input', function(e) {
        descripcion = document.getElementById("descripcion").value;

        bol_descripcion = validarDescripcion(descripcion);
        validar();
    });





    const validar = () => {
        if (bol_descripcion === true) {
            div_validacion.style.visibility = "hidden";
            enviar.disabled = false;
        } else {
            enviar.disabled = true;
            div_validacion.style.visibility = "visible";


        }
    }
    const validarDescripcion = (descripcion) => {
        if (descripcion.length >= 20) {

            return true;
        } else {
            return false;
        }
    }


})