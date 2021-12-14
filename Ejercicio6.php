<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>

<!--Realizar un programa que dada una cadena de caracteres
por caracteres, genere otra cadena resultado de invertir la primera.-->
    <form method="POST" action="Ejercicio6.php">
        <h1>Introduce una cadena</h1><br>
        <p>Cadena: </p><input type="text" name="cadena" pattern="[a-zA-Z\s]+"><br><br>
        <input value="Enviar" type="submit">
    </form><br>

    <?php
        error_reporting(0);

        //variables
        $nombre = $_POST["cadena"];
        echo strrev($nombre); 
    ?><br>

    <a href="index.html">Volver</a>

</body>
</html>