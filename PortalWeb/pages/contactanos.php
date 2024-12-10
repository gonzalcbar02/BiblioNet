<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ◤ Contactanos | BiblioNet ◥</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../includes/css/style_pages.css">
    <link rel="stylesheet" href="../includes/css/style_contact.css">
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
                <li><a href="./contactanos.php" class="active">CONTACTANOS</a></li>
                <li><a href="./carrito.php">CARRITO</a></li>
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
                ¿Que le sucede?
            </div>
            <form action="./dataFormContact.php" method="post">
                <input type="email" name="correo" placeholder="Correo" required>
                <input type="text" placeholder="Asunto" name="asunto" required>
                <textarea name="mensaje" id="" cols="70" rows="10" placeholder="Mensaje"></textarea>
                <button type="submit" >Enviar formulario</button>
            </form>
        </div>
    </div>

    <footer>

    </footer>

</body>

</html>

<?php

const EMAIL_ADMIN = "alcaidebarberogonzalo@gmail.com";

/* Funcionalidad que no ira hasta ser desplegada en servidor */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    ini_set("SMTP","localhost");
    ini_set("smtp_port","25");

    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];
    $correo = $_POST["correo"];

    $headers = "MIME-Version: 1.0 \r\n";
    $headers .= "Content-type: text/plain; charset=utf-8 \r\n";
    $headers .= "From: $correo \r\n";
    $headers .= "To: Web: <alcaidebarberogonzalo@gmail.com> \r\n";


    mail(EMAIL_ADMIN, "WEB: $asunto", $mensaje, $headers);
}


?>