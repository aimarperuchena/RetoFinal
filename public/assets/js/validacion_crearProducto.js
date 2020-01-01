const validarPrecio = (precio) => {
    if (stock > 5) {
        return true;
    } else {
        return false;
    }
}

const validarStock = (stock) => {
    if (stock > 5) {
        return true;
    } else {
        return false;
    }
}



$(document).ready(function() {

    let stock;
    let precio;
    let enviar;
    let bol_stock = true;
    let bol_precio = false;
    precio = document.getElementById("precio").value;
    stock = document.getElementById("stock").value;
    enviar = document.getElementById("enviar");

    validarPrecio(precio);
    validarStock(stock);

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
            enviar.disabled = false;
        } else {
            enviar.disabled = true;
        }
    }


})