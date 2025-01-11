<?php
include 'conexion.php'; // Incluye el archivo de conexión

if (isset($_POST['folio'])) {
    $folio = $conn->real_escape_string($_POST['folio']); // Escapa caracteres peligrosos

    // Consulta la base de datos
    $sql = "SELECT * FROM permisos_vehiculares WHERE Folio = '$folio'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // Si se encuentra el registro
        $fila = $resultado->fetch_assoc();
        echo "<h2>Información del Permiso:</h2>";
        echo "<ul>";
        echo "<li><strong>Folio:</strong> " . $fila['Folio'] . "</li>";
        echo "<li><strong>Marca:</strong> " . $fila['Marca'] . "</li>";
        echo "<li><strong>Linea:</strong> " . $fila['Linea'] . "</li>";
        echo "<li><strong>Modelo:</strong> " . $fila['Modelo'] . "</li>";
        echo "<li><strong>Color:</strong> " . $fila['Color'] . "</li>";
        echo "<li><strong>Numero Motor:</strong> " . $fila['NumeroMotor'] . "</li>";
        echo "<li><strong>Numero Serie:</strong> " . $fila['NumeroSerie'] . "</li>";
        echo "<li><strong>Fecha de Vencimiento:</strong> " . $fila['FechaVencimiento'] . "</li>";
        echo "</ul>";
    } else {
        echo "<p>No se encontró ningún permiso con el folio ingresado.</p>";
    }
} else {
    echo "<p>Debe ingresar un folio.</p>";
}

$conn->close(); // Cierra la conexión
?>
