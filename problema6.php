<!DOCTYPE html> <!-- Define documento HTML5 -->
<html lang="es"> <!-- Idioma español -->
<head>
    <meta charset="UTF-8"> <!-- Permite caracteres especiales -->
    <title>Calculadora</title>

    <style>
        /* Estilo general de la página */
        body {
            font-family: Arial, sans-serif; /* Fuente */
            background: linear-gradient(135deg, #667eea, #764ba2); /* Fondo degradado */
            display: flex; /* Flexbox */
            justify-content: center; /* Centrado horizontal */
            align-items: center; /* Centrado vertical */
            height: 100vh; /* Altura completa */
            margin: 0; /* Sin márgenes */
        }

        /* Contenedor principal */
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

        /* Inputs y select */
        input, select {
            width: 90%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            margin-top: 10px;
        }

        /* Efecto al enfocar */
        input:focus, select:focus {
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102,126,234,0.5);
        }

        /* Botón */
        input[type="submit"] {
            margin-top: 15px;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #667eea;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        /* Hover del botón */
        input[type="submit"]:hover {
            background: #5a67d8;
            transform: scale(1.05);
        }

        /* Resultado */
        .resultado {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        /* Mensaje de error */
        .error {
            color: red;
        }

        /* Resultado correcto */
        .ok {
            color: green;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Calculadora Básica</h1>

    <!-- Formulario -->
    <form method="post">
        Número 1:
        <input type="number" name="num1" step="any" required> <!-- Primer número -->

        Número 2:
        <input type="number" name="num2" step="any" required> <!-- Segundo número -->

        Operación:
        <select name="operacion"> <!-- Selección de operación -->
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

        <input type="submit" value="Calcular"> <!-- Botón -->
    </form>

    <?php
    // Verifica si el formulario fue enviado
    if ($_POST) {

        // Guarda los valores ingresados
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        // Validación básica
        if ($num1 === "" || $num2 === "") {
            echo "<div class='resultado error'>Por favor ingrese ambos números</div>";
        } else {

            // Estructura de control para elegir la operación
            switch ($operacion) {

                case "suma":
                    $resultado = $num1 + $num2; // Suma
                    echo "<div class='resultado ok'>Resultado: $resultado</div>";
                    break;

                case "resta":
                    $resultado = $num1 - $num2; // Resta
                    echo "<div class='resultado ok'>Resultado: $resultado</div>";
                    break;

                case "multiplicacion":
                    $resultado = $num1 * $num2; // Multiplicación
                    echo "<div class='resultado ok'>Resultado: $resultado</div>";
                    break;

                case "division":
                    // Validación para evitar división por 0
                    if ($num2 == 0) {
                        echo "<div class='resultado error'>Error: No se puede dividir entre 0</div>";
                    } else {
                        $resultado = $num1 / $num2; // División
                        echo "<div class='resultado ok'>Resultado: " . number_format($resultado, 2) . "</div>";
                    }
                    break;
            }
        }
    }
    ?>
</div>

</body>
</html>