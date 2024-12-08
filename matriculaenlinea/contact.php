<!DOCTYPE html>
<html>

<head>
    <!--METADATOS-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula en linea</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body>
    <?php
    include('header.php')
    ?>
    <main>
        <section>
            <form method="post" id="contactForm">
                <h2>Contacto</h2>
                <div class="form-group">
                    <label for="contact">Nombre de Contacto</label>
                    <input type="text" id="contact" name="contact">
                    <span id="error-contact">El nombre es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email">
                    <span id="error-email">El correo es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="subject">Asunto</label>
                    <input type="text" id="subject" name="subject">
                    <span id="error-subject">El asunto es obligatorio.</span>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message" rows="5"></textarea>
                    <span id="error-message">El mensaje es obligatorio.</span>

                </div>
                <button type="submit" class="boton">Enviar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Ambiente Cliente WEB Servidor - Todos los derechos reservados</p>
        <p><a href="privacidad.html">Politica de privacidad</a> | <a href="terminos.html">Terminos y condiciones</a></p>
    </footer>
</body>

</html>