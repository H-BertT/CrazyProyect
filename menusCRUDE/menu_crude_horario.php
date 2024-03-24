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
    <title>Administración de horarios</title>
</head>

<body>
    <div class="contenedor">
        <div class="texto">
            <H1>Administración de horarios</H1>
          </div>

        <div class="botonesCrude">
        <a href="../gerente/administrar_horario.php"><button class="botonCrude">Agregar horario</button></a>
        <a href="../gerente/administrar_horario.php"><button class="botonCrude">Modificar horario</button></a>
        <a href="../gerente/administrar_horario.php"><button class="botonCrude">Eliminar horario</button></a>
        </div>
        
        <div class="botonesInferiores">
        <a href="../menusPrincipales/menu_gerente.php"><button class="botonSalir">Regresar</button></a>
        </div>

      </div>
</body>
</html>
