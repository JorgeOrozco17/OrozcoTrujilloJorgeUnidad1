<?php
include 'head.php';
require_once __DIR__ . '/app/controller/contactaController.php';

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);
    $email = trim($_POST['email']);
    $texto = trim($_POST['mensaje']);

    $contactoController = new ContactoController($mysqli);
    $mensaje = $contactoController->guardar($nombre, $telefono, $email, $texto);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php if($mensaje) echo "<div style='color:teal; text-align:center; font-weight:600; margin-top:10px;'>$mensaje</div>"; ?>
    <div class="contact-form-container">
        <div class="contact-title">Contáctanos</div>
        <form method="post" autocomplete="off">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="contact-input" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" class="contact-input" name="telefono" id="telefono" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="contact-input" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="contact-textarea" name="mensaje" id="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit" class="contact-btn">Enviar</button>
        </form>
    </div>
</body>
</html>