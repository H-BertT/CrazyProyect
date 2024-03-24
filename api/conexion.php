<?php
// Función para establecer la conexión a la base de datos
function conectar_base_datos() {
    // Conexión a la base de datos (suponiendo que ya tienes una conexión establecida)
    $conexion = new mysqli("127.0.0.1:3306", "root", "Qwerty123", "centro_nutricion");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    return $conexion;
}
?>
