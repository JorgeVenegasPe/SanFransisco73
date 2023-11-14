<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script defer src="resources/js/face-api.min.js"></script>
    <script defer src="resources/js/scripts.js"></script>
</head>

<body>
    <?php
   require 'views/header.php';
  ?>
    <section class="IA-imagen" id="canvasSection">
        <div style="display:flex;flex-direction:row">
            <div class="video-captado">
                <video id="video" class="video" width="420" height="560" autoplay muted></video>
                <canvas id="capturaCanvas" width="420" height="560"></canvas>
            </div>
        </div>
        <div style="gap:20px; display:flex">
            <button class="capturarBtn" id="flechaIzquierda">
                << /button>
                    <button class="capturarBtn" id="capturarBtn">Capturar</button>
                    <button class="capturarBtn" id="flechaDerecha">></button>
        </div>
    </section>
</body>

</html>