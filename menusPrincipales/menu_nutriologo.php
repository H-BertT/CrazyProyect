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
    <title>Nutriólogo Menú</title>
</head>

<body>
    <div class="contenedor">
        <div class="texto">
            <H1>Nutriólogo</H1>
        </div>
          <div class="contenedorInternoSuperior">
          <a href="../menusCRUDE/menu_crude_planes_nutri.php"><button class="boton">Planes cliente</button></a>
          </div>
          <!-- <div class="botones">
                <button class="botonesLargos">Hoja de recomendaciones</button>
          </div> -->
          <div class="botonesInferiores">
          <a href="inicio_sesion.php"><button class="botonSalir">Regresar</button></a>
             <a href="index.html"><button class="botonSalir">Salir</button></a>
          </div>

      </div>
</body>
</html>
