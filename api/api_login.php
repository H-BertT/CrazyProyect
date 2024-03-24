<?php
// Incluir el archivo de conexión
include 'api/conexion.php';
// Incluir el archivo de consultas
include 'consultas.php';

// Verificar si el método es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se está intentando iniciar sesión
    if (isset($_POST["iniciar_sesion"])) {
        // Obtener los datos del formulario
        $nombre_usuario = $_POST["nombre_usuario"];
        $contraseña = $_POST["contraseña"];

        // Obtener el puesto del empleado
        $puesto_empleado = obtener_puesto_empleado($nombre_usuario, $contraseña);

        if ($puesto_empleado !== null) {
        // Usuario y contraseña coinciden
            //echo "Inicio de sesión exitoso.";

            // Establecer una cookie con el nombre "usuario"
            setcookie("usuario", $puesto_empleado, time() + 3600, "/"); // Caduca en 1 hora

            // Redireccionar según el puesto del empleado
            switch ($puesto_empleado) {
                case "Gerente":
                header("Location: ../menusPrincipales/menu_gerente.php");
                exit();
                case "Nutriologo":
                header("Location: ../menusPrincipales/menu_nutriologo.php");
                exit();
                case "Asesor Dep":
                header("Location: ../menusPrincipales/menu_asesor_deportivo.php");
                exit();
                case "Recepcionista":
                header("Location: ../menusPrincipales/menu_recepcion.php");
                exit();
                default:
                echo "Puesto de empleado no reconocido.";
            }
        } else {
            // Usuario o contraseña incorrectos
            //echo "Nombre de usuario o contraseña incorrectos.";
        }

    }
}
?>
