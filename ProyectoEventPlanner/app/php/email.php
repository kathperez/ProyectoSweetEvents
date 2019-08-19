<?php
/**
 * @author Cristhian Martinez
 */
if (isset($_POST['submit'])) {

    $correoDestino = "sweeteventsulacit@gmail.com"; //Definicion del correo al que van a llegar los mensajes
    $asunto = "Validacion de Empresa"; //Asunto de los correos

    function died($error) {
        echo "Un error se ha generado debido a que se digito erroneamente  <br/>";
        echo "Por favor corrija el siguiente error: <br/> <br/>";
        echo $error. "<br/><br/>";
        die();   
    }
    
    // validar si los datos existen

    if(!isset($_POST['empresa']) ||
        !isset($_POST['correo']) ||
        !isset($_POST['telefono'])) {
        died('Hubo un error a la hora del envio');      
    }

    //Se obtiene el texto de los campos en el form
    $empresa = $_POST['empresa'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    //Exceptions
    $mensaje_error = "";
    $correo_excepcion = "/^[0-9]+$/";

    /*
    En caso si se necesita pero es la excepcion solo permitir nombre sin numero
    $empresa_excepcion = "/^[A-Za-z.'-]+$/";   
    if (!preg_match($empresa_excepcion, $empresa)) {
        $mensaje_error .= '<b> Nombre de la empresa contiene numeros  </b> <br/>';
    }
   */
    $telefono_excepcion = '/[^\s]*@[a-z0-9.-]*/i';

    if(!preg_match($telefono_excepcion,$telefono)){
        $mensaje_error .= '<b> La direccion de correo no es valida </b> <br/>';
    }

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

