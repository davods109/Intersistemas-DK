<?php
// Configuración de la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "intersistemas";

// Inicializar variables
$error = "";

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eliminar_todo"])) {
    // Crear la conexión
    $mysqli = mysqli_connect($servidor, $usuario, $clave, $bd);

    // Verificar la conexión
    if (!$mysqli) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Consulta SQL para eliminar todos los registros
    $consulta_eliminar = "TRUNCATE TABLE registros";

    // Ejecutar la consulta de eliminación
    $resultado_eliminar = $mysqli->query($consulta_eliminar);

    // Verificar si la consulta se realizó correctamente
    if ($resultado_eliminar) {
        echo "Todos los registros han sido eliminados correctamente.";
    } else {
        $error = "Error al eliminar todos los registros: " . $mysqli->error;
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Todos los Registros</title>
</head>
<body>

<!-- Botón para eliminar todos los registros -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" name="eliminar_todo" value="Eliminar Todos los Registros">
</form>

<!-- Mostrar errores si hay alguno -->
<?php
if ($error) {
    echo $error;
}
?>

</body>
</html>