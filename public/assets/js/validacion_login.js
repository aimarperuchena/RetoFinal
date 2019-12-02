$(document).ready(function() {

    let email;
    let password;
    let login;
    let bol_email = false;
    let bol_pass = false;
    email = document.getElementById("email").value;
    password = document.getElementById("password").value;
    login = document.getElementById("login");

    login.style.visibility = 'hidden';
    $('#email').on('input', function(e) {
        email = document.getElementById("email").value;
        bol_email = validarEmail(email);
        /*   alert('email' + bol_email) */
        validar();
    });
    $('#password').on('input', function(e) {
        password = document.getElementById("password").value;

        bol_pass = validarPassword(password);
        /*  alert('passwodr' + bol_pass) */
        validar();
    });







    const validarEmail = (email) => {
        if (/\S+@\S+\.\S+/.test(email)) {

            return true;
        } else {

            return false;
        }


    }

    const validarPassword = (password) => {
        if (password.length > 10) {
            return true;


        } else {

            return false;
        }
    }

    const validar = () => {
        if (bol_email == true && bol_pass == true) {
            alert('si')
            login.style.visibility = 'visible';

        } else {
            login.style.visibility = 'hidden';
        }
    }
})