'use strict'

var linkAbrirVentana = document.getElementById('abrirVentana'),
    fondo = document.getElementById('fondo'),
    ventana = document.getElementById('ventana'),
    cerrarVentana = document.getElementById('cerrarVentana');


linkAbrirVentana.addEventListener('click', function () {

    fondo.classList.add('active');
    ventana.classList.add('active');
});

cerrarVentana.addEventListener('click', function () {

    fondo.classList.remove('active');
    ventana.classList.remove('active');

});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
