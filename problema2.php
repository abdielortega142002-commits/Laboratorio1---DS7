<!DOCTYPE html> <!-- Define que el documento es HTML5 -->
<html lang="es"> <!-- Idioma español -->
<head>
    <meta charset="UTF-8"> <!-- Permite usar acentos y caracteres especiales -->
    <title>Problema #2</title> <!-- Título de la pestaña -->

    <style>
        /* Estilo general del cuerpo */
        body {
            font-family: Arial, sans-serif; /* Tipo de letra */
            background: linear-gradient(135deg, #43e97b, #38f9d7); /* Fondo degradado verde */
            display: flex; /* Activa flexbox */
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
            height: 100vh; /* Altura completa de la pantalla */
            margin: 0; /* Elimina márgenes */
        }

        /* Contenedor principal tipo tarjeta */
        .container {
            background: white; /* Fondo blanco */
            padding: 30px; /* Espaciado interno */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2); /* Sombra */
            text-align: center; /* Centra el contenido */
            width: 320px; /* Ancho */
        }

        /* Estilo del título */
        h1 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Estilo del campo de entrada */
        input {
            width: 90%; /* Ocupa casi todo el ancho */
            padding: 10px; /* Espacio interno */
            border-radius: 8px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde gris */
            outline: none; /* Quita borde azul por defecto */
            margin-top: 10px;
        }

        /* Efecto cuando el usuario hace clic en el input */
        input:focus {
            border-color: #43e97b;
            box-shadow: 0 0 5px rgba(67,233,123,0.5);
        }

        /* Estilo del botón */
        button {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background: #43e97b; /* Color verde */
            color: white;
            font-weight: bold;
            cursor: pointer; /* Cambia el cursor */
            transition: 0.3s; /* Animación */
        }

        /* Efecto cuando pasas el mouse sobre el botón */
        button:hover {
            background: #2bd67b;
            transform: scale(1.05); /* Agranda ligeramente */
        }

        /* Estilo del resultado */
        .resultado {
            margin-top: 20px;
            font-size: 18px;
            color: #222;
            font-weight: bold;
        }
    </style>
</head>

<body>

<!-- Contenedor principal -->
<div class="container">
    <h1>Convertir Pulgadas a Centimetros</h1>

    <!-- Formulario que envía datos por POST -->
    <form method="POST">
        Ingrese pulgadas:
        <!-- Campo donde el usuario ingresa el valor -->
        <input type="number" name="pulgadas" step="any" required>
        <br>
        <!-- Botón para enviar -->
        <button type="submit">Convertir</button>
    </form>

    <?php
    // Verifica si el formulario fue enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Guarda el valor ingresado
        $pulgadas = $_POST['pulgadas'];

        // Convierte pulgadas a centímetros (1 pulgada = 2.54 cm)
        $cm = $pulgadas * 2.54;

        // Muestra el resultado con 2 decimales
        echo "<div class='resultado'>Resultado: " . number_format($cm, 2) . " cm</div>";
    }
    ?>
</div>

</body>
</html>