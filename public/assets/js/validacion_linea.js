const validarUnidades = (unidades) => {
    if (unidades > 0) {
        document.getElementById('error_val').style.visibility = "hidden";
        /*         document.getElementById("error_unidades").innerHTML = "";
         */
        return true;
    } else {
        console.log('false')
            /*         document.getElementById("error_unidades").innerHTML = "El nombre debe tener mas de dos caracteres";
             */
        document.getElementById('error_val').style.visibility = 'visible';

        document.getElementById
        return false;
    }
}





$(document).ready(function() {

    let unidades;

    let bol_unidades = false;

    document.getElementById('error_val').style.visibility = "hidden";
    unidades = document.getElementById("unidades").value;

    enviar = document.getElementById("enviar");


    enviar.disabled = true;

    $('#unidades').on('input', function(e) {
        console.log();

        unidades = document.getElementById("unidades").value;
        console.log(unidades)
        bol_unidades = validarUnidades(unidades);

        validar();
    });



    const validar = () => {
        if (bol_unidades === true) {
            enviar.disabled = false;
        } else {
            enviar.disabled = true;
        }
    }


})