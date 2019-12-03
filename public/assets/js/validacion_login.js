$(document).ready(function() {

    let email;
    let password;
    let enviar;
    let bol_email = false;
    let bol_pass = false;
    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    login = document.getElementById("login");

    login.style.disabled = true;
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







    const validarEmail = (email) => {
        if (/\S+@\S+\.\S+/.test(email)) {
            document.getElementById("login_email_error").innerHTML = "";
            return true;
        } else {
            document.getElementById("login_email_error").innerHTML = "Email mal introducido";
            return false;
        }


    }

    const validarPassword = (password) => {
        if (password.length >= 10) {
            document.getElementById("login_password_error").innerHTML = "";
            return true;


        } else {

            document.getElementById("login_password_error").innerHTML = "Contraseña mal introducida";

            return false;
        }
    }

    const validar = () => {
        if (bol_email == true && bol_pass == true) {

            login.disabled = false;

        } else {
            login.disabled = true;
        }
    }
})