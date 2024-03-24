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
    <link rel="stylesheet" href="cliente.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Alta de cliente</title>
</head>

<body>
    <div class="contenedorG">
        <div class="texto">
            <H1>Alta de cliente</H1>
          </div>

          <div class="contenedorInternoSuperior">
            <div>
                <form action="#">
                    <div class="campo">
                        <label for="nombre">Nombre del cliente:</label>
                        <input type="text" id="nombre" name="nombre" required>
                      </div>
                      <div class="campo">
                        <label for="nombre">Apellido paterno:</label>
                        <input type="text" id="nombre" name="nombre" required>
                      </div>
                    <div class="campo">
                        <label for="nombre">Apellido materno:</label>
                        <input type="text" id="nombre" name="nombre" required>
                      </div>
                      <div class="campo">
                        <label for="nombre">Edad:</label>
                        <input type="text" id="nombre" name="nombre" required>
                      </div>
                    <div class="campo">
                        <label for="nombre">Sexo:</label>
                        <input type="text" id="nombre" name="nombre" required>
                      </div>
                </form>
            </div>
              
            <div class="botones">
                <button class="boton">Agregar cliente</button>
                <button class="boton">Modificar cliente</button>
                <button class="boton">Eliminar cliente</button>
            </div>        
            <div>
                <form action="#">
                  <div class="campo">
                    <label for="nombre">No. de cliente:</label>
                    <input type="text" id="nombre" name="nombre" required>
                  </div>
                  <div class="campo">
                    <label for="nombre">Nombre del cliente:</label>
                    <input type="text" id="nombre" name="nombre" required>
                  </div>
                  <div class="campo">
                    <label for="nombre">Apellido paterno:</label>
                    <input type="text" id="nombre" name="nombre" required>
                  </div>
                <div class="campo">
                    <label for="nombre">Apellido materno:</label>
                    <input type="text" id="nombre" name="nombre" required>
                  </div>
                </form>
            </div>
              
            <div class="botones">
                <button class="boton">Buscar</button>
            </div>        
          </div>

        <div class="contenedorTabla">
            <table>
              <thead>
                <tr>
                  <th>No. de cliente</th>
                  <th>Nombre('s)</th>
                  <th>Apellido Pat</th>
                  <th>Apellido Mat</th>
                  <th>Edad</th>
                  <th>Sexo</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí puedes agregar filas con los datos de los empleados -->
                <tr>
                    <td>1</td>
                    <td>Alejandro</td>
                    <td>Gutierrez</td>
                    <td>Perez</td>
                    <td>22</td>
                    <td>Masculino</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Fernanda</td>
                    <td>Flores</td>
                    <td>Reyna</td>
                    <td>20</td>
                    <td>Femenino</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                <!-- Agrega más filas según necesites -->
              </tbody>
            </table>
          </div>

        <div class="botonesInferiores">
          <a href="../menusCRUDE/menu_crude_cliente.php"><button class="botonSalir">Regresar</button></a>
          <a href="../menusPrincipales/menu_recepcion.php"><button class="botonSalir">Salir</button></a>
        </div>

      </div>
</body>
</html>
