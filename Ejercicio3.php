<!-- Autor: Jesús Vázquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>

    <!-- Pide una cadena y un carácter por teclado 
    (valida que sea un carácter) y muestra cuantas 
    veces aparece el carácter en la cadena. -->
    <form method="POST" action="Ejercicio3.php">
        <h1>Introduce una cadena</h1><br>
        <p>Cadena: </p><input type="text" name="cadena"><br>
        <p>Caracter: </p><input type="text" name="caracter"><br><br>
        <input value="Enviar" type="submit">
    </form><br>
    
    <?php
        error_reporting(0);

        //variables
        $cad=$_POST['cadena'];
        $car=$_POST['caracter'];

        if (strlen($car)!=1){
            echo "Introduce un caracter.";
        }else{
            $veces=substr_count($cad,$car);
            echo $veces;
        }//Fin Si
    ?><br>

    <a href="index.html">Volver</a>

</body>
</html>