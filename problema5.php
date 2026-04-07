<!DOCTYPE html> <!-- Define documento HTML5 -->
<html lang="es"> <!-- Idioma español -->
<head>
    <meta charset="UTF-8"> <!-- Permite usar acentos -->
    <title>Formulario de Entrada de Datos</title>

    <style>
        /* Estilo general de la página */
        body {
            font-family: Arial, sans-serif; /* Tipo de letra */
            background: linear-gradient(135deg, #ff9a9e, #fad0c4); /* Fondo degradado */
            display: flex; /* Activa flexbox */
            justify-content: center; /* Centra horizontal */
            align-items: center; /* Centra vertical */
            height: 100vh; /* Altura completa */
            margin: 0; /* Sin márgenes */
        }

        /* Contenedor tipo tarjeta */
        .container {
            background: white; /* Fondo blanco */
            padding: 30px; /* Espaciado */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2); /* Sombra */
            text-align: center; /* Centra contenido */
            width: 350px; /* Ancho */
        }

        /* Título */
        h1 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Inputs */
        input {
            width: 90%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            margin-top: 10px;
        }

        /* Efecto al hacer clic */
        input:focus {
            border-color: #ff758c;
            box-shadow: 0 0 5px rgba(255,117,140,0.5);
        }

        /* Botón */
        button, input[type="submit"] {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background: #ff758c;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        /* Hover del botón */
        button:hover, input[type="submit"]:hover {
            background: #ff5c7a;
            transform: scale(1.05);
        }

        /* Resultado */
        .resultado {
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
        }

        /* Color si es mayor de edad */
        .mayor {
            color: green;
        }

        /* Color si es menor de edad */
        .menor {
            color: red;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Formulario de Datos</h1>

    <!-- Formulario que envía datos por POST -->
    <form method="post">
        Ingrese su Nombre:
        <input type="text" name="nombre" required> <!-- Campo nombre -->

        Ingrese su Edad:
        <input type="number" name="edad" required> <!-- Campo edad -->

        <input type="submit" value="Confirmar"> <!-- Botón -->
    </form>

    <?php
    // Verifica si el formulario fue enviado
    if ($_POST) {

        // Guarda el nombre (y lo limpia para evitar código malicioso)
        $nombre = htmlspecialchars($_POST['nombre']);

        // Guarda la edad
        $edad = $_POST['edad'];

        // Verifica si es mayor de edad
        if ($edad >= 18) {
            echo "<div class='resultado mayor'>
            $nombre, usted puede ejercer su voto en las próximas elecciones 2029 (Eres mayor de edad)
            </div>";
        } else {
            echo "<div class='resultado menor'>
            $nombre, usted no puede ejercer su voto en las próximas elecciones 2029 (No eres mayor de edad)
            </div>";
        }
    }
    ?>
</div>

</body>
</html>