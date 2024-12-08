<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ◤ Principal | BiblioNet ◥</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../includes/css/style_pages.css">
</head>
<body>
    <header>
        <nav id="navegador">
            <a href="./principal.php" class="enlace">
                <img width="80" class="logo" src="../img/logo.png" alt="Logo BiblioNet">
            </a>
            <ul>
                <li><a href="./principal.php" class="active">INICIO</a></li>
                <li><a href="./catalogo.php">CATALOGO</a></li>
                <li><a href="./nosotros.php">SOBRE NOSOTROS</a></li>
                <li><a href="./contactanos.php">CONTACTANOS</a></li>
                <li><a href="./carrito.php">CARRITO</a></li>
                <li class="user">
                    <div id="containerUser">
                        <img src="../img/icon_user.webp" alt="">

                        <?php 
                            session_start();
                            echo $_SESSION["user"];
                        ?>
                    </div>
                    
                </li>
            </ul>
        </nav>
    </header>
    
    <footer>

    </footer>
    
</body>
</html>