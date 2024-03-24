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
    <link rel="stylesheet" href="pagoEmpleados.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Pago a empleado</title>
</head>

<body>
    <div class="contenedor">
        <div class="texto">
            <H1>Pago a empleado</H1>
          </div>


          <div class="contenedorInternoSuperior">
            <div>
                <form action="#">
                    <div class="campo">
                        <label for="nombre">No. Empleado:</label>
                        <select id="numEmpleado" name="numEmpleado">
                            <option value="entrada">1</option>
                            <option value="salida">2</option>
                        </select>
                    </div>
                    <form action="#">
                        <div class="campo">
                            <label for="fecha">Fecha de pago:</label>
                            <input type="date" id="fecha">
                          </div>
                        <div class="campo">
                          <label for="nombre">Nombre del empleado:</label>
                          <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="campo">
                          <label for="nombre">Cantidad de pago:</label>
                          <input type="text" id="nombre" name="nombre" required>
                        </div>
                      <div class="campo">
                          <label for="nombre">Concepto de pago:</label>
                          <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="campo">
                          <label for="nombre">Forma de pago:</label>
                          <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="campo">
                          <label for="nombre">Incremento de pago:</label>
                          <input type="text" id="nombre" name="nombre" required>
                        </div>
                      <div class="campo">
                          <label for="nombre">Monto total:</label>
                          <input type="text" id="nombre" name="nombre" required>
                        </div>
                      </form>
                </form>
            </div>
              
            <div class="botonesDOS">
                <button class="boton">Guardar como:</button>
                <button class="boton">Limpiar espacios</button>
            </div>        
          </div>

        <div class="botonesInferiores">
        <a href="../menusPrincipales/menu_gerente.php"><button class="botonSalir">Regresar</button></a>
        </div>

      </div>
</body>
</html>
