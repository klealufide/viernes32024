<?php
include("config.php");
$data = json_decode(file_get_contents("php://input"), true);

if ($data["name"] ?? '' != "") {
    $query = "INSERT INTO contact( name, email, subject, message) VALUES ('".$data["name"] ."','".$data["email"] ."','".$data["subject"] ."','".$data["message"] ."')";

    if ($conn->query($query) ==  TRUE) {
        echo json_encode(["status" => "00", "message"=>"Registro exitosamente guardado"]);
    } else {
        echo json_encode(["status" => "99", "message"=>"Error al guardar el mensaje"]);
    }
}
