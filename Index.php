<?php 
session_start(); 

if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']); 
}

if (isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] == 'admin') {
        echo "<a href='html/admin.php'>Ir al panel de administrador</a>";
    }
    echo "<p>Bienvenido, " . $_SESSION['user_name'] . "!</p>";
}

include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La mejor solución para tu vehículo - Lubricentro y Electromecánica Martinez</title>
    <link rel="stylesheet" href="css/styles.css"> 
</head>

<body>
    <header> <!-- Encabezado -->

        <hr>
        <img src="Imagenes/logo.png" alt="Logo de Lubricentro Martinez" width="800" height="160"> <!-- Logo -->

        <hr>

        <!-- Menú de Navegación -->
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="html/nosotros.php">Nosotros</a></li>
                <li><a href="html/contacto.php">Contacto</a></li>
                <li><a href="html/listado_box.php">Catálogo</a></li>
                <li><a href="html/login.php">Ingreso </a></li>
                <li><a href="php/logout.php">Cerrar sesión</a></li>
              

            </ul>
        </nav>

    </header>
    <main>
        <!-- Secciones del sitio -->

        <section class="hero">
            <div class="hero-text">
                <h2>UN FILTRO
                    <br>
                    PARA CADA NECESIDAD
                </h2>
                <a href="html/listado_box.php">
                    <button>CATÁLOGO ONLINE</button>
                </a>
            </div>
        </section>
    </main>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 Alejandro Martinez. Todos los derechos reservados.</p>

    </footer>
</body>

</html>