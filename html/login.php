<?php
session_start();
include('../conexion.php');  

// Procesar el formulario de login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login-email']) && isset($_POST['login-password'])) {
    $email = mysqli_real_escape_string($conn, $_POST['login-email']);
    $password = mysqli_real_escape_string($conn, $_POST['login-password']);

    // Consultar la base de datos
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['message'] = "Login exitoso!";
        $_SESSION['user_role'] = $user['rol'];  
        $_SESSION['user_name'] = $user['nombre'];  
        header('Location: ../index.php'); 
        exit();
    } else {
        // Guardar mensaje de error en la sesión si los datos no son válidos
        $_SESSION['message'] = "Email o contraseña incorrectos.";
    }
}

// Procesar el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register-email']) && isset($_POST['register-password'])) {
    $nombre = mysqli_real_escape_string($conn, $_POST['register-name']);
    $email = mysqli_real_escape_string($conn, $_POST['register-email']);
    $password = mysqli_real_escape_string($conn, $_POST['register-password']);
    $confirmPassword = mysqli_real_escape_string($conn, $_POST['register-confirm-password']);
    $rol = isset($_POST['register-role']) ? $_POST['register-role'] : 'usuario'; // Asignar rol por defecto

    if ($password !== $confirmPassword) {
        echo "Las contraseñas no coinciden.";
    } else {
        // Verificar si el correo ya existe
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "El correo electrónico ya está registrado.";
        } else {
            // Encriptar la contraseña
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            // Insertar el nuevo usuario en la base de datos
            $sql = "INSERT INTO usuarios (nombre, email, password, rol) VALUES ('$nombre', '$email', '$hashedPassword', '$rol')";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['message'] = "Usuario registrado exitosamente.";
                // Redirigir al login o a otra página
                header('Location: ../index.php');
                exit();
            } else {
                $_SESSION['message'] = "Error al registrar el usuario.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro - Lubricentro Martinez</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/auth.css">
</head>
<body>
    <header>
        <hr>
        <img src="../Imagenes/logo.png" alt="Logo de Lubricentro Martinez" width="800" height="160">
        <hr>
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="../html/listado_box.php">Catálogo</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="auth-container">
            <!-- Formulario de Login -->
            <section class="form-section login-section">
                <h2>Iniciar Sesión</h2>
                    <form action="login.php" method="post" class="login-form">
                    <div class="form-group">
                        <label for="login-email">E-mail:</label>
                        <input type="email" id="login-email" name="login-email" required>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Contraseña:</label>
                        <input type="password" id="login-password" name="login-password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Iniciar Sesión">
                    </div>
                </form>
            </section>

            <!-- Formulario de Registro -->
            <section class="form-section register-section">
                <h2>Registrarse</h2>
                <form action="login.php" method="post" class="register-form">
                    <div class="form-group">
                        <label for="register-name">Nombre Completo:</label>
                        <input type="text" id="register-name" name="register-name" required>
                    </div>
                    <div class="form-group">
                        <label for="register-email">E-mail:</label>
                        <input type="email" id="register-email" name="register-email" required>
                    </div>
                    <div class="form-group">
                        <label for="register-password">Contraseña:</label>
                        <input type="password" id="register-password" name="register-password" required>
                    </div>
                    <div class="form-group">
                        <label for="register-confirm-password">Confirmar Contraseña:</label>
                        <input type="password" id="register-confirm-password" name="register-confirm-password" required>
                    </div>
                    <!-- Opcional: Campo para elegir el rol -->
                    <div class="form-group">
                        <label for="register-role">Rol:</label>
                        <select id="register-role" name="register-role">
                            <option value="usuario">Usuario</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrarse">
                    </div>
                </form>
            </section>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Lubricentro Martinez. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
