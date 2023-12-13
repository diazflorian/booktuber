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
            <a href="index.php"> <span class="b">B</span>ook<span class="dot">.T</span><span class="tuber">uber</span></a>
            <div class="sections">
                <div class="nav-list">
                    <ul>
                        <li><a href="index.php#main">Inicio</a></li>
                        <li><a href="index.php#about">Sobre Nosotros</a></li>
                        <li><a href="books.php">Libros</a></li>
                        <li><a href="#main">Autores</a></li>
                    </ul>
                </div>
                <a class="button" href="contact.php">Contactanos</a>
            </div>
        </nav>
    </header>

    <main class="main-content-library main">
        <div class="main-container">
            <div class="filter">
                <div class="search-bar">
                    <label for="search" class="search-icon"></label>
                    <input type="text" name="search" id="search">
                </div>
            </div>
            <div class="content">
                <div class="filters">
                    <img src="images/filtrar.png" alt="Filter">
                    <div class="items">
                        <div class="apellido item">Apellido</div>
                        <div class="ciudad item">Ciudad</div>
                        <div class="pais item">Pais</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container-content">
            <?php
            include  "conection.php";
            $sql=$pdo->query("select nombre, apellido, ciudad, pais from autores");
            while($data = $sql->fetch(PDO::FETCH_OBJ)){ ?>
                <div class="card">
                    <img src="images/image10.png" alt="">
                    <h2><?= $data->nombre?> <?= $data->apellido?></h2>
                    <p>Ciudad: <?= $data->ciudad ?></p>
                    <p>Pais: <?= $data->pais ?></p>
                </div>
            <?php }
            ?>
        </div>
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