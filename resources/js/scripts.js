const video = document.getElementById('video');
const capturarBtn = document.getElementById('capturarBtn');
const flechaIzquierda = document.getElementById('flechaIzquierda');
const flechaDerecha = document.getElementById('flechaDerecha');
const capturaCanvas = document.getElementById('capturaCanvas');
const canvasSection = document.getElementById('canvasSection');
const opcionesContainer = document.getElementById('opcionesContainer');

let isCaptured = false;
let currentImageIndex = 0;
const images = [
  { id: 5, description: 'El rostro alargado se caracteriza por su longitud mayor que la anchura, con líneas suaves y alargadas. Se sugieren peinados con volumen en los lados para equilibrar la longitud.', subtitle: 'Elongación Sofisticada', nombre: 'Alargado', path: 'resources/images/alargado.PNG' },
  { id: 3, description: 'El rostro ovalado se destaca por su equilibrio, con una longitud ligeramente mayor que la anchura. Es versátil y permite experimentar con diversos estilos de cabello y accesorios.', subtitle: 'Armonía en Proporciones', nombre: 'Ovalado', path: 'resources/images/ovalado.PNG' },
  { id: 4, description: 'El rostro en forma de diamante tiene pómulos prominentes y una frente y barbilla más estrechas. Ofrece versatilidad para probar distintos estilos de cabello y accesorios.', subtitle: 'Elegancia Angular', nombre: 'Diamante', path: 'resources/images/diamante.PNG' },
  { id: 1, description: 'El rostro redondo se caracteriza por su longitud y anchura casi iguales, con pómulos prominentes y líneas suaves. Busca estilos que alarguen visualmente el rostro, como peinados con capas y gafas angulares.', subtitle: 'La Suavidad de las Curvas', nombre: 'Redondo', path: 'resources/images/redondo.PNG' },
  { id: 2, description: 'El rostro cuadrado presenta una estructura angular con una frente, mandíbula y pómulos bien definidos. Se favorecen los peinados con textura y gafas de sol redondas o ovaladas.', subtitle: 'Estructura Angular', nombre: 'Cuadrado', path: 'resources/images/cuadrado.PNG' }
];

let overlayImage = new Image();
overlayImage.onload = () => {
  updateOverlayImage();
};

images.forEach((imagen, index) => {
  const opcionBtn = document.createElement('button');
  opcionBtn.classList.add('opcionBtn');
  opcionBtn.innerHTML = `<img src="${imagen.path}" alt="${imagen.nombre}" width="70" height="70" />`;

  opcionBtn.addEventListener('click', () => {
    currentImageIndex = index;
    updateOverlayImage();
  });

  opcionesContainer.appendChild(opcionBtn);
});

Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('models'),
  faceapi.nets.faceExpressionNet.loadFromUri('models')
]).then(() => {
  overlayImage.src = images[currentImageIndex].path;
  console.log('Imagen actual:', images[currentImageIndex].id);
  startVideo();
});

function startVideo() {
  navigator.getUserMedia(
    { video: {} },
    stream => {
      video.srcObject = stream;
      capturarBtn.disabled = false;
    },
    err => console.error(err)
  );
}

video.addEventListener('play', () => {
  const videoCaptadoDiv = document.querySelector('.video-captado');
  const canvas = faceapi.createCanvasFromMedia(video);
  videoCaptadoDiv.appendChild(canvas);
  const displaySize = { width: video.width, height: video.height };
  faceapi.matchDimensions(canvas, displaySize);

  setInterval(async () => {
    const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceExpressions();
    const resizedDetections = faceapi.resizeResults(detections, displaySize);

    canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);

    if (detections.length > 0) {
      const box = resizedDetections[0].detection.box;
      const scale = box.width / overlayImage.width;
      const scaledWidth = overlayImage.width * scale;
      const scaledHeight = overlayImage.height * scale;

      const ctx = canvas.getContext('2d');
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.drawImage(overlayImage, box.x, box.y, scaledWidth, scaledHeight);
      capturarBtn.disabled = false;
    } else {
      capturarBtn.disabled = true;
    }
  }, 500);  
});

flechaIzquierda.addEventListener('click', () => {
  currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
  updateOverlayImage();
  console.log('Imagen actual:', images[currentImageIndex].id);
});

flechaDerecha.addEventListener('click', () => {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  updateOverlayImage();
  console.log('Imagen actual:', images[currentImageIndex].id);
});

function updateOverlayImage() {
  overlayImage.src = images[currentImageIndex].path;
}
