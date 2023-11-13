<?php 
    if (isset($_POST["usu"]) && isset($_POST["pass"])) {
        require("../../Modelo/Login/ModelLogin.php");
        $validar = new Login();
        $validar->validarDatos($_POST["usu"], $_POST["pass"]);
    } else {
        header("location:../Login_Registro.php");
       
    }
?>

