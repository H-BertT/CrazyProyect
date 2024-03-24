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
    <link rel="stylesheet" href="planesAsesor.css">
    <link rel="stylesheet" href="../fondo.css">
    <title>Planes nutriologo</title>
</head>

<body>
    <div class="contenedorG">
        <div class="texto">
            <H1>Planes de nutriologo</H1>
          </div>


          <div class="contenedorInternoSuperior">
            <div>
                <form action="#">
                  <div class="campo">
                    <label for="nombre">No. Cliente:</label>
                    <input type="text" id="nombre" name="nombre" required>
                  </div>
                    <div class="campo">
                        <label for="nombre">Datos antropometricos:</label>
                        <select id="datosAntropometricos" name="datosAntropometricos">
                            <option value="entrada">Faltante</option>
                            <option value="salida">Agregado</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label for="nombre">Historial Clinico:</label>
                        <select id="historialClinico" name="historialClinico">
                            <option value="entrada">Faltante</option>
                            <option value="salida">Agregado</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label for="nombre">Plan nutricional:</label>
                        <select id="planActivo" name="planActivo">
                            <option value="entrada">Faltante</option>
                            <option value="salida">Agregado</option>
                        </select>
                    </div>
                    <div class="campo">
                        <label for="nombre">Hoja de recomendaciones:</label>
                        <select id="hojaDeRecomen" name="hojaDeRecomen">
                            <option value="entrada">Faltante</option>
                            <option value="salida">Agregado</option>
                        </select>
                    </div>
                </form>
            </div>
              
            <div class="botones">
              <button class="boton">Agregar planes</button>
              <button class="boton">Modificar planes</button>
              <button class="boton">Eliminar planes</button>
            </div>        
          </div>

        <div class="contenedorTabla">
            <table>
              <thead>
                <tr>
                  <th>No. Cliente</th>
                  <th>Nombre</th>
                  <th>Datos antropométricos</th>
                  <th>Historial clinico</th>
                  <th>Plan alimenticio</th>
                  <th>Plan activo</th>
                  <th>Hoja de recomendaciones</th>

                </tr>
              </thead>
              <tbody>
                <!-- Aquí puedes agregar filas con los datos de los empleados -->
                <tr>
                  <td>1</td>
                  <td>Alejandro</td>
                  <td>Agregado</td>
                  <td>Agregado</td>
                  <td>Agregado</td>
                  <td>Agregado</td>
                  <td>Agregado</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Fernanda</td>
                  <td>Faltante</td>
                  <td>Faltante</td>
                  <td>Faltante</td>
                  <td>Faltante</td>
                  <td>Faltante</td>
                </tr>
                <tr>
                    <td></td>
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
