<?php
class CorteModel{
    private $PDO;
    public function __construct()
    {
        require_once(__DIR__ . "/../../Conexion/conexion.php");

        $con = new conexion();
        $this->PDO = $con->conexion();
    }
       
    public function ver_corte(){
        $statement = $this->PDO->prepare("SELECT * FROM tb_cortes");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
}
?>
