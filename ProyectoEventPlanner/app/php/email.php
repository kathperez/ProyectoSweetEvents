<?php
if (isset($_POST['submit'])) {
/**
 * @author Cristhian Martinez
 */
    $correoDestino = "sweeteventsulacit@gmail.com"; //Definicion del correo al que van a llegar los mensajes
    $asunto = "Validacion de Empresa"; //Asunto de los correos

    //Se obtiene el texto de los campos en el form
    $empresa = $_POST['empresa']; 
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    //Se le da formato al mensaje
    $mensaje = "Empresa: " . $empresa . "\n" . 
    "Correo: " . $correo . "\n" .
    "Telefono: " . $telefono . "\n" .
    "Mensaje: \n";

    //Se agrega el texto del mensaje al correo
    $mensaje .= $_POST['mensaje'];
 
    //Se envia el correo a la empresa
    mail($correoDestino, $asunto, $mensaje);

    //Se da formato al mensaje del cliente
    $mensajeCliente = "\n-------------------------- Esta es una copia de su mensaje --------------------------\n";
    $mensajeCliente .= $mensaje;
    $asunto = "Copia cliente: Validacion Empresa";

    //Se envia una copia del mensaje al correo indicado por el cliente
    mail($correo, $asunto, $mensajeCliente);}
    header('Location: http://localhost/ProyectoSweetEvents/ProyectoEventPlanner/index.html');
    exit;

?>