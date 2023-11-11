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
  <section class="IA" id="canvasSection">
    <video id="video" class="video" width="320" height="560" autoplay muted></video>
  </section>
  <div>
    <label for="shapeSelect">Seleccionar forma:</label>
    <select id="shapeSelect">
      <option value="circle">Circular</option>
      <option value="triangle">Triangular</option>
    </select>
  </div>
</body>
</html>
