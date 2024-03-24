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
    <link rel="stylesheet" href="agregarServicio.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Agregar servicio</title>
</head>

<body>
    <div class="contenedorG">
        <div class="texto">
            <H1>Agregar servicio</H1>
          </div>


          <div class="contenedorInternoSuperior">
            <div>
                <form action="#">
                    <div class="campo">
                        <label for="nombre">Nombre del servicio:</label>
                        <input type="text" id="nombre" name="nombre" required>
                      </div>
                      <div class="campo">
                        <label for="nombre">Precio del servicio:</label>
                        <input type="text" id="nombre" name="nombre" required>
                      </div>
                </form>
            </div>
              
            <div class="botones">
                <button class="boton">Agregar servicio</button>
                <button class="boton">Modificar servicio</button>
                <button class="boton">Eliminar servicio</button>
            </div>        
          </div>

        <div class="contenedorTabla">
            <table>
              <thead>
                <tr>
                  <th>No. de servicio</th>
                  <th>Nombre del servicio</th>
                  <th>Precio del servicio</th>

                </tr>
              </thead>
              <tbody>
                <!-- Aquí puedes agregar filas con los datos de los empleados -->
                <tr>
                  <td>1</td>
                  <td>Coca con hielos</td>
                  <td>100$</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Leche con pan</td>
                  <td>100$</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                <!-- Agrega más filas según necesites -->
              </tbody>
            </table>
          </div>

        <div class="botonesInferiores">
        <a href="../menusCRUDE/menu_crude_servicios.php"><button class="botonSalir">Regresar</button></a>
          <a href="../menusPrincipales/menu_recepcion.php"><button class="botonSalir">Salir</button></a>
        </div>

      </div>
</body>
</html>
