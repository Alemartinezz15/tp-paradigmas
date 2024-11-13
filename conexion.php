<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "electrodb";


try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new Exception("Conexión fallida: " . $conn->connect_error);
    }

} catch (Exception $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>
