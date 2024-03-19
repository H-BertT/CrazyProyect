<?php
// Conexión a la base de datos (suponiendo que ya tienes una conexión establecida)
$conexion = new mysqli("127.0.0.1:3306", "root", "Qwerty123", "centronutricion");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

// Verificar si el método es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se está intentando iniciar sesión
    if (isset($_POST["iniciar_sesion"])) {
        // Obtener los datos del formulario
        $nombre_usuario = $_POST["nombre_usuario"];
        $contraseña = $_POST["contraseña"];

        // Consultar la base de datos para encontrar una coincidencia de usuario y contraseña
        $sql = "SELECT * FROM Usuarios WHERE Nombre_Usuario = ? AND Contraseña = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("ss", $nombre_usuario, $contraseña);
        $stmt->execute();
        $resultado = $stmt->get_result();


        if ($resultado->num_rows > 0) {
            // Usuario y contraseña coinciden
            echo "Inicio de sesión exitoso.";
            header("Location: 1gestionEmpleados/gerenteMenu.html");
            exit(); 
        } else {
            // Usuario o contraseña incorrectos
            echo "Nombre de usuario o contraseña incorrectos.";
        }
    }
}

// Cerrar la conexión
$conexion->close();
?>

