<?php
// Verificar si la cookie "usuario" está establecida
if(!isset($_COOKIE['usuario'])) {
    header("Location: ../index.html");
    exit(); // Es buena práctica detener la ejecución del script después de enviar una redirección
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fondo.css">
    <title>Administración de asistencias</title>
</head>

<body>
    <div class="contenedor">
        <div class="texto">
            <H1>Administración de asistencias</H1>
          </div>

        <div class="botonesCrude">
          <button class="botonCrude">Consultar asistencia</button>
          <button class="botonCrude">Tomar asistencia</button>
          <button class="botonCrude">Modificar asistencia</button>
          <button class="botonCrude">Eliminar asistencia</button>
        </div>
        <div class="botonesInferiores">
           <button class="botonSalir">Regresar</button>
           <button class="botonSalir">Salir</button>
        </div>

      </div>
</body>
</html>
