$(document).ready(function() {
    let nombre;
    let apellido;
    let telefono;
    let email;
    let contrasena1;
    let contrasena2;

    let enviar;

    let patron_email = /\S+@\S+\.\S+/g;
    let error = '';
    let bol_nombre = null;
    let bol_apellido = null;
    let bol_telefono = null;
    let bol_email = null;
    let bol_contrasena1 = null;
    let bol_contrasena2 = null;

    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById('apellido').value;
    telefono = document.getElementById('telefono').value;
    email = document.getElementById('email').value;
    contrasena1 = document.getElementById('contrasena1').value;
    contrasena2 = document.getElementById('contrasena2').value;

    enviar = document.getElementById("registrar");
    div_validacion = document.getElementById('div_validacion');


    $('#enviar').on('input', function(e) {


        alert('envair')
    });
    $('#nombre').on('input', function(e) {

        nombre = document.getElementById("nombre").value;
        bol_nombre = validarNombre(nombre);
        validar();
    });
    $('#apellido').on('input', function(e) {
        apellido = document.getElementById("apellido").value;
        bol_apellido = validarApellido(apellido);
        validar();
    });
    $('#telefono').on('input', function(e) {
        telefono = document.getElementById("telefono").value;
        bol_telefono = validarTelefono(telefono);
        validar();
    });

    $('#correo').on('input', function(e) {
        email = document.getElementById("correo").value;
        bol_email = validarEmail(email);
        validar();
    });

    $('#contrasena1').on('input', function(e) {
        contrasena1 = document.getElementById("contrasena1").value;
        bol_contrasena1 = validarContrasena1(contrasena1);
        validar();
    });

    $('#contrasena2').on('input', function(e) {
        contrasena2 = document.getElementById("contrasena2").value;
        bol_contrasena2 = validarContrasena2(contrasena2, contrasena1);
        validar();
    });







    const validar = () => {

        if (bol_nombre === true && bol_apellido === true && bol_telefono === true && bol_email === true && bol_contrasena1 === true && bol_contrasena2 === true) {

            div_validacion.style.visibility = "hidden";
            enviar.disabled = false;

            console.log('Nombre' + bol_nombre + " Apellido" + bol_apellido + " Telefono: " + bol_telefono + " Email " + bol_email + " Contraseña: " + bol_contrasena1 + " Contraseña2: " + bol_contrasena2)

        } else {
            console.log('INCORRECTO')
            enviar.disabled = true;
            div_validacion.style.visibility = "visible";
            console.log('Nombre' + bol_nombre + " Apellido" + bol_apellido + " Telefono: " + bol_telefono + " Email " + bol_email + " Contraseña: " + bol_contrasena1 + " Contraseña2: " + bol_contrasena2)


        }
    }
    const validarNombre = (nombre) => {
        if (nombre.length >= 3) {
            document.getElementById('nombre_error').style.visibility = "hidden";
            document.getElementById('nombre_error').innerHTML = "";
            return true;
        } else {
            document.getElementById('nombre_error').innerHTML = "El nombre debe tener 3 caracteres";
            document.getElementById('nombre_error').style.visibility = "visible";

            return false;
        }
    }

    const validarApellido = (apellido) => {
        if (apellido.length >= 3) {
            document.getElementById('apellido_error').style.visibility = "hidden";

            document.getElementById('apellido_error').innerHTML = "";

            return true;
        } else {
            document.getElementById('apellido_error').innerHTML = "El apellido debe tener 3 caracteres";
            document.getElementById('apellido_error').style.visibility = "visible";

            return false;
        }
    }

    const validarTelefono = (telefono) => {
        if (telefono.length == 9) {
            document.getElementById('telefono_error').innerHTML = "";
            document.getElementById('telefono_error').style.visibility = "hidden";

            return true;
        } else {
            document.getElementById('telefono_error').innerHTML = "Telefono mal Introducido";
            document.getElementById('telefono_error').style.visibility = "visible";

            return false;
        }
    }

    const validarEmail = (email) => {
        if (patron_email.test(email)) {
            console.log('Email correcto')
            document.getElementById('email_error').innerHTML = "";
            document.getElementById('email_error').style.visibility = "hidden";

            return true;
        } else {
            console.log('Email incorrecto')
            document.getElementById('email_error').innerHTML = "Email mal Introducido";
            document.getElementById('email_error').style.visibility = "visible";

            return false;
        }
    }

    const validarContrasena1 = (contrasena1) => {
        if (contrasena1.length >= 8) {
            document.getElementById('contrasena_error').innerHTML = "";
            document.getElementById('contrasena_error').style.visibility = "hidden";

            return true;
        } else {
            document.getElementById('contrasena_error').innerHTML = "La contraseña debe tener 8 caracteres";
            document.getElementById('contrasena_error').style.visibility = "visible";

            return false;
        }
    }

    const validarContrasena2 = (contrasena1, contrasena2) => {
        if (contrasena2 === contrasena1) {
            document.getElementById('contrasena2_error').innerHTML = "";
            document.getElementById('contrasena2_error').style.visibility = "hidden";
            console.log("Coincide")
            return true;
        } else {
            document.getElementById('contrasena2_error').innerHTML = "Las contraseñas deben coincidir";
            document.getElementById('contrasena2_error').style.visibility = "visible";
            console.log("No Coincide")
            return false;
        }
    }




})