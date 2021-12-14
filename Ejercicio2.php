<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    
    <form method="POST" action="Ejercicio2.php">
        <h1>Introduce una cadena</h1>
        <br>
        <p>Primera cadena: </p><input type="text" name="cadena">
        <br>
        <p>Segnda cadena: </p><input type="text" name="cadena2">
        <br>
        <br>
        <input value="Enviar" type="submit">
    </form><br>

    <?php
        error_reporting(0);

        //variables
        $cad1=$_POST['cadena'];
        $cad2=$_POST['cadena2'];

        if (str_starts_with($cad1,$cad2)){
            echo "La primera cadena empieza por la segunda.";
        }else{
            echo "La primera cadena no empieza por la segunda";
        }
    ?><br>

    <a href="index.html">Volver</a>

</body>
</html>