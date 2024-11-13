<?php
session_start(); // Iniciar la sesión

// Eliminar todas las variables de sesión
session_unset();

// Destruir la sesión
session_destroy();

// Redirigir al usuario a la página de login o a la página principal
header("Location: ../html/login.php"); // o puedes redirigir a index.php si prefieres la página principal
exit(); // Asegurarte de que no se ejecute ningún código adicional después de la redirección
?>
