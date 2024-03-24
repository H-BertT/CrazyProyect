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
    <link rel="stylesheet" href="menuCrudeServicios.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Administración de planes</title>
</head>

<body>
    <div class="contenedor">
        <div class="texto">
            <H1>Administración de planes</H1>
          </div>

        <div class="botonesCrude">
        <a href="../5gestionDePlanes/administrar_planes_asesor.php"><button class="botonCrude">Crear conjunto de planes</button></a>
        <a href="../5gestionDePlanes/administrar_planes_asesor.php"><button class="botonCrude">Modificar conjunto de planes</button></a>
        <a href="../5gestionDePlanes/administrar_planes_asesor.php"><button class="botonCrude">Eliminar conjunto de planes</button></a>
        </div>

        <div class="botonesInferiores">
        <a href="../menusPrincipales/menu_asesor_deportivo.php"><button class="botonSalir">Regresar</button></a>
        </div>
      </div>
</body>
</html>
