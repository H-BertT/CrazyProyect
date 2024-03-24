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
    <title>Consulta empleado</title>
</head>

<body>
    <div class="contenedor">
        <div class="texto">
            <H1>Consulta del empleado</H1>
          </div>

        <div class="botonesCrude">
        <a href="../gerente/consultar_asistencias.php"><button class="botonCrude">Consultar asistencias</button></a>
        <a href="../gerente/visualizar_horarios.php"><button class="botonCrude">Visualizar horarios</button></a>
        </div>
        <div class="botonesInferiores">
        <a href="../menusPrincipales/menu_recepcion.php"><button class="botonSalir">Regresar</button></a>
        </div>

      </div>
</body>
</html>
