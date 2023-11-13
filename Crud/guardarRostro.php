<?php
require_once("../Controlador/Corte/ControllorCorte.php");
$obj = new control();

$imagen = file_get_contents($_FILES['imagen']['tmp_name']);

$obj->InsertarProducto($_POST['rostro'],$_POST['caracteristica'],$imagen,$_POST['descripcion']);
?>