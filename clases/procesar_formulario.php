<?php 

//print_r($_GET);
if(!empty($_GET)){
    echo "Hola: ".$_GET["nombre"];
}


if(!empty($_POST)){
    echo "Hola: ".$_POST["nombre"];
}