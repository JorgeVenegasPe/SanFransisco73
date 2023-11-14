<?php
require_once("../Controlador/Login/Registro.php");
$obj = new usernameControler();
$obj->insertarUsuario(
    
    $_POST['email'],
    $_POST['usuario'],
    $_POST['password']
);


?>


