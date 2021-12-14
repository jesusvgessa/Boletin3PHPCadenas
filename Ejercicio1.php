<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>

    <form method="POST" action="Ejercicio1.php">
        <h1>Introduce una cadena</h1>
        <br>
        <p>Cadena: </p><input type="text" name="cadena">
        <br>
        <input value="Enviar" type="submit">
    </form>

    <?php
        error_reporting(0);

        //variables
        $cad=$_POST['cadena'];
        $long=strlen($cad);

        for($i=0;$i<=$long;$i++){
            echo $cad[0]."<br>";
            $cad=substr($cad,1,strlen($cad));
        }//Fin Para

    ?>

    <a href="index.html">Volver</a>

</body>
</html>