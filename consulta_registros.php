<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Registros</title>
</head>
<body>

<!-- Formulario para realizar la consulta y limpiar resultados -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input class="btn btn-primary py-3 px-5" type="submit" name="consultar" value="Consultar Registros">
    <input class="btn btn-primary py-3 px-5" type="submit" name="limpiar" value="Limpiar">
</form>

<?php
// Mostrar los resultados o el mensaje de error
if ($resultado) {
    // Recorrer los resultados
    echo "<ul>";
    while ($registro = $resultado->fetch_assoc()) {
        echo "<li>#" . $registro["id"] . ", Número: " . $registro["numero"] . ", Fecha: " . $registro["fecha"] . ", Hora: " . $registro["hora"] . "</li>";
    }
    echo "</ul>";
} elseif ($error) {
    echo $error;
}
?>

</body>
</html>