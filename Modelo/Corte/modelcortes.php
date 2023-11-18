<?php
class CorteModel{
	private $PDO;
	public function __construct(){
        require("Conexion/conexion.php");
		$con=new conexion();
		$this->PDO=$con->conexion();
	}
	public function InsertarProducto($rostro,$caracteristica,$imagen,$descripcion) {
        $statement=$this->PDO->prepare("INSERT INTO tb_rostro(rostro,caracteristicas,imagen, descripcion) VALUES (:rostro, :caracteristica, :imagen, :descripcion)");
        $statement->bindParam(':rostro', $rostro);
        $statement->bindParam(':caracteristica', $caracteristica);
        $statement->bindParam(':imagen', $imagen);
        $statement->bindParam(':descripcion', $descripcion);

        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }
	public function ver_corte(){
        $statement = $this->PDO->prepare("SELECT * FROM tb_cortes");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
	public function ver_rostro(){
        $statement = $this->PDO->prepare("SELECT * FROM tb_rostros");
        return ($statement->execute()) ? $statement->fetchAll() : false;
    }
}
?>
