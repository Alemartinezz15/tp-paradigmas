<?php
include '../conexion.php';

// Consulta a la tabla de auditoría
$sql = "SELECT * FROM productos_auditoria ORDER BY fecha DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auditoría de Productos - Lubricentro Martinez</title>
    <link rel="stylesheet" href="../css/listado_tabla.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/productos_auditoria.css">
</head>
<body>
    <header>
        <hr>
        <h1>Auditoría de Productos</h1>
        <hr>
        <nav>
            <ul>
                <li><a href="../Index.php">Inicio</a></li>
                <li><a href="admin.php">Panel Administrador</a></li>
                
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Historial de Cambios en Productos</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID Auditoría</th>
                        <th>ID Producto</th>
                        <th>Acción</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Disponibilidad</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Mostrar los registros de auditoría
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['producto_id']}</td>
                                <td>{$row['accion']}</td>
                                <td>{$row['nombre']}</td>
                                <td>{$row['categoria']}</td>
                                <td>$" . number_format($row['precio'], 2) . "</td>
                                <td>{$row['disponibilidad']}</td>
                                <td>{$row['fecha']}</td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='8'>No hay registros de auditoría disponibles</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Lubricentro Martinez. Todos los derechos reservados.</p>
    </footer>
</body>
</html>