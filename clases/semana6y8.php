<!DOCTYPE html>
<html>

<head>
    <title>Semana4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body>
    <h1>Inicio semana 6</h1>
    <?php

    $edad = 50;
    $edad2 = 60;
    $total = $edad + $edad2;
    echo $total . "<br>";

    $nombre = "Karol ";
    $edad = 34;

    echo "Mi nombre es " . $nombre . " , mi edad es de " . $edad . "<br>";

    $valor = 5;
    $valor2 = "5";

    echo "------------ 2 == o 3 === ??????? -------------------<br> ";
    if ($valor == $valor2) {
        echo "El valor de las variables son iguales" . "<br>";
    } else {
        echo "El valor de las variables son diferentes" . "<br>";
    }

    if ($valor === $valor2) {
        echo "El valor y el tipo de datos de las variables son iguales" . "<br>";
    } else {
        echo "El valor o el tipo de datos de las variables no son iguales" . "<br>";
    }


    echo "------------  1 != o  2 !== ??????? -------------------<br> ";
    if ($valor != $valor2) {
        echo "El valor de las variables son diferentes" . "<br>";
    }

    if ($valor !== $valor2) {
        echo "El valor o el tipo de datos de las variables son diferentes" . "<br>";
    } else {
        echo "El valor y el tipo de datos de las variables son iguales" . "<br>";
    }

    echo "------------ > o < o <= o >= -------------------<br> ";
    $edad = 10;
    if ($edad >= 18) {
        echo "Es un adulto <br>";
    } else {
        echo "Es menor de edad <br>";
    }

    echo "------------ && o ||  -------------------<br> ";

    $fruta = "pera";
    $esFruta = true;

    if ($fruta == "manzana" && $esFruta) { // false X
        echo "Es una fruta de manzana<br>";
    }

    if (($fruta == "manzana" && $esFruta) || $fruta == "pera") {
        echo "Es una manzana fruta o es pera<br>";
    }

    if (!($fruta == "manzana")) { // F  -> T
        echo "Es una fruta que no es manzana<br>";
    }


    echo "------------ while, do while, for  -------------------<br> ";

    $contador = 1;
    while ($contador <= 5) {
        echo "Contador es: " . $contador . "<br>";
        $contador++;
    }

    do {
        echo "Contador es: " . $contador . "<br>";
        $contador++;
    } while ($contador <= 5);


    for ($i = 0; $i <= 10; $i++) {
        echo "Contador es: " . $i . "<br>";
    }

    ?>
</body>
<script src="./semana4.js"></script>

</html>