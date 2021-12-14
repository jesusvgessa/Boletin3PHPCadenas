<!-- Autor: Jesus Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<body>

    <!--Introducir una cadena de caracteres e indicar si es un palíndromo.
    Una palabra palíndroma es aquella que se lee igual adelante que atrás.
    -->
    <form method="POST" action="Ejercicio10.php">
        <h1>Introduce una cadena</h1><br>
        <p>Cadena: </p><input type="text" name="cadena"><br><br>
        <input value="Enviar" type="submit">
    </form><br>

    <?php
        error_reporting(0);

        //variables
        $cad1=$_POST['cadena'];
        $cad2=strrev($cad1);

        if ($cad1==$cad2){
            echo "Es un palindromo.";
        }else{
            echo "NO es un palindromo.";
        }
    ?><br>

    <a href="index.html">Volver</a>

</body>
</html>