<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./index.php">Volver login</a>
    <?php 

    echo "<br><br>Correo: ".$_POST["email"] . "<br>";
    echo "Contraseña: ".$_POST["password"] ."<br>";
    echo "Contraseña 2: ".$_POST["password2"];

    ?>
</body>
</html>