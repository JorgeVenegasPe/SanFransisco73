<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/info_rostro.css">
    <link rel="stylesheet" href="resources/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="resources/js/face-api.min.js"></script>
    <script defer src="resources/js/scripts.js"></script>
    <title>IA</title>
</head>

<body>
    <?php
    require 'views/header.php';
    ?>
    <br><br><br><br><br>
    <h1 style="--d: .1s;">Reconoce tu Tipo de Rostro</h1>
    <p>¡Bienvenido a nuestra innovadora aplicación de reconocimiento facial! Descubre cómo la magia de la tecnología
        puede revelar la singularidad de tu rostro. Explora y elige tu corte ideal, diseñado específicamente para
        realzar las características de tu tipo de rostro. ¡Descubre la mejor versión de ti mismo!</p>

    <div class="contenedor">

        <div class="IA-imagen" id="canvasSection">
            <div style="display:flex;flex-direction:row">
                <div class="video-captado">
                    <video id="video" class="video" width="320" height="560" autoplay muted></video>
                    <canvas id="capturaCanvas" width="320" height="560"></canvas>
                </div>
            </div>
            <div style="gap:20px; display:flex">
                <button class="capturarBtn" id="flechaIzquierda">
                    < </button>
                        <button class="capturarBtn" id="capturarBtn">Capturar</button>
                        <button class="capturarBtn" id="flechaDerecha">></button>
            </div>
        </div>

        <div class="resultado">
            <form id="formTipoRostro">
                <label for="tipoRostro">Resultado</label>
                <br>
                <br>
                <input type="text" id="tipoRostro" name="tipoRostro" required>
                <br>
                <br>
                <input type="button" value="Enviar" onclick="obtenerCortes()">
            </form>

        </div>
    </div>
    <br>
    <!-- Contenedor para mostrar resultados -->
    <div id="resultadosCortes" class="resul_cortes"></div>


    <h2>Tipo de Rostro: </h2>
    <div class="contenedor_resultado">
        <div class="">

        </div>
        <div class="">

        </div>
    </div>

    <script>
    function obtenerCortes() {
        var tipoRostro = document.getElementById("tipoRostro").value;
        var resultadosContainer = document.getElementById("resultadosCortes");

        // Realizar la solicitud AJAX
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Actualizar el contenido de resultados
                resultadosContainer.innerHTML = xhr.responseText;
            }
        };

        xhr.open("POST", "Crud/infoRostro.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("tipoRostro=" + tipoRostro);
    }
    </script>


</body>

</html>