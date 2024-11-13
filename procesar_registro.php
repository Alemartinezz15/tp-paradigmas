<?php

include('conexion.php');

// Verificar si los datos fueron enviados por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $nombre = mysqli_real_escape_string($conn, $_POST['register-name']);
    $email = mysqli_real_escape_string($conn, $_POST['register-email']);
    $password = mysqli_real_escape_string($conn, $_POST['register-password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['register-confirm-password']);

    // Validar que las contraseñas coinciden
    if ($password !== $confirm_password) {
        echo "Las contraseñas no coinciden.";
        exit;
    }

    // Encriptar la contraseña antes de guardarla
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Verificar si el email ya existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Este correo electrónico ya está registrado.";
        exit;
    }

    // Insertar los datos del usuario en la tabla usuarios
    $sql_insert = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql_insert)) {
        echo "Usuario registrado exitosamente.";
        header("Location: login.php"); // Redirigir a la página de login
        exit;
    } else {
        echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
    }
}
?>
