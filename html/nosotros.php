<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nosotros - Lubricentro y Electromecánica Martinez</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/nosotros.css">

    <!-- Agregar estilos y jQuery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</head>

<body>
    <!-- Encabezado con Logo -->
    <header>
        <!-- Logo -->
        <hr>
        <img src="../Imagenes/logo.png" alt="Logo de Lubricentro Martinez" width="800" height="160">
        <hr>
        <!-- Menú de Navegación -->
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../html/contacto.php">Contacto</a></li>
                <li><a href="../html/listado_box.php">Catálogo</a></li>
            </ul>
        </nav>
    </header>

    <!-- Contenido de la Página -->
    <!-- Contenido de la Página -->
        <main>
                    <!-- Carrusel de Trabajos Realizados -->
                <h2>Galería de Trabajos Realizados</h2>
                 <div class="carousel">
             <div class="carousel-inner">
            <figure>
                <img src="../Imagenes/imagen1.jpg" alt="Cambio de aceite" width="100%" height="auto">
                <figcaption>Cambio de aceite en vehículo</figcaption>
            </figure>
            <figure>
                <img src="../Imagenes/imagen3.jpg" alt="Diagnóstico de aire acondicionado" width="100%" height="auto">
                <figcaption>Diagnóstico de sistema de aire acondicionado</figcaption>
            </figure>
            <figure>
                <img src="../Imagenes/imagen4.jpg" alt="Reemplazo de Condensador" width="100%" height="auto">
                <figcaption>Reemplazo de condensador de aire acondicionado</figcaption>
            </figure>
            </div>
                </div>


        <h3>Nosotros</h3>
        <p>En Lubricentro y Electromecánica Martinez, nos especializamos en ofrecer productos y servicios de alta
            calidad para el mantenimiento de vehículos. Contamos con un equipo de profesionales capacitados y una amplia
            gama de productos como lubricantes, filtros, y accesorios para todo tipo de automóviles. Nuestro objetivo es
            brindar un servicio rápido, eficiente y confiable, asegurando la satisfacción de nuestros clientes.</p>

        <p>Con más de 10 años de experiencia en el mercado, nos hemos consolidado como una opción de confianza para
            todos aquellos que buscan mantener sus vehículos en las mejores condiciones. Visítanos y descubre por qué
            somos la elección preferida de nuestros clientes.</p>

        <!-- Servicios Ofrecidos -->
        <h3>Servicios Ofrecidos</h3>
        <ul>
            <li>Cambio de aceite y filtros</li>
            <li>Revisión y mantenimiento de frenos</li>
            <li>Diagnóstico y reparación de aire acondicionado</li>
            <li>Venta de lubricantes, repuestos y servicios de electromecánica</li>
        </ul>
    </main>

    <!-- Enlace de regreso a la página principal -->
    <footer>
        <p><a href="../index.php">Volver al Inicio</a></p>
        <p>&copy; 2024 Lubricentro Martinez. Todos los derechos reservados.</p>
    </footer>

    <!-- JavaScript para el Carrusel -->
    <script>
        $(document).ready(function() {
            $('.carousel-inner').slick({
                dots: true,          
                infinite: true,      
                speed: 500,          
                slidesToShow: 1,     
                autoplay: true,      
                autoplaySpeed: 3000, 
                arrows: true         
            });
        });
    </script>
</body>

</html>
