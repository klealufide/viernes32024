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
    <h2>Formulario </h2>
    <form method="post" action="procesar_formulario.php">
        <label>Nombre:</label><input type="text" name="nombre" id="nombre"><label>EDAD:</label><input type="number" name="edad" id="edad">
        <button type="submit">Enviar</button>
    </form>
    <?php

    /*
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

*/

    echo "<h2>Semana 8</h2> ";

    echo "------------ array INDEXADO -------------------<br> ";

    $listadoFrutas = array("manzana", "melon", "pera");
    $listadoCarros = ["toyota", "suzuki", "hyndai"];


    echo $listadoFrutas[2] . "<br>";
    echo $listadoCarros[2] . "<br>";


    echo "------------ array ASOCIATIVO -------------------<br> ";

    $estudiante = array("nombre" => "Karol", "apellido" => "Leal", "edad" => 34);
    $estudiante1 = array("nombre" => "Maria", "apellido" => "Perez", "edad" => 20);
    $estudiante2 = array("nombre" => "Juan", "apellido" => "Mora", "edad" => 31);

    $listadoEstudiantes = array(
        $estudiante,
        $estudiante1,
        $estudiante2,
        array("nombre" => "Paola", "apellido" => "Fernandez", "edad" => 25)
    );

    //print_r($listadoEstudiantes);
    echo "<br>";



    // Arreglo multidimensional   arreglo as key  valor
    foreach ($listadoEstudiantes as $index => $estudiante) {
        // index es el numero de la posicion del estudiante.
        // estudiante es el Arreglo de estudiantes -> nombre, apellido, edad
        //echo " Estudiante numero : " . $listadoEstudiantes[$index]["edad"] . "<br>";
        echo " Estudiante numero : " . $index . "<br>";
        foreach ($estudiante as $key => $valor) {
            echo $key . " => " . $valor . "<br>";
        }
        echo "<br>";
    }
    // listado informacion de arreglo?

    ?>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php

        foreach ($listadoEstudiantes as $estudiante) {
            if ($estudiante["edad"] < 25) {
                echo "<tr><td>" . $estudiante["nombre"] . "</td><td>" . $estudiante["apellido"] . "</td><td>" . $estudiante["edad"] . "</td></tr>";
            }
        }

        ?>
    </table>

    <?php
    for ($i = 0; $i < count($listadoEstudiantes); $i++) {
        echo $listadoEstudiantes[$i]["nombre"] . "<br>";
    }

    echo "<br>Archivos<br>";
    /*
        $archivo = fopen("miarchivo.txt","w");
        fwrite($archivo,"este es mi primer archivo en php.");
        fclose($archivo);
        */

    $archivo = fopen("miarchivo.txt", "r");
    while (!feof($archivo)) {
        $linea = fgets($archivo);
        echo $linea . "<br>";
    }
    fclose($archivo);

    //print_r($_GET);
    //echo $_GET["nombre"];
    try {
        $archivo = fopen("miarchivo.txt", "r");
        if (!$archivo) {
            throw new Exception("No se puede abrir el archivo");
        }
        while (!feof($archivo)) {
            $linea = fgets($archivo);
            echo $linea . "<br>";
        }
        fclose($archivo);
    } catch (Exception $e) {
        echo "Se ha producido un error";
    }
    ?>
</body>
<script src="./semana4.js"></script>

</html>