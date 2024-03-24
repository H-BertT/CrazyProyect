<?php
// Incluir el archivo de conexión
include 'conexion.php';

function obtener_puesto_empleado($nombre_usuario, $contraseña) {
    // Conectar a la base de datos
    $conexion = conectar_base_datos();

    // Consultar la base de datos para encontrar una coincidencia de usuario y contraseña y obtener el puesto del empleado
    $sql = "SELECT e.Puesto
            FROM usuarios u
            INNER JOIN asignacion_usuario_empleado a ON u.id_usuario = a.id_usuario
            INNER JOIN empleados e ON a.id_empleado = e.id_empleado
            WHERE u.nombre_usuario = ? AND u.contraseña = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $nombre_usuario, $contraseña);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Usuario y contraseña coinciden, obtener el puesto del empleado
        $fila = $resultado->fetch_assoc();
        $puesto_empleado = $fila['Puesto'];
        return $puesto_empleado;
    } else {
        // Usuario o contraseña incorrectos
        return null;
    }

    // Cerrar la conexión
    $conexion->close();
}
?>
