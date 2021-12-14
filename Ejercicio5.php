<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>

    <!--Si tenemos una cadena con un nombre y apellidos,
    realizar un programa que muestre las iniciales en mayúsculas.-->
    <form method="POST" action="Ejercicio5.php">
        <h1>Introduce una cadena</h1><br>
        <p>Nombre y apellidos: </p><input type="text" name="cadena"><br><br>
        <input value="Enviar" type="submit">
    </form><br>

    <?php
        error_reporting(0);

        //variables
        $cad=$_POST['cadena'];

        echo ucwords($cad);
    ?><br>

    <a href="index.html">Volver</a>

</body>
</html>