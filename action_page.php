<?php

// Calling Fields
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telofono'];
$Mensaje = $_POST['Mensaje'];

//Sending Data
$destinatario = "arqluisidrogo@gmail.com";
$asunto = "Mensaje desde nuestra web Li Arquitectura";

$carta = "De: $Nombre \n";
$carta .= "Correo: $Email \n";
$carta .= "Telefono: $Telefono \n";
$carta .= "Mensaje: $Mensaje";

//Sending Messages
mail($destinatario, $asunto, $carta)

?>