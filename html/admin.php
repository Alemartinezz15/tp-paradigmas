<?php
session_start();
include '../conexion.php';

// Verificar si el usuario ha iniciado sesión y si tiene el rol de admin
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] != 'admin') {
    header("Location: login.php");
    exit();
}


if (isset($_GET['editar'])) {
    $id = $_GET['editar'];
    $stmt = $conn->prepare("SELECT * FROM productos WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $producto = $resultado->fetch_assoc();
    $stmt->close();
}

// Actualizar producto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['actualizar'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $disponibilidad = $_POST['disponibilidad'];

    $stmt = $conn->prepare("UPDATE productos SET nombre = ?, categoria = ?, precio = ?, disponibilidad = ? WHERE id = ?");
    $stmt->bind_param("ssdsi", $nombre, $categoria, $precio, $disponibilidad, $id);

    if ($stmt->execute()) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Error al actualizar el producto: " . $conn->error;
    }
    $stmt->close();
}

// Creación de producto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['crear'])) {
    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $precio = $_POST['precio'];
    $disponibilidad = $_POST['disponibilidad'];

    $stmt = $conn->prepare("INSERT INTO productos (nombre, categoria, precio, disponibilidad) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $nombre, $categoria, $precio, $disponibilidad);

    if ($stmt->execute()) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
    $stmt->close();
}

// Eliminación de producto
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];
    $stmt = $conn->prepare("DELETE FROM productos WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Error al eliminar el producto: " . $conn->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Productos - Lubricentro Martinez</title>
    <link rel="stylesheet" href="../css/listado_tabla.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <header>
        <hr>
        <img src="../Imagenes/logo.png" alt="Logo de Lubricentro Martinez" width="800" height="160">
        <hr>
        <nav>
            <ul>
                <li><a href="../Index.php">Inicio</a></li>
                <li><a href="listado_box.php">Catálogo</a></li>
                <li><a href="productos_auditoria.php">Registro de Auditoria</a></li>
                <li><a href="login.php">Ingreso</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Formulario para crear o editar producto -->
        <section>
            <h2><?php echo isset($producto) ? 'Editar Producto' : 'Crear Producto'; ?></h2>
            <form id="productoForm" method="post">
                <input type="hidden" name="id" value="<?php echo isset($producto) ? $producto['id'] : ''; ?>">
                
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?php echo isset($producto) ? $producto['nombre'] : ''; ?>" required><br>

                <label for="categoria">Categoría:</label>
                <input type="text" name="categoria" value="<?php echo isset($producto) ? $producto['categoria'] : ''; ?>" required><br>

                <label for="precio">Precio:</label>
                <input type="number" step="0.01" name="precio" value="<?php echo isset($producto) ? $producto['precio'] : ''; ?>" required><br>

                <label for="disponibilidad">Disponibilidad:</label>
                <select name="disponibilidad">
                    <option value="En Stock" <?php if (isset($producto) && $producto['disponibilidad'] == 'En Stock') echo 'selected'; ?>>En Stock</option>
                    <option value="Agotado" <?php if (isset($producto) && $producto['disponibilidad'] == 'Agotado') echo 'selected'; ?>>Agotado</option>
                </select><br>

                <button type="submit" name="<?php echo isset($producto) ? 'actualizar' : 'crear'; ?>">
                    <?php echo isset($producto) ? 'Actualizar Producto' : 'Agregar Producto'; ?>
                </button>
            </form>
        </section>

        <!-- Tabla para mostrar productos -->
        <section>
            <h2>Listado de Productos Disponibles</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Categoría</th>
                        <th>Precio</th>
                        <th>Disponibilidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="productosTabla">
                    <?php
                    // Obtener y mostrar productos al cargar la página
                    $sql = "SELECT * FROM productos";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["nombre"] . "</td>
                                <td>" . $row["categoria"] . "</td>
                                <td>$" . $row["precio"] . "</td>
                                <td>" . $row["disponibilidad"] . "</td>
                                <td>
                                    <a href='?editar=" . $row["id"] . "'>Editar</a> | 
                                    <a href='?eliminar=" . $row["id"] . "' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este producto?');\">Eliminar</a>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No hay productos disponibles</td></tr>";
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