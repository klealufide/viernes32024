<?php

include("config.php");

switch ($_POST["action"]) {
    case 'add':
        if ($_POST["name"] ?? '' != "") {
            $query = "INSERT INTO teachers( name) VALUES ('" . $_POST["name"] . "')";

            if ($conn->query($query) ==  TRUE) {
                echo json_encode(["status" => "00", "message" => "Registro exitosamente guardado", "name" => $_POST["name"]]);
            } else {
                echo json_encode(["status" => "99", "message" => "Error al guardar el mensaje"]);
            }
        }
        break;

    case 'getAll':
        $sql = "SELECT * FROM teachers";
        $result = $conn->query($sql);
        $listTeachers = [];
        if ($result->num_rows > 0) {
            while ($teacher = $result->fetch_assoc()) {
                $listTeachers[] = $teacher;
            }
        }

        echo json_encode(["status" => "00", "teachers" => $listTeachers]);
        break;

    case 'update':

        break;

    case 'delete':

        break;


    case 'get':

        break;
}
