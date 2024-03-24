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
    <link rel="stylesheet" href="styleGerenMen.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Menú Gerente</title>
</head>

<body>
    <div class="contenedorGerente">
        <div class="texto">
            <H1>Gerente</H1>
        </div>

        <div class="contenedorHorizontal">
          <div class="botones">
            <a href="../menusCRUDE/menuCrudeHorario.html"><button class="boton">Horarios</button></a>
            <button class="boton">Asistencia</button>
        </div>
        <div class="botones">
            <button class="boton">Pagos</button>
            <button class="boton">Empleados</button>
        </div>
    </div>
    <div class="botonesInferiores">
     <button class="botonSalir">Regresar</button>
     <button class="botonSalir">Salir</button>
 </div>

</div>
</body>

<footer>
    
</footer>
</html>
