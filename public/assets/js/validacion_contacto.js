$(document).ready(function() {

    let email;

    let phone;
    let message;
    let registro;
    let bol_name = false;
    let bol_phone = false;
    let bol_message = false;
    let bol_email = false;



    registro = document.getElementById("enviar");
    registro.style.visibility = 'hidden';
    $('#contact_email').on('input', function(e) {
        email = document.getElementById("contact_email").value;
        bol_email = validarEmail(email);
        /*   alert('email' + bol_email) */
        validar();
    });


    $('#contact_name').on('input', function(e) {
        name = document.getElementById("contact_name").value;

        bol_name = validarName(name);
        console.log(name)
        validar();
    });

    $('#phone').on('input', function(e) {
        phone = document.getElementById("phone").value;
        bol_phone = validarPhone(phone);
        /*   alert('email' + bol_email) */
        validar();
    });

    $('#text_area').on('input', function(e) {
        message = document.getElementById("text_area").innerHTML;
        bol_message = validarPhone(phone);
        /*   alert('email' + bol_email) */
        validar();
    });

    const validar = () => {
        if (bol_name === true && bol_email === true && bol_phone === true && bol_message === true) {

            registro.style.visibility = 'visible';

        } else {
            console.log('Name: ' + bol_name + " Phone:" + bol_phone + " Email: " + bol_email + " Message: " + bol_message);
        }
    }


    const validarMensaje = (message) => {
        if (message.length >= 10) {
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
    const validarName = (name) => {
        if (name.length > 2) {
            return true;
        } else {
            return false;
        }
    }




    const validarPhone = (phone) => {
        if (phone.length === 9 && /^[679]{1}[0-9]{8}$/.test(phone)) {
            return true;
        } else {
            return false;
        }
    }
})