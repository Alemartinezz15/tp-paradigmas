<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "electrodb";


try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si hubo un error en la conexión
    if ($conn->connect_error) {
        // Si hay un error, lanzar una excepción
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si hubo un error en la conexión
    if ($conn->connect_error) {
        // Si hay un error, lanzar una excepción
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

} catch (Exception $e) {
    // Mostrar detalles del error
    die("Error de conexión: " . $e->getMessage());
}

?>
