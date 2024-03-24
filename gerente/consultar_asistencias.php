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
    <link rel="stylesheet" href="marcarAsistencia.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Consulta de asistencia</title>
</head>

<body>
    <div class="contenedor">
        <div class="texto">
            <H1>Consulta de asistencia</H1>
          </div>


          <div class="contenedorInternoSuperior">
            <div>
                <form action="#">
                    <div class="campo">
                        <label for="nombre">No. Empleado:</label>
                        <select id="numEmpleado" name="numEmpleado">
                            <option value="entrada">1</option>
                            <option value="salida">2</option>
                            <option value="salida">3</option>
                            <option value="salida">4</option>
                            <option value="salida">5</option>
                        </select>
                    </div>
                </form>
            </div>
              
            <div class="botones">
                <button class="boton">Buscar asistencias</button>
            </div>        
          </div>

        <div class="contenedorTabla">
            <table>
              <thead>
                <tr>
                  <th>No. de registro</th>
                  <th>Empleado</th>
                  <th>Puesto</th>
                  <th>Entrada/Salida</th>
                  <th>Hora</th>
                  <th>Fecha</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí puedes agregar filas con los datos de los empleados -->
                <tr>
                  <td>1</td>
                  <td>Hilber</td>
                  <td>Gerente</td>
                  <td>Entrada</td>
                  <td>09:15</td>
                  <td>2024-03-17</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Hilber</td>
                  <td>Gerente</td>
                  <td>Salida</td>
                  <td>18:00</td>
                  <td>2024-03-17</td>
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
           <button class="botonSalir">Regresar</button>
           <button class="botonSalir">Salir</button>
        </div>

      </div>
</body>
</html>
