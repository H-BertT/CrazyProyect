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
    <link rel="stylesheet" href="gestionDeEmpleados.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Administrar Empleados</title>
</head>

<body>
    <div class="contenedorG">
        <div class="texto">
            <H1>Agregar un nuevo empleado</H1>
          </div>
          <div class="contenedorInternoSuperior">
            <div>
                <form action="#">
                    <div class="campo">
                      <label for="nombre">Nombre:</label>
                      <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div class="campo">
                      <label for="apellido-paterno">Apellido Paterno:</label>
                      <input type="text" id="apellido-paterno" name="apellido-paterno" required>
                    </div>
                    <div class="campo">
                      <label for="apellido-materno">Apellido Materno:</label>
                      <input type="text" id="apellido-materno" name="apellido-materno" required>
                    </div>
                    <div class="campo">
                      <label for="puesto-empleado">Puesto de empleado:</label>
                      <input type="text" id="puesto-empleado" name="puesto-empleado" required>
                    </div>
                  </form>
            </div>
              
            <div class="botones">
                <button class="boton">Agregar nuevo empleado</button>
                <button class="boton">Modifica un empleado</button>
                <button class="boton">Eliminar a un empleado</button>
            </div>        
          </div>

        <div class="contenedorTabla">
            <table>
              <thead>
                <tr>
                  <th>No. de empleado</th>
                  <th>Nombre(s)</th>
                  <th>Apellido P</th>
                  <th>Apellido M</th>
                  <th>Puesto</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí puedes agregar filas con los datos de los empleados -->
                <tr>
                  <td>1</td>
                  <td>Hilber</td>
                  <td>Reyes</td>
                  <td>Tecolapa</td>
                  <td>Gerente</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Juan</td>
                  <td>Cruz</td>
                  <td>Cardenas</td>
                  <td>Maestro del s</td>
                </tr>
                <tr>
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
                  </tr>
                <tr>
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
            <a href="../menusCRUDE/menu_crude_empleados.php"><button class="botonSalir">Regresar</button></a>
            <a href="../menusPrincipales/menu_gerente.php"><button class="botonSalir">Salir</button></a>
        </div>

      </div>
</body>
</html>
