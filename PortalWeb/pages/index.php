<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioNet</title>
    <link rel="icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../includes/css/style_home.css">
</head>
<body>
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido
                </div>
                <form method="post">
                    <input type="email" name="usuario" placeholder="Usuario" required>    
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <button type="submit" title="Ingresar" name="Ingresar">Login</button>
                </form>
                <div class="pie-form">
                    <a href="#">¿Perdiste tu contraseña?</a>
                    <a href="./register.php">¿No tienes Cuenta? Registrate</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        session_start();

        $username = $_POST["usuario"];
        $password = $_POST["password"];

        if( $username == "gonzalo@gmail.com" && $password == 1234){
            header("Location:./principal.php");
            $_SESSION["user"] = $username;
        }
        if( $username == "admin@yopmail.com"){
            header("Location:./principal.php");
            $_SESSION["user"] = $username;
        }
    }

?>