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