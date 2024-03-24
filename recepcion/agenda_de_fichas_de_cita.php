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
    <link rel="stylesheet" href="agendaDeFichasDeCita.css">
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
                        <label for="cliente">Nombre del cliente:</label>
                        <input type="text" id="cliente" name="cliente">
                    </div>
                    <div class="campo">
                        <label for="servicio">Tipo de servicio:</label>
                        <select name="servicio" id="servicio">
                            <option value="">Seleccione un servicio</option>
                        </select>
                    </div>
                </form>
            </div>     
            <div class="botones">
                <button class="boton" type="submit">Marcar fecha</button>
                <button class="boton" type="reset">Desmarcar fecha</button>
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
          </div>

        <div class="botonesInferiores">
          <a href="../menusPrincipales/menu_recepcion.php"><button class="botonSalir">Regresar</button></a>
        </div>
        

      </div>
</body>
</html>
