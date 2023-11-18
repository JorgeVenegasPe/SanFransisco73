<?php

$id = $_POST['id'];

// Realiza la conexión a la base de datos (ajusta las credenciales según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_barberia";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
// Verifica la conexión
$idEscapado = $conn->real_escape_string($id);

$consulta = "SELECT nombre_corte, descripcion, imagen FROM tb_cortes WHERE id_rostro = '$idEscapado'";
$resultado = $conn->query($consulta);

// Maneja el resultado de la consulta según tus necesidades
if ($resultado) {
    $cortes = array();

    while ($fila = $resultado->fetch_assoc()) {
        $imagenBase64 = base64_encode($fila['imagen']);
        $cortes[] = array(
            'nombre' => $fila['nombre_corte'],
            'descripcion' => $fila['descripcion'],
            'imagen' => $imagenBase64
        );
    }
    
    echo json_encode($cortes);
} else {    
    // Si hay un error en la consulta, puedes manejarlo aquí
    echo "Error en la consulta: " . $conn->error;
}

// Cierra la conexión
$conn->close();
?>