<?php
// Configuración de la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "intersistemas";

// Inicializar variables
$resultado = null;
$error = "";

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Crear la conexión
    $mysqli = mysqli_connect($servidor, $usuario, $clave, $bd);

    // Verificar la conexión
    if (!$mysqli) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Realizar consulta al presionar el botón "Consultar"
    if (isset($_POST["consultar"])) {
        $consulta = "SELECT id, numero, fecha, hora
                     FROM registros
                     ORDER BY fecha DESC, hora DESC
                     LIMIT 20";

        // Ejecutar la consulta
        $resultado = $mysqli->query($consulta);

        // Verificar si la consulta se realizó correctamente
        if (!$resultado) {
            $error = "Error al realizar la consulta: " . $mysqli->error;
        }

    }

    // Limpiar resultados al presionar el botón "Limpiar"
    if (isset($_POST["limpiar"])) {
        $resultado = null;
        $error = "";
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
}
?>
