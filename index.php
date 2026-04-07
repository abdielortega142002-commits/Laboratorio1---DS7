<!DOCTYPE html> <!-- Define que el documento es HTML5 -->
<html lang="es"> <!-- Indica que el idioma es español -->
<head>
    <meta charset="UTF-8"> <!-- Permite usar acentos y caracteres especiales -->
    <title>Problema #1</title> <!-- Título de la pestaña -->

    <style>
        /* Estilos generales de la página */
        body {
            font-family: Arial, sans-serif; /* Tipo de letra */
            background: linear-gradient(135deg, #4facfe, #00f2fe); /* Fondo degradado */
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
            text-align: center; /* Centra el texto */
            width: 300px; /* Ancho fijo */
        }

        /* Estilo del título */
        h1 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Estilo del input */
        input {
            width: 90%; /* Ocupa casi todo el ancho */
            padding: 10px; /* Espacio interno */
            border-radius: 8px; /* Bordes redondeados */
            border: 1px solid #ccc; /* Borde gris */
            outline: none; /* Quita el borde azul por defecto */
            margin-top: 10px;
        }

        /* Efecto cuando haces clic en el input */
        input:focus {
            border-color: #4facfe;
            box-shadow: 0 0 5px rgba(79,172,254,0.5);
        }

        /* Estilo del botón */
        button {
            margin-top: 15px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            background: #4facfe; /* Color azul */
            color: white;
            font-weight: bold;
            cursor: pointer; /* Cursor tipo mano */
            transition: 0.3s; /* Animación */
        }

        /* Efecto hover del botón */
        button:hover {
            background: #00c6ff;
            transform: scale(1.05); /* Agranda un poco */
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
    <h1>Área de un Círculo</h1>

    <!-- Formulario que envía datos por método POST -->
    <form method="POST">
        Ingrese el radio:
        <!-- Campo donde el usuario escribe el radio -->
        <input type="number" name="radio" step="any" required>
        <br>
        <!-- Botón para enviar el formulario -->
        <button type="submit">Calcular</button>
    </form>

    <?php
    // Verifica si el formulario fue enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Guarda el valor ingresado por el usuario
        $radio = $_POST['radio'];

        // Calcula el área del círculo (π * radio²)
        $area = pi() * pow($radio, 2);

        // Muestra el resultado con 2 decimales
        echo "<div class='resultado'>Área: " . number_format($area, 2) . "</div>";
    }
    ?>
</div>

</body>
</html>