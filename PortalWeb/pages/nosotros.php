<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ◤ Sobre Nosotros | BiblioNet ◥</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../includes/css/style_pages.css">
    <link rel="stylesheet" href="../includes/css/style_about.css">
</head>

<body>
    <header>
        <nav id="navegador">
            <a href="./principal.php" class="enlace">
                <img width="80" src="../img/logo.png" alt="Logo BiblioNet">
            </a>
            <ul>
                <li><a href="./principal.php">INICIO</a></li>
                <li><a href="./catalogo.php">CATALOGO</a></li>
                <li><a href="./nosotros.php" class="active">SOBRE NOSOTROS</a></li>
                <li><a href="./contactanos.php">CONTACTANOS</a></li>
                <li><a href="./carrito.php">CARRITO</a></li>
                <li class="user">
                    <div id="containerUser">
                        <img src="../img/icon_user.webp" alt="">

                        <?php
                        session_start();
                        if ($_SESSION["user"] == "admin@yopmail.com") {
                            echo '<a href="./insertDataAdmin.php">' . $_SESSION["user"] . '</a>';
                        } else {
                            echo $_SESSION["user"];
                        }
                        ?>
                    </div>

                </li>
            </ul>
        </nav>
    </header>

    <div>
        <div class="contentAbout">
            <img src="../img/biblioteca.webp" alt="">
            <div class="textAbout">
                <h1>BiblioNet</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa in velit at iusto perspiciatis laboriosam numquam consectetur eaque maiores cum nihil saepe, tempore eos? Delectus illum inventore possimus quo ipsum iure explicabo sint, est at repudiandae, voluptatibus tempore magnam molestiae ullam laboriosam commodi, incidunt distinctio. Tenetur animi facilis nulla repudiandae suscipit earum obcaecati optio perspiciatis libero molestias distinctio laborum neque cum accusamus laudantium, doloremque molestiae provident ipsum at quod est ipsam numquam dolorem. Dolores incidunt sint veniam necessitatibus culpa exercitationem praesentium alias similique, voluptatibus itaque officia dolorum eligendi sapiente atque cum! Molestias temporibus adipisci recusandae maiores similique itaque, fugiat doloribus.</p>
            </div>
        </div>
    </div>
    <div id="mapa">
        <h1>NUESTRA UBICACIÓN</h1>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=insidepc&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
            <style>

            </style>
        </div>
    </div>

    <footer>

    </footer>

</body>

</html>