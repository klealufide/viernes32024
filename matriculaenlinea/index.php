<!DOCTYPE html>
<html>

<head>
    <!--METADATOS-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matricula en linea</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
        include('header.php')
    ?>
    <main>
        <section>
            <?php if(!empty($_SESSION)){
                echo "<h1>Hola ".$_SESSION['username']."</h1>";
            } ?>
     
            <h2>Por que eligir nuestra escuela?</h2>
            <p>Contamos con el mejor equipo educativo, instalaciones modernas y un ambiente familiar donde sus hijos pueden crecer de la mejor manera.</p>
            <div>
                <img src="./images/biblioteca.jpg">
                <img src="./images/patio.jpg">
                <img src="https://i0.wp.com/mirincondeaprendizaje.com/wp-content/uploads/2019/08/classroom-2093744_960_720-1.jpg?resize=678%2C484&ssl=1">
            </div>
        </section>
        <section>
            <h2>Como funciona el proceso de matricula</h2>
            <ol>
                <li>Registrese en nuestro sistema</li>
                <li>Completar la informacion del estudiante</li>
                <li>Confirmar el proceso y descargar la constancia</li>
            </ol>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UCtekqtKD18?si=Puvr6AzTMkeMlLtY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </section>

        <section>
            <h2>Datos de contacto de la escuela</h2>
            <table>
                <thead>
                    <tr>
                        <th>Departamento</th>
                        <th>Telefono</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Administrativo</td>
                        <td>2222-2222</td>
                        <td>admin@escuela.com</td>
                    </tr>
                    <tr>
                        <td>Soporte</td>
                        <td>2222-2222</td>
                        <td>soporte@escuela.com</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <?php include('footer.php')?>
</body>

</html>