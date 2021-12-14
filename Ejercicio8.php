<!-- Autor: Jesús Vázquez Gessa -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<body>

<!--Realizar un programa que lea una cadena por teclado
 y convierta las mayúsculas a minúsculas y viceversa.-->
    <form method="POST" action="Ejercicio8.php">
        <h1>Introduce una cadena</h1><br>
        <p>Cadena: </p><input type="text" name="cadena"><br><br>
        <input value="Enviar" type="submit">
    </form><br>

    <?php
        error_reporting(0);

        //variables
        $cad = $_POST["cadena"];
        $long = strlen($cad);

        for($i=0;$i<=$long;$i++){
            if(ctype_upper(substr($cad,$i,1))){
                echo strtolower(substr($cad,$i,1));
            }else{
                echo strtoupper(substr($cad,$i,1));
            }//Fin Si
        }//Fin Si
    ?><br>

    <a href="index.html">Volver</a>

</body>
</html>