<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>

    <!-- Suponiendo que hemos introducido una cadena por teclado
    que representa una frase (palabras separadas por espacios),
    realiza un programa que cuente cuantas palabras tiene.-->
    <form method="POST" action="Ejercicio4.php">
        <h1>Introduce una cadena</h1><br>
        <p>Cadena: </p><input type="text" name="cadena"><br><br>
        <input value="Enviar" type="submit">
    </form><br>

    <?php
        error_reporting(0);

        //variables
        $cad=$_POST['cadena'];

        echo "La cadena tiene ".str_word_count($cad)." palabras";
    ?><br>

    <a href="index.html">Volver</a>

</body>
</html>