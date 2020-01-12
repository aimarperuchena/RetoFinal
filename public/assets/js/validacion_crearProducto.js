$(document).ready(function() {

    let stock;
    let precio;
    let enviar;
    let bol_stock = true;
    let bol_precio = false;
    let error_val = null;
    let error_stock = null;
    let error_precio = null;
    error_stock = document.getElementById('error_stock');
    error_precio = document.getElementById('error_precio');
    error_val = document.getElementById('error_val');
    precio = document.getElementById("precio").value;
    stock = document.getElementById("stock").value;
    enviar = document.getElementById("enviar");



    enviar.disabled = true;

    $('#precio').on('input', function(e) {
        precio = document.getElementById("precio").value;
        bol_precio = validarPrecio(precio);

        validar();
    });
    $('#stock').on('input', function(e) {
        stock = document.getElementById("stock").value;
        bol_stock = validarStock(stock);
        validar();
    });







    const validar = () => {
        if (bol_precio === true && bol_stock === true) {
            error_val.style.visibility = "hidden";
            enviar.disabled = false;
        } else {

            error_val.style.visibility = "visible";
            enviar.disabled = true;
        }
    }

    const validarPrecio = (precio) => {
        if (precio > 0.1) {
            error_precio.style.visibility = "hidden";
            error_val.style.visibility = "hidden";

            return true;
        } else {
            error_precio.style.visibility = "visible";
            return false;
        }
    }

    const validarStock = (stock) => {
        if (stock >= 5) {
            error_stock.style.visibility = "hidden";
            error_val.style.visibility = "hidden";
            return true;
        } else {
            error_stock.style.visibility = "visible";

            return false;
        }
    }


})