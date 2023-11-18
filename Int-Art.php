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
  <script defer src="resources/js/main.js"></script>
</head>
<body style="background-color: #181a1e;">
  <?php
   require 'views/header.php';
  ?>
  <section class="IA-imagen" id="canvasSection">
    <h1 class="section01">Escoge tu tipo de rostro</h1>
    <h1 class="section02">Escoge tu tipo de rostro</h1>
    <div style="display: flex;flex-direction:row;gap:10px">
      <div class="opciones-container" id="opcionesContainer">
          <!-- Aquí se agregarán las imágenes como botones -->
        </div>
        <div class="video-captado">
          <video id="video" class="video" width="400" height="710" autoplay muted></video>
        </div>
    </div>
    <div id="container-capturar" style="gap:20px; display:flex">
      <button class="capturarBtn" id="flechaIzquierda"><</button>
      <button class="capturarBtn" id="capturarBtn">Capturar</button>
      <button class="capturarBtn" id="flechaDerecha">></button>
    </div>
  </section>
  <script>
capturarBtn.addEventListener('click', () => {
  if (!isCaptured) {
    // Captura la imagen
    capturaCanvas.getContext('2d').drawImage(video, 0, 0, capturaCanvas.width, capturaCanvas.height);
    isCaptured = true;

    // Apaga la cámara
    video.srcObject.getTracks().forEach(track => track.stop());

    // Muestra la imagen capturada
    video.style.display = 'none';
    canvasSection.style.display = 'none';
    capturaCanvas.style.display = 'flex';

    // Muestra la sección de servicios
    servicesSection.style.display = 'flex';

    // Actualiza el contenido del elemento imagenSeleccionadaId
    const imagenSeleccionadaIdElement = document.getElementById('title');
    const imagenSeleccionadaIdElement2 = document.getElementById('sub-title');
    const imagenSeleccionadaIdElement3 = document.getElementById('descript');
    const idCapturado = images[currentImageIndex].id;
    const caracCapturado = images[currentImageIndex].subtitle;
    const nombreCapturado = images[currentImageIndex].nombre;
    const descripCapturado  = images[currentImageIndex].description;
    imagenSeleccionadaIdElement.textContent = `forma de rostro: ${idCapturado}`;
    imagenSeleccionadaIdElement2.textContent = `${caracCapturado}`;
    imagenSeleccionadaIdElement.textContent = `Forma del rostro ${nombreCapturado}`;
    imagenSeleccionadaIdElement3.textContent = `${descripCapturado}`;

    // Envía el ID al servidor y maneja la respuesta
    enviarIdAlServidor(idCapturado);
  }
});

function mostrarCortesEnLista(cortesArray) {
  // Elimina elementos existentes en la lista (si los hay)
  const listaCortes = document.getElementById('listaCortes');
  listaCortes.innerHTML = '';

  // Crea elementos <p> y añádelos a la lista
  cortesArray.forEach((corte) => {
    const nuevoElemento = document.createElement('div');
    nuevoElemento.innerHTML = `
            <article class="card" style="background: url('data:image/jpeg;base64,${corte.imagen}') center no-repeat;background-size:120%;">
              <div class="card__body">
                  <h2 class="card__title">${corte.nombre}</h2>
                  <p>
                  ${corte.descripcion}                      
                  </p>
                  <br>
              </div>
            </article>`;
    listaCortes.appendChild(nuevoElemento);
  });
}

function enviarIdAlServidor(id) {
  // Utiliza AJAX para enviar el ID al servidor
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'fetch_cortes.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Manejar la respuesta del servidor
      const cortesArray = JSON.parse(xhr.responseText);
      console.log('Cortes relacionados:', cortesArray);

      // Llama a la función para mostrar los cortes en la lista
      mostrarCortesEnLista(cortesArray);
    }
  };
  xhr.send(`id=${id}`);
}
</script>
<section class="services section" style="justify-content: center;display:none; padding:6em 3em" id="services">
  <div class="container flex-center">
      <h1 class="section01">Cortes recomendados por el tipo de rostro:</h1>
      <h1 class="section02">Cortes recomendados por el tipo de rostro:</h1>
      <div class="descrip-container">
        <canvas class="video" id="capturaCanvas" width="400" height="710"></canvas>
        <div class="info-descrip">
          <h2 id="title"></h2>
          <h3 id="sub-title"></h3>
          <p id="descript"></p>
        </div>
      </div>
      <h2 class="titulo">Cortes recomendados</h2>
      <br>
      <div class="services-container" id="listaCortes"></div>
  </div>
</section>

<?php
    require 'views/footer.php';
    ?>
</body>
</html>
