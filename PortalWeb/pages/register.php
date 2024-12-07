<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ◤ Regristro | BiblioNet ◥</title>
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
                <form id="loginform" action="./dateRegister.php" method="post">
                    <input type="email" name="email" placeholder="Correo" required>    
                    <input type="password" placeholder="Contraseña" name="password" required>
                    <input type="password" placeholder="Repite Contraseña" name="password2" required>
                    <button type="submit" title="Registrate" name="Registrate">Registrate</button>
                </form>
                <div class="pie-form">
                    <a href="./dateRegister.php"> ¿Quieres volver al inicio? Pulsame </a>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){ 
        
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        if($password == $password2){
            header("Location:./index.php");
        }
        
    }
?>