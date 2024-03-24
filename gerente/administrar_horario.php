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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="agregarHorario.css">
    <link rel="stylesheet" href="../fondo.css">
    <link rel="stylesheet" href="../src/calendarioTHINGS/calendario.css">
    <script src="../src/calendarioTHINGS/calendario.js" defer></script>
    <title>Asignar horario</title>
</head>

<body>
    <div class="contenedor">
        <div class="texto">
            <H1>Asignar horario</H1>
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
            <div>
                <form action="#">
                    <div class="campo">
                      <label for="hora">Hora de entrada:</label>
                      <input type="time" id="hora">
                    </div>
                    <div class="campo">
                      <label for="hora">Hora de salida:</label>
                      <input type="time" id="hora">
                    </div>
                </form>
            </div>
              
            <div class="botones">
                <button class="boton">Agregar horario</button>
                <button class="boton">Modificar horario</button>
                <button class="boton">Eliminar horario</button>
                <button class="boton">Consultar horario</button>
            </div>        
          </div>

          <div class="contenedorInternoMedio">
              <div class="calendarioContenedor">
                  <div class="wrapper">
                    <header>
                      <p class="current-date"></p>
                      <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                      </div>
                    </header>
                    <div class="calendar">
                      <ul class="weeks">
                        <li>Domingo</li>
                        <li>Lunes</li>
                        <li>Martes</li>
                        <li>Miercoles</li>
                        <li>Jueves</li>
                        <li>Viernes</li>
                        <li>Sabado</li>
                      </ul>
                      <ul class="days"></ul>
                    </div>
                  </div>
              </div>

              <div class="contenedorTabla">
                <table>
                  <thead>
                    <tr>
                      <th>No. Emp</th>
                      <th>Lunes</th>
                      <th>Martes</th>
                      <th>Miercoles</th>
                      <th>Jueves</th>
                      <th>Viernes</th>
                      <th>Sábado</th>
                      <th>Domingo</th>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <!-- Aquí puedes agregar filas con los datos de los empleados -->
                    <tr>
                      <td>1</td>
                      <td>09:15 - 18:00</td>
                      <td>09:15 - 18:00</td>
                      <td>09:15 - 18:00</td>
                      <td>09:15 - 18:00</td>
                      <td>09:15 - 18:00</td>
                      <td>09:15 - 18:00</td>
                      <td>09:15 - 18:00</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>18:00</td>
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
                        <td></td>
                      </tr>
                    <!-- Agrega más filas según necesites -->
                  </tbody>
                </table>
              </div>



          </div>



        <div class="botonesInferiores">
           <button class="botonSalir">Regresar</button>
           <button class="botonSalir">Salir</button>
        </div>
        

      </div>
</body>
</html>
