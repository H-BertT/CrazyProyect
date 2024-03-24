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
    <link rel="stylesheet" href="menuRecepcion.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Recepción Menú</title>
</head>

<body>
    <div class="contenedorG">
        <div class="texto">
            <H1>Recepción</H1>
        </div>

          <div class="contenedorInternoSuperior">
                <div class="botones">
                      <a href="../recepcion/agenda_de_fichas_de_cita.php"><button class="boton">Agenda</button></a>
                      <a href="../menusCRUDE/menu_crude_cliente.php"><button class="boton">Cliente</button></a>
                  </div>
                  <div class="botones">
                      <a href="../menusCRUDE/menu_crude_servicios.php"><button class="boton">Servicios</button></a>
                      <a href="../8gestionDeTicket/generacion_de_ticket.php"><button class="boton">Pago de cita</button></a>
                  </div>
            </div>
            <div class="botones">
                  <a href="../menusCRUDE/menu_crude_asis_hora.php"><button class="boton">Empleados</button></a>
                  <a href="../5gestionDePlanes/planes_vista_recepcion.php"><button class="boton">Planes y Recomendaciones</button></a>
          </div>
          <div class="botonesInferiores">
                  <a href="inicio_sesion.php"><button class="botonSalir">Regresar</button></a>
                  <a href="index.html"><button class="botonSalir">Salir</button></a>
          </div>

      </div>
</body>
</html>
