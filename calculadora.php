<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <form action="calculadora.php" method="get" class="caja">
        <h1>CALCULADORA PHP</h1>
        <input type="text" name="numero1" value="" placeholder="ingrese un numero" autocomplete="off">
        <input type="text" name="numero2" value="" placeholder="ingrese otro numero" autocomplete="off">

        <input type="submit" value="RESPUESTA" name="">
        <output type = "number" name="">
    
    </form>
</body>
</html>

<?php

//isset me permite trabajar con variables
//is_numeric verifica que los datos pasados por el formulario sean numeros

if(isset($_GET["numero1"]) && isset($_GET["numero2"]) && is_numeric($_GET["numero1"]) && is_numeric($_GET["numero2"]));{
    
    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    echo $numero1 + $numero2;

}

?>