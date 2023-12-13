<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>BookTuber</title>
</head>
<body>
    <header class="header">
        <nav class="nav-bar">
            <a href="index.php#main"> <span class="b">B</span>ook<span class="dot">.T</span><span class="tuber">uber</span></a>
            <div class="sections">
                <div class="nav-list">
                    <ul>
                        <li><a href="index.php#main">Inicio</a></li>
                        <li><a href="index.php#about">Sobre Nosotros</a></li>
                        <li><a href="books.php">Libros</a></li>
                        <li><a href="autors.php">Autores</a></li>
                    </ul>
                </div>
                <a class="button" href="#main">Contactanos</a>
            </div>
        </nav>
    </header>

    <main class="main-content-form" id="main">
        <form action="dataContact.php" method="POST" autocomplete="off">
            <div class="form-content">
                <div class="input-group">
                    <h2>Contactanos</h2>
                    <input type="text" placeholder="Nombre"  name="nombre" id="nombre" maxlength="255" required>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                    <input type="text" placeholder="Asunto" name="asunto" id="asunto" maxlength="255" required>
                    <textarea name="comentario" id="comentario" cols="30" rows="4" placeholder="Comentario" maxlength="255" required></textarea>
                    <input class="btn" type="submit" value="Enviar">
                </div>
                <div class="form-img">
                    <img src="images/img-contactanos.png" alt="">
                </div>
            </div>
        </form>
    </main>

    <footer class="footer">
        <div class="footer-logos">
            <a href="https://www.linkedin.com/" class="logo" target="_blank"><img src="/images/linkedin.png" alt="Linkedin's logo"></a>
            <a href="https://www.instagram.com/" class="logo" target="_blank"><img src="/images/instagram.png" alt="Instagram's logo"></a>
            <a href="https://twitter.com/" class="logo" target="_blank"><img src="/images/twitter.png" alt="Twitter's logo"></a>
        </div>
        <p>©2023 Yohanna Diaz | Todos los derechos reservados.</p>
        <p><a href="https://www.ionos.es/digitalguide/paginas-web/derecho-digital/aviso-legal-obligatorio-todo-lo-que-necesitas-saber/" target="_blank">Información Legal</a> | <a href="https://www.aquasocialmedia.com/blog-dynamic/91-que-es-y-para-que-sirve-la-politica-de-privacidad" target="_blank">Politica de privacidad</a></p>
    </footer>
</body>
</html>