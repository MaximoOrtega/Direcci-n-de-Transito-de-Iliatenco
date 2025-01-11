<?php
// Datos de conexión proporcionados por Render
$host = 'dpg-cu13k75svqrc73emlmmg-a'; // Por ejemplo: 'dpg-xxxxxx.render.com'
$port = '5432'; // Puerto por defecto para PostgreSQL
$dbname = 'transito_db'; // Por ejemplo: 'transito_db'
$user = 'transito_db_user'; // Usuario proporcionado por Render
$password = 'dU6PCItqq3X3u67SWb25eyfDfIMWEQO2'; // Contraseña proporcionada por Render

// Cadena de conexión
$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";

// Establecer la conexión
$dbconn = pg_connect($conn_string);

// Verificar la conexión
if (!$dbconn) {
    die("Error de conexión: " . pg_last_error());
} else {
    echo "Conexión exitosa";
}

// Cerrar la conexión cuando ya no se necesite
// pg_close($dbconn);
?>
