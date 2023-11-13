const video = document.getElementById('video');
const capturarBtn = document.getElementById('capturarBtn');
const flechaIzquierda = document.getElementById('flechaIzquierda');
const flechaDerecha = document.getElementById('flechaDerecha');
const capturaCanvas = document.getElementById('capturaCanvas');

let isCaptured = false;
let images = []; // Almacenará las rutas de las imágenes obtenidas desde la base de datos

fetch('Controlador/Corte/ControllorCorte.php')
  .then(response => {
    if (!response.ok) {
      throw new Error('Error al cargar las imágenes desde el servidor');
    }
    return response.json();
  })
  .then(data => {
    images = data;
    let currentImageIndex = 0;
    let overlayImage = new Image();
    
    overlayImage.onload = () => {
      updateOverlayImage();
    };

    Promise.all([
      faceapi.nets.tinyFaceDetector.loadFromUri('models'),
      faceapi.nets.faceLandmark68Net.loadFromUri('models'),
      faceapi.nets.faceRecognitionNet.loadFromUri('models'),
      faceapi.nets.faceExpressionNet.loadFromUri('models')
    ]).then(() => {
      overlayImage.src = images[currentImageIndex];
      startVideo();
    });
  })
  .catch(error => {
    console.error(error);
  });

capturarBtn.addEventListener('click', () => {
  if (!isCaptured) {
    capturaCanvas.getContext('2d').drawImage(video, 0, 0, capturaCanvas.width, capturaCanvas.height);
    isCaptured = true;
  }
});

let currentImageIndex = 0;

let overlayImage = new Image();
overlayImage.onload = () => {
  updateOverlayImage();
};

Promise.all([
  faceapi.nets.tinyFaceDetector.loadFromUri('models'),
  faceapi.nets.faceLandmark68Net.loadFromUri('models'),
  faceapi.nets.faceRecognitionNet.loadFromUri('models'),
  faceapi.nets.faceExpressionNet.loadFromUri('models')
]).then(() => {
  overlayImage.src = images[currentImageIndex];
  startVideo();
})

function startVideo() {
  navigator.getUserMedia(
    { video: {} },
    stream => {
      video.srcObject = stream;
      // Habilitar el botón capturar solo cuando la cámara está lista
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

  overlayImage.onload = () => {
    setInterval(async () => {
      const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceExpressions();
      const resizedDetections = faceapi.resizeResults(detections, displaySize);
      

      canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
      faceapi.draw.drawFaceLandmarks(canvas, resizedDetections);

      if (detections.length > 0) {
        const box = resizedDetections[0].detection.box;
        canvas.getContext('2d').drawImage(overlayImage, box.x, box.y, box.width, box.height);
        capturarBtn.disabled = false;
      } else {
        capturarBtn.disabled = true;
      }
    }, 100);
  };
});

flechaIzquierda.addEventListener('click', () => {
  currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
  updateOverlayImage();
});

flechaDerecha.addEventListener('click', () => {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  updateOverlayImage();
});

function updateOverlayImage() {
  overlayImage.src = images[currentImageIndex];
}
