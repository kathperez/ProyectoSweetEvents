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

/**
 * Valida que el texto ingresado en el campo de correo tenga formato de correo
 * @param {Correo del form} email 
 */
function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

/**
 * Valida los campos del form de contactenos y deshabilita el boton en caso de no cumplir los requisitos
 */
function validate() {
    let email = document.getElementById('email');
    let boton =  document.getElementById('submit');
    let nombre = document.getElementById('nombre');
    let mensaje = document.getElementById('mensaje');
    if (validateEmail(email.value)) {
        email.style.borderColor = 'green';
        boton.style.opacity = '1';
        boton.disabled = false;
    } else {
        email.style.borderColor = 'red';
        alert("Revise su correo e intente de nuevo");
        boton.disabled = true;
        boton.style.opacity = '0.5';
    }

    if (nombre.value == "" || mensaje.value == "") {
        alert("No debe dejar campos vacíos");
        boton.disabled = true;
        boton.style.opacity = '0.5';
    } else {
        boton.disabled = false;
        boton.style.opacity = '1';
    }
    return false;
}
