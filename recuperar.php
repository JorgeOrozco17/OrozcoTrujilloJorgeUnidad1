<?php
include 'head.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Cuenta</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
        <div class="centro-form">
            <div class="form-container">
                <p class="title">Recupera tu cuenta</p>
                <form class="form">
                    <input type="email" class="input" placeholder="Ingresa tu email" required>
                    <button class="form-btn" type="submit">Enviar enlace</button>
                </form>
                <p class="sign-up-label">
                    ¿Recordaste tu contraseña? <a href="login.php" class="sign-up-link">Inicia sesión</a>
                </p>
            </div>
        </div>
    </main>
</body>
</html>