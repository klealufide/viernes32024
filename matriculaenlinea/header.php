<?php 

session_start();  
$menu = [
    ["url"=> "index.php", "label"=> "Inicio"],
    ["url"=> "#", "label"=> "Informacion"],
    ["url"=> "#", "label"=> "Matricula"],
    ["url"=> "contact.php", "label"=> "Contacto"],
    ["url"=> "login.php", "label"=> "Login"],
];

if(!empty($_SESSION)){
    if($_SESSION["rol"] == "estudiante"){
        $menu[] = ["url"=> "login.php", "label"=> "Listado de estudiantes"];
    }
}

?>
<header>
    <nav>
        <ul class="menu">
            <?php foreach($menu as $item){
                echo '<li class="menu-item"><a href="'.$item["url"].'">'.$item["label"].'</a></li>';
            }?>
        </ul>
    </nav>
    <h1>Bienvenidos a la Matricula en Linea</h1>
    <p>La mejor opcion para registrar a sus hijos en nuestra escuela.</p>
</header>