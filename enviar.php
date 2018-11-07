<?php   

$nombre + $_POST['name'];
$correo + $_POST['email'];
$mensaje + $_POST['message'];

// Datos para el correo

$destinatario = "pul98alvarenga@gmail.com";
$asunto = "Contacto desde la Web - CAPCYSA de RL";

$carta = "Servicio de Consultas de CAPCYSA \n";
$carta .= "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "mensaje: $mensaje]";

//enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:message-send.html');
?>
