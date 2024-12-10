<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./contactanos.php">Volver formulario contactanos</a>
    <?php 

    echo "<br><br>Correo: ".$_POST["correo"] . "<br>";
    echo "Autor: ".$_POST["asunto"] ."<br>";
    echo "Portada: ".$_POST["mensaje"] ."<br>";

    ?>
</body>
</html>