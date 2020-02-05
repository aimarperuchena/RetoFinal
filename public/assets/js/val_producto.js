    let Nombre = document.getElementById("nombre");
    let Descri = document.getElementById("descripcion");
    let enviar = document.getElementById("enviar");
    let patron = /^[A-Z]{1}[a-z0-9]{2}/g;

    enviar.disabled = true;

    Nombre.onkeyup = function() {

        if (Nombre.value.match(patron)) {
            nombre.classList.remove("invalid");
            nombre.classList.add("valid");
            enviar.disabled = false;
        } else {
            nombre.classList.remove("valid");
            nombre.classList.add("invalid");
            enviar.disabled = true;
        }
    }

    Descri.onkeyup = function() {

        if (Descri.value.match(patron)) {
            descripcion.classList.remove("invalid");
            descripcion.classList.add("valid");
            enviar.disabled = false;

        } else {
            descripcion.classList.remove("valid");
            descripcion.classList.add("invalid");
            enviar.disabled = true;
        }
    }