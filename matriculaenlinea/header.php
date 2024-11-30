<?php 

session_start();
$menu =  [
    ["url" => "index.php", "title" => "Inicio"],
    ["url" => "information.php", "title" => "Informacion"],
    ["url" => "registration.php", "title" => "Matricula"],
    ["url" => "contact.php", "title" => "Contacto"],
    ["url" => "login.php", "title" => "Login"],
    ["url" => "contact.php", "title" => "Registro"],
];

if(!empty($_SESSION)){
    if($_SESSION['rol'] == "admin"){
        $menu =  [
            ["url" => "index.php", "title" => "Inicio"],
            ["url" => "information.php", "title" => "Informacion"],
            ["url" => "registration.php", "title" => "Matricula"],
            ["url" => "listRegistration.php", "title" => "Listado de estudiantes"],
            ["url" => "#", "title" => "Listado de profesores"],
            ["url" => "#", "title" => "Mantenimiento"],
            ["url" => "contact.php", "title" => "Contacto"],
            ["url" => "logout.php", "title" => "Salir"],
        ];
    } else {
        $menu =  [
            ["url" => "index.php", "title" => "Inicio"],
            ["url" => "information.php", "title" => "Informacion"],
            ["url" => "registration.php", "title" => "Matricula"],
            ["url" => "contact.php", "title" => "Contacto"],
            ["url" => "logout.php", "title" => "Salir"]
        ];
    }

}
?>
<header>
    <nav>
        <ul class="menu">
            <?php foreach($menu as $item){
                echo '<li class="menu-item"><a href="'.$item["url"].'">'.$item["title"].'</a></li>';
            }?>
        </ul>
    </nav>
    <h1>Bienvenidos a la Matricula en Linea</h1>
    <p>La mejor opcion para registrar a sus hijos en nuestra escuela.</p>
</header>