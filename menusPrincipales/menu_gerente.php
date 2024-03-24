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
            <a href="../menusCRUDE/menu_crude_horario.php"><button class="boton">Horarios</button></a>
            <a href="../menusCRUDE/menu_crude_asistencia.php"><button class="boton">Asistencia</button></a>
        </div>
        <div class="botones">
            <a href="../gerente/pago_empleados.php"><button class="boton">Pagos</button></a>
            <a href="../menusCRUDE/menu_crude_empleados.php"><button class="boton">Empleados</button></a>
        </div>
    </div>
    <div class="botonesInferiores">
     <a href="inicio_sesion.php"><button class="botonSalir">Regresar</button></a>
     <a href="index.html"><button class="botonSalir">Salir</button></a>
 </div>

</div>
</body>

<footer>
    
</footer>
</html>
