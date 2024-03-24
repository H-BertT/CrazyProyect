<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesInicio.css">
    <link rel="stylesheet" href="fondo.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <section>
        <form method="POST" action="api/api_login.php">
            <div class="texto">
                <h1>Inicio de sesión</h1>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" required name="nombre_usuario">
                <label for="email">Usuario</label>
            </div>
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" required name="contraseña">
                <label for="password">Contraseña</label>
            </div>
            <button type="submit" name="iniciar_sesion">Iniciar</button>
            <a href="index.html"><button class="boton">Regresar</button></a>
        </form>
    </section>
</body>
</html>
