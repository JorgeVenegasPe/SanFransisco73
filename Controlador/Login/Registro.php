<?php
class usernameControler{
    private $model;
    public function __construct()
    {
        require_once("../Modelo/Login/Registro.php");
        $this->model=new UserModel();
    }
    public function insertarUsuario($email, $usuario, $password) {
        $id= $this->model->insertar($email, $usuario, $password);

        return ($id!=false) ? header("Location: ../Login_Registro.php") : header("Location: ../Login_Registro.php?enviado=true");
    
    }
} 
?>