const validarName = (name) => {
    if (name.length > 2) {
        return true;
    } else {
        return false;
    }
}


const validarEmail = (email) => {
    if (/\S+@\S+\.\S+/.test(email)) {
        return true;
    } else {
        return false;
    }
}

const validarPassword = (password) => {
    if (password.length >= 10) {
        return true;
    } else {
        return false;
    }
}


$(document).ready(function() {

    let name;
    let email;
    let password;
    let enviar;
    let bol_email = true;
    let bol_pass = false;
    let bol_name = true;
    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    enviar = document.getElementById("enviar");
    name = document.getElementById("name").value;
    validarName(name);
    validarEmail(email);
    validarPassword(password);
    enviar.disabled = true;

    $('#email').on('input', function(e) {
        email = document.getElementById("email").value;
        bol_email = validarEmail(email);

        validar();
    });
    $('#password').on('input', function(e) {
        password = document.getElementById("password").value;
        bol_pass = validarPassword(password);
        validar();
    });
    $('#name').on('input', function(e) {
        name = document.getElementById("name").value;
        bol_name = validarName(name);
        validar();
    });






    const validar = () => {
        if (bol_email === true && bol_pass === true && bol_name === true) {
            enviar.disabled = false;
        } else {
            enviar.disabled = true;
            console.log('Name: ' + bol_name + " Email: " + bol_email + " Pass: " + bol_pass)
        }
    }


})