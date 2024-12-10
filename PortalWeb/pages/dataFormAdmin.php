<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./insertDataAdmin.php">Volver formulario inserccion</a>
    <?php 

    echo "<br><br>Titulo Libro: ".$_POST["nameBook"] . "<br>";
    echo "Autor: ".$_POST["autor"] ."<br>";
    echo "Portada: ".$_POST["portada"] ."<br>";
    echo "Resumen: ".$_POST["resumen"] ."<br>";

    ?>
</body>
</html>