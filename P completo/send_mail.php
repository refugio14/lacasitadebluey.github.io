<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $animal = htmlspecialchars($_POST['animal']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Configuración del correo electrónico
    $to = "refugiolacasitadebluey@gmail.com";  // Reemplaza con tu dirección de correo electrónico
    $subject = "Solicitud de Adopción para $animal";
    $body = "Nombre: $name\nCorreo electrónico: $email\nTeléfono: $phone\n\nMensaje:\n$message";

    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "Solicitud enviada correctamente. Te contactaremos pronto.";
    } else {
        echo "Hubo un error al enviar tu solicitud. Por favor, inténtalo de nuevo.";
    }
} else {
    echo "Método de solicitud no soportado.";
}
?>
