<?php
$host = "127.0.0.1"; // Dirección del servidor
$usuario = "root"; // Usuario de MySQL
$clave = ""; // Contraseña (déjala vacía si no configuraste una)
$base_datos = "transito_db"; // Nombre de tu base de datos
$puerto = 3307; // Puerto de MySQL

$conn = new mysqli($host, $usuario, $clave, $base_datos, $puerto);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
