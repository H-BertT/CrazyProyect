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
  <title>Gestion de Ticket</title>
  <link rel="stylesheet" href="generarTicket.css">
  <link rel="stylesheet" href="../fondo.css">
  <script src="generacionDeTicket.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
  <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>


</head>
</head>
<body>

  <div class="contenedorG">
    <div class="contenedorInternoSuperior">
      <form id="formulario-ticket">
        
        <div class="campo">
          <label for="tipo-servicio" class="label-texto">Tipo de Servicio:</label>
          <select id="tipo-servicio" name="tipo-servicio" class="input-generico">
            <option value="servicio1">Servicio 1</option>
            <option value="servicio2">Servicio 2</option>
          </select>
        </div>
        <div class="campo">
          <label for="monto-servicio" class="label-texto">Monto de Servicio:</label>
          <input type="text" id="monto-servicio" name="monto-servicio" class="input-generico">
        </div>
        <div class="campo">
          <label for="descuento" class="label-texto">Descuento:</label>
          <input type="text" id="descuento" name="descuento" class="input-generico">
        </div>
        <campo>
          <label for="monto-efectivo" class="label-texto">Monto de Pago en Efectivo:</label>
          <input type="text" id="monto-efectivo" name="monto-efectivo" class="input-generico">
        </campo>
      
        <div style="display:flex; flex-direction: row; align-items: flex-start; width: 90%; margin: auto;">
          <div class="botonesInferiores">
            <button class="boton" type="button" onclick="agregarDatos()" class="input-generico">Agregar Datos</button>
            <button class="boton" type="button" onclick="limpiarDatos()" class="input-generico">Limpiar Datos</button>
          </div>
        </div>
      </form>
      <div id="ticket" style="background: whitesmoke; border: 1px solid black; border-radius: 12px;"></div>
      
    </div>
    <div class="botonesInferiores">
      <button class="botonSalir" type="button" onclick="volver()">Volver</button>
      <button class="botonSalir" type="button" onclick="generarPDF()">Generar PDF</button>
    </div>

  </div>

</body>
</html>