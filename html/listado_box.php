<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos en Caja - Lubricentro Martinez</title>

    <!-- Vinculación del CSS -->
    <link rel="stylesheet" href="../css/styles.css">

    <!-- Vinculación de Font Awesome para el ícono de WhatsApp -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- Encabezado -->
    <header>
        <hr>
        <img src="../Imagenes/logo.png" alt="Logo de Lubricentro Martinez" width="800" height="160"> <!-- Logo -->
        <hr>

        <!-- Menú de Navegación -->
        <nav>
            <ul>
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../html/nosotros.php">Nosotros</a></li>
                <li><a href="../html/contacto.php">Contacto</a></li>
                <li><a href="../html/login.php">Ingreso</a></li>
            </ul>
        </nav>
    </header>

    <!-- Cartel de compras solo en el local físico -->
    <div class="purchase-warning">
        <p><strong>¡Atención! Las compras solo se pueden realizar en nuestro local físico. ¡Visítanos para adquirir tus productos!</strong></p>
    </div>

    <!-- Contenido Principal -->    
    <main>
        <section class="product-boxes">
            <div class="product-box">
                <h3>Aceite 10W-40</h3>
                <p>Precio: $34000</p>
                <p>Disponibilidad: En Stock</p>
                <img src="../Imagenes/Aceite.png" alt="Imagen de Aceite 10w40" width="250" class="lightbox-trigger">
                <!-- Botón de contacto -->
                <a href="https://wa.me/3764672650?text=Hola, me interesa el Aceite 10W-40" target="_blank" class="contact-btn">
                    <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                </a>
            </div>
            <div class="product-box">
                <h3>Filtro de Aceite</h3>
                <p>Precio: $1500</p>
                <p>Disponibilidad: En Stock</p>
                <img src="../Imagenes/FiltroAceite.png" alt="Imagen de Filtro de aceite" width="250"
                    class="lightbox-trigger">
                <!-- Botón de contacto -->
                <a href="https://wa.me/3764672650?text=Hola, me interesa el Filtro de Aceite" target="_blank" class="contact-btn">
                    <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                </a>
            </div>
            <div class="product-box">
                <h3>Filtro de Aire</h3>
                <p>Precio: $12000</p>
                <p>Disponibilidad: En Stock</p>
                <img src="../Imagenes/FiltroAire.png" alt="Imagen de Filtro de Aire" width="350"
                    class="lightbox-trigger">
                <!-- Botón de contacto -->
                <a href="https://wa.me/3764672650?text=Hola, me interesa el Filtro de Aire" target="_blank" class="contact-btn">
                    <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                </a>
            </div>

            <div class="product-box">
                <h3>Filtro de Aire</h3>
                <p>Precio: $17400</p>
                <p>Disponibilidad: En Stock</p>
                <img src="../Imagenes/FiltroAireAR.png" alt="Imagen de Filtro de Aire" width="350"
                    class="lightbox-trigger">
                <!-- Botón de contacto -->
                <a href="https://wa.me/3764672650?text=Hola, me interesa el Filtro de Aire" target="_blank" class="contact-btn">
                    <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                </a>
            </div>

            <div class="product-box">
                <h3>Filtro FRAM PH3614</h3>
                <p>Precio: $8500</p>
                <p>Disponibilidad: En Stock</p>
                <img src="../Imagenes/PH3614.png" alt="Imagen de Filtro FRAM PH3614" width="350" class="lightbox-trigger">
                <!-- Botón de contacto -->
                <a href="https://wa.me/3764672650?text=Hola, me interesa el Filtro FRAM PH3614" target="_blank" class="contact-btn">
                    <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                </a>
            </div>

            <div class="product-box">
                <h3>Filtro FRAM PH2</h3>
                <p>Precio: $9200</p>
                <p>Disponibilidad: En Stock</p>
                <img src="../Imagenes/PH2.png" alt="Imagen de Filtro FRAM PH2" width="350" class="lightbox-trigger">
                <!-- Botón de contacto -->
                <a href="https://wa.me/3764672650?text=Hola, me interesa el Filtro FRAM PH2" target="_blank" class="contact-btn">
                    <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                </a>
            </div>

            <div class="product-box">
                <h3>Filtro FRAM PH6607</h3>
                <p>Precio: $8700</p>
                <p>Disponibilidad: En Stock</p>
                <img src="../Imagenes/PH6607.png" alt="Imagen de Filtro FRAM PH6607" width="350" class="lightbox-trigger">
                <!-- Botón de contacto -->
                <a href="https://wa.me/3764672650?text=Hola, me interesa el Filtro FRAM PH6607" target="_blank" class="contact-btn">
                    <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                </a>
            </div>
            
            <div class="product-box">
                <h3>Filtro FRAM PH3387A</h3>
                <p>Precio: $8900</p>
                <p>Disponibilidad: En Stock</p>
                <img src="../Imagenes/PH3387A.png" alt="Imagen de Filtro FRAM PH3387A" width="350" class="lightbox-trigger">
                <!-- Botón de contacto -->
                <a href="https://wa.me/3764672650?text=Hola, me interesa el Filtro FRAM PH3387A" target="_blank" class="contact-btn">
                    <i class="fab fa-whatsapp"></i> Contactar por WhatsApp
                </a>
            </div>
            
        </section>
    </main>

    <!-- Lightbox para las imágenes -->
    <div class="lightbox" id="lightbox">
        <img id="lightbox-img" src="" alt="">
    </div>

    <footer>
        <p>&copy; 2024 Lubricentro Martinez. Todos los derechos reservados.</p>
    </footer>

    <script>
        // Función para abrir el lightbox
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const triggers = document.querySelectorAll('.lightbox-trigger');

        triggers.forEach(trigger => {
            trigger.addEventListener('click', function () {
                lightboxImg.src = this.src; // Establecer la fuente de la imagen en el lightbox
                lightbox.style.display = 'flex'; // Mostrar el lightbox
            });
        });

        // Cerrar el lightbox al hacer clic en él
        lightbox.addEventListener('click', function () {
            lightbox.style.display = 'none'; // Ocultar el lightbox
        });
    </script>

</body>

</html>
