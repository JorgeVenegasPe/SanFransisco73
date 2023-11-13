<?php
class userModel{
    private $PDO;
    public function __construct()
    {
        require_once("../Conexion/conexion.php");
        $con=new conexion();
        $this->PDO=$con->conexion();
    }
       
    public function insertar($email, $usuario, $password) {
        // Escapar los parámetros para evitar inyección de SQL
        $email = $this->PDO->quote($email);
        $usuario = $this->PDO->quote($usuario);
        $password = $this->PDO->quote($password);

        // Llamar al procedimiento almacenado para insertar un usuario
        $statement = $this->PDO->prepare("CALL sp_insert_user($email, $usuario, $password)");

        // Ejecutar la consulta
        return $statement->execute();
    }
   
}

?>