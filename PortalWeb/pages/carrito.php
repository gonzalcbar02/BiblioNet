<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ◤ Carrito | BiblioNet ◥</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../includes/css/style_pages.css">
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
                <li><a href="./nosotros.php">SOBRE NOSOTROS</a></li>
                <li><a href="./contactanos.php">CONTACTANOS</a></li>
                <li><a href="./carrito.php" class="active">CARRITO</a></li>
                <li class="user">
                    <div id="containerUser">
                        <img src="../img/icon_user.webp" alt="">

                        <?php 
                            session_start();
                            if($_SESSION["user"] == "admin@yopmail.com"){
                                echo '<a href="./insertDataAdmin.php">'.$_SESSION["user"].'</a>';
                            }else{
                                echo $_SESSION["user"];
                            }
                        ?>
                    </div>
                    
                </li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="content">
            <div class="titulo">Carrito</div>
            <div class="containerBooks">
                <div class="libro">
                <span><a href="../pages/messageDeleteBook.php">X</a></span>
                    <div class="img">
                        <img src="../img/portada.webp" alt="portada">
                    </div>
                    <h1>Libro</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat blanditiis ducimus dignissimos, excepturi quis ea aliquam cupiditate, dolorum at quisquam minima dolore qui vitae voluptatibus? Quo sequi laboriosam fugiat est.</p>
                </div>
                <div class="libro">
                    <span><a href="../pages/messageDeleteBook.php">X</a></span>
                    <div class="img">
                        <img src="../img/portada.webp" alt="portada">
                    </div>
                    <h1>Libro</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat blanditiis ducimus dignissimos, excepturi quis ea aliquam cupiditate, dolorum at quisquam minima dolore qui vitae voluptatibus? Quo sequi laboriosam fugiat est.</p>
                </div>
                <div class="libro">
                    <span><a href="../pages/messageDeleteBook.php">X</a></span>
                    <div class="img">
                        <img src="../img/portada.webp" alt="portada">
                    </div>
                    <h1>Libro</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat blanditiis ducimus dignissimos, excepturi quis ea aliquam cupiditate, dolorum at quisquam minima dolore qui vitae voluptatibus? Quo sequi laboriosam fugiat est.</p>
                </div>
            </div>
            <button class="button">Reservar</button>
        </div>
        
    </div>
    
    
    <footer>

    </footer>
    
</body>
</html>