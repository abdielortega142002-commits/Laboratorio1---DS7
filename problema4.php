<!DOCTYPE html> <!-- Define que es un documento HTML5 -->
<html lang="es"> <!-- Idioma español -->
<head>
    <meta charset="UTF-8"> <!-- Permite usar acentos -->
    <title>Hello World</title> <!-- Título de la pestaña -->

    <style>
        /* Estilo del fondo de la página */
        body {
            font-family: Arial, sans-serif; /* Tipo de letra */
            background: linear-gradient(135deg, #667eea, #764ba2); /* Fondo degradado */
            display: flex; /* Flexbox */
            justify-content: center; /* Centrado horizontal */
            align-items: center; /* Centrado vertical */
            height: 100vh; /* Alto de la pantalla */
            margin: 0; /* Quita márgenes */
        }

        /* Contenedor principal */
        .container {
            background: white; /* Fondo blanco */
            padding: 30px; /* Espaciado interno */
            border-radius: 15px; /* Bordes redondeados */
            box-shadow: 0px 10px 25px rgba(0,0,0,0.2); /* Sombra */
            text-align: center; /* Centra el contenido */
            width: 350px; /* Ancho */
        }

        /* Estilo del título */
        h1 {
            color: #333;
            margin-bottom: 15px;
        }

        /* Estilo del párrafo */
        p {
            color: #555;
            font-size: 16px;
        }

        /* Estilo para los nombres de autores */
        .autor {
            font-weight: bold; /* Texto en negrita */
            color: #667eea; /* Color azul */
        }
    </style>
</head>

<body>

<!-- Contenedor -->
<div class="container">

<?php 
// Definición de variables con los nombres de los autores
$author1 = "John Doe"; 
$author2 = "Max Mustermann"; 

// Muestra el título
echo "<h1>Hello World!</h1>";  

// Muestra el mensaje usando las variables dentro del texto
echo "<p>This dynamic web page was created by 
<span class='autor'>$author1</span> and 
<span class='autor'>$author2</span>.</p>"; 
?>

</div>

</body>
</html>