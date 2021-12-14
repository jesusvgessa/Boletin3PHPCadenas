<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>

<!--Pide una cadena y dos caracteres por teclado (valida que sea 
un carácter), sustituye la aparición del primer carácter en 
la cadena por el segundo carácter..-->
    <form method="POST" action="Ejercicio7.php">
        <h1>Introduce una cadena</h1><br>
        <p>Cadena: </p><input type="text" name="cadena"><br>
        <p>Caracter1: </p><input type="text" name="car1" pattern="[a-zA-Z\s]"><br>
        <p>Caracter2: </p><input type="text" name="car2" pattern="[a-zA-Z\s]"><br><br>
        <input value="Enviar" type="submit">
    </form><br>

    <?php
        error_reporting(0);

        //variables
        $cad = $_POST["cadena"];
        $car1 =$_POST["car1"];
        $car2 =$_POST["car2"];

        echo str_replace($car1,$car2,$cad);
    ?><br>

    <a href="index.html">Volver</a>

</body>
</html>