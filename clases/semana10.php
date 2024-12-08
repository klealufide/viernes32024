<!DOCTYPE html>
<html>

<head>
    <title>Semana 10</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./semana10.js"></script>
    <style>
        .red {
            color: red;
        }

        .green {
            color: green;
        }

        .red {
            color: red;
        }

        .blue {
            background-color:  blue!important;
        }

        #cuadrado {
            width: 100px;
            height: 100px;
            background-color: red;
            margin: 20px;
        }
    </style>
</head>

<body>
    <form>
        <input id="nombre" required class="input" value="Karol">
        <input id="apellido" required class="input" value="Leal">
        <button type="submit">enviar</button>
    </form>

    <p id="principal">First Paragraph</p>
    <p>Second Paragraph</p>
    <p>Yet one more Paragraph</p>
    <img src="biblioteca.jpg">
    <a href="google.com"></a>
    <h2>Clase: Semana 11</h2>

    <div id="cuadrado"></div>
    <div>
        <input type="button" value="Mostrar" id="mostrar">
        <input type="button" value="Ocultar" id="ocultar">
        <input type="button" value="+" id="agrandar">
        <input type="button" value="-" id="achicar">
        <input type="button" value="Normalidad" id="normal">
        <input type="button" value="Cambiar color" id="color">
    </div>

    <section>
        <input type="text" value="" id="task"><button id="addTask">Agregar Tarea</button>
        <div>
            <ul id="listTasks">
                <li>Terminar el login</li>
                <li>Mejorar el css del registro</li>
            </ul>
        </div>

    </section>
</body>

</html>