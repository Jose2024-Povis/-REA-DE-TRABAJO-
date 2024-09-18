<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trial Catering</title>
    <link rel="stylesheet" href="cliente.css">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="rest">Trial Catering</div>
        <nav>
            <ul>
                <li><a href="#inicio">INICIO</a></li>
                <li><a href="#decoraciones">DECORACIONES</a></li>
                <li><a href="#cartas">CARTAS</a></li>
                <li><a href="reservas.html">RESERVAS</a></li> <!-- Aquí cambia "reservas.html" por "#reservas" -->
                <li><a href="trabajador.html">ADMINISTRADOR</a></li>
                <li><a href="cerrar_sesion.php">CERRAR SESIÓN</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="inicio">
        <div class="seccion-fondo fondo-inicio">
            <div class="contenido">
                <div class="texto">
                    <h2>Bienvenido a Trial Catering</h2>
                    <p>Descubre nuestra oferta gastronómica única y disfruta de momentos inolvidables con nosotros.</p>
                    <a href="#cartas" class="boton-ver">VER CARTAS</a>
                </div>
                <div class="imagen">
                    <img src="img/inicio-imagen.jpg" alt="Imagen Inicio">
                </div>
            </div>
        </div>
    </section>

    <section id="decoraciones">
        <div class="seccion-fondo fondo-decoraciones">
            <div class="contenido">
                <h2>Decoraciones y Platos</h2>
                <div class="slider">
                    <div class="slide activo">
                        <img src="img/decoracion1.jpg" alt="Decoración 1">
                    </div>
                    <div class="slide">
                        <img src="img/decoracion2.jpg" alt="Decoración 2">
                    </div>
                    <div class="slide">
                        <img src="img/decoracion3.jpg" alt="Decoración 3">
                    </div>
                    <div class="slide">
                        <img src="img/decoracion4.jpg" alt="Decoración 4">
                    </div>
                    <div class="slide">
                        <img src="img/decoracion5.jpg" alt="Decoración 5">
                    </div>
                    <div class="slide">
                        <img src="img/decoracion6.jpg" alt="Decoración 6">
                    </div>
                    <div class="slide">
                        <img src="img/decoracion7.jpg" alt="Decoración 7">
                    </div>
                    <div class="slide">
                        <img src="img/decoracion8.jpg" alt="Decoración 8">
                    </div>
                    <button class="anterior" onclick="prevSlide()">&#10094;</button>
                    <button class="siguiente" onclick="nextSlide()">&#10095;</button>
                </div>
            </div>
        </div>
    </section>

    <section id="cartas">
        <div class="seccion-fondo fondo-cartas">
            <h2>Cartas Disponibles</h2>
            <div class="cartas">
                <div class="contenido">
                    <div class="carta">
                        <embed src="pdf/pdf1.pdf" type="application/pdf" width="150%" height="600px" />
                    </div>
                    <div class="carta">
                        <embed src="pdf/pdf2.pdf" type="application/pdf" width="150%" height="600px" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-contenido">
            <div class="footer-columna">
                <h3>Ubicación</h3>
                <p>
                    Trial Catering<br>
                    12001, Av. Giráldez Nro 906, Huancayo<br>
                    Perú
                </p>
            </div>
            <div class="footer-columna">
                <h3>Contacto</h3>
                <p>
                    Teléfono: +51 929 782 048<br>
                    Correo electrónico: trial@povis.com
                </p>
            </div>
            <div class="footer-columna">
                <div class="rest">Trial Catering</div>
            </div>
        </div>
    </footer>
    
    <script src="cliente.js"></script>
</body>
</html>
