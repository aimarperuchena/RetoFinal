$(document).ready(function() {

    let email;
    let password;
    let password2;
    let login;
    let name;

    let bol_pass2 = false;
    let bol_name = false;
    let bol_email = false;
    let bol_pass = false;
    name = document.getElementById("name_reg").value;
    email = document.getElementById("email_reg").value;
    password = document.getElementById("password_reg").value;
    password2 = document.getElementById("password-confirm_reg").value;
    registro = document.getElementById("registro");
    registro.style.visibility = 'hidden';


    $('#name_reg').on('input', function(e) {
        name = document.getElementById("name_reg").value;
        console.log(name)
        bol_name = validarName(name);
        validar();
    });


    $('#email_reg').on('input', function(e) {
        email = document.getElementById("email_reg").value;
        bol_email = validarEmail(email);
        validar();
    });
    $('#password_reg').on('input', function(e) {
        password = document.getElementById("password_reg").value;

        bol_pass = validarPassword(password);
        validar();
    });
    $('#password-confirm_reg').on('input', function(e) {
        password2 = document.getElementById("password-confirm_reg").value;

        bol_pass2 = validarPassword(password2);
        validar();
    });

    const validar = () => {
        if (bol_name === true && bol_email === true && bol_pass === true && bol_pass2 === true && password === password2) {
            alert('si')
            registro.style.visibility = 'visible';
        } else {
            registro.style.visibility = 'hidden';

            console.log('Name:' + bol_name + " Email: " + bol_email + " Pass: " + bol_pass + " Pass2_ " + bol_pass2);
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



    const validarName = (name) => {
        if (name.length > 2) {
            return true;

        } else {
            return false;

        }
    }
})