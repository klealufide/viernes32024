<?php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "matricula";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Conexion fallida");
}

echo "Conexion exitosa <br>";

// CRUD/
/*
$sql = "INSERT INTO `user`( `username`, `password`, `rol`) VALUES ('kleal','123456','admin')";

if($conn->query($sql) === TRUE){
    echo "Inserto existosamente";
} else  {
    echo "Error al insertar";
}
*/

$sql = "SELECT * FROM `user`";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "ID: ".$row["id"]." usuario: ".$row["username"]." rol: ".$row["rol"]."<br>";
    }
}


$sql = "UPDATE `user` SET `username`='klealr' WHERE id=1";

if($conn->query($sql) === TRUE){
    echo "Actualizo existosamente"."<br>";
} else  {
    echo "Error al actualizar"."<br>";
}


$sql = "DELETE FROM `user` WHERE id=2";

if($conn->query($sql) === TRUE){
    echo "Elimino existosamente"."<br>";
} else  {
    echo "Error al eliminar"."<br>";
}

$clave = "123456";

//$hash = password_hash($clave, PASSWORD_BCRYPT);

$hash1 = '$2y$10$b7AYI2C3jYv951/mbbsauOhh6/q/sHMRFmrB0p7Nmd16QEExXD3Ga';
$hash2 = '$2y$10$oAPGPFBuLa3ZK.3GZuyGXuA0cSqijYDtBUduH2U2aNqcgyILZ8C8q';
$hash3 = '$2y$10$mkWcy2pSuOUKirR04fvemuiN/1DPa77aJJDEhZN3OIt8KayZ0Ieju';

if(password_verify($clave,$hash3)){
    echo "Clave y hash verificados";
} else {
    echo "La clave no corresponde al hash";
}
