    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ◤ Formulario admin | BiblioNet ◥</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../includes/css/style_pages.css">
    <link rel="stylesheet" href="../includes/css/style_contact.css">
</head>
<body>
    <header>
        <nav id="navegador">
            <a href="./principal.php" class="enlace">
                <img width="80" class="logo" src="../img/logo.png" alt="Logo BiblioNet">
            </a>
            <ul>
                <li><a href="./principal.php">VOLVER INICIO</a></li>
                <li><a class="active">FORMULARIO ADMIN</a></li>
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
        <div id="formContact">
            <div class="titulo">
                INSERCIÓN DE LIBRO
            </div>
            <form action="./dataFormAdmin.php" method="post">
                <input type="text" name="nameBook" placeholder="Titulo del libro" required>
                <input type="text" placeholder="Autor" name="autor" required>
                <input type="file" value="Portada" name="portada" required>
                <textarea name="resumen" id="" cols="70" rows="10" placeholder="Resumen"></textarea>
                <button type="submit" >Insertar libro</button>
            </form>
        </div>
    </div>
    
    <footer>

    </footer>
    
</body>
</html>