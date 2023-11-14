<?php
require_once("../Controlador/Corte/rostro.php");

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtén el tipo de rostro desde el formulario
    $tipoRostro = $_POST["tipoRostro"];

    // Crea una instancia del controlador
    $rostroController = new RostroController();

    // Llama a la función para obtener la información de los cortes por tipo de rostro
    $result = $rostroController->obtenerInfoCortesPorRostro($tipoRostro);

    $htmlResultados = '';

    if (is_array($result)) {
        foreach ($result as $row) {
            $htmlResultados .= '<article class="card">';
            
            // Verifica si las claves necesarias están presentes en la fila antes de intentar acceder a ellas
            if (isset($row["imagen_base64"], $row["nombre_corte"], $row["descripcion"])) {
                $htmlResultados .= '<img class="card__image" src="data:image/jpeg;base64,' . $row["imagen_base64"] . '" alt="Corte Image">';
                
                $htmlResultados .= '<div class="card__body">';
                $htmlResultados .= '<h2 class="card__title">' . $row["nombre_corte"] . '</h2>';
                $htmlResultados .= '<p style="padding: 0 30px;">' . $row["descripcion"] . '</p>';
                $htmlResultados .= '<br>';
                $htmlResultados .= '<a href="./views/cortes.php" class="card-cta" id="enlace">Ver más &rarr;</a>';
                $htmlResultados .= '</div>';
            } else {
                // Manejar el caso en el que una de las claves no está definida
                $htmlResultados .= '<p>Error: Datos no disponibles</p>';
            }
        
            $htmlResultados .= '</article>';
        }
        
    } else {
        // Manejar el caso en el que $result no es un array
        echo "Error: La función obtenerInfoCortesPorRostro no devolvió un array.";
    }
    

    // Devolver HTML de resultados
    echo $htmlResultados;
}
?>
