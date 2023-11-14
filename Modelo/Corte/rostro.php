<?php
class userModel{
    private $PDO;
    public function __construct()
    {
        require_once("../Conexion/conexion.php");
        $con=new conexion();
        $this->PDO=$con->conexion();
    }
       
    public function obtenerInfoCortesPorRostro($tipoRostro) {
        // Escapar el parámetro para evitar inyección de SQL
        $tipoRostro = $this->PDO->quote($tipoRostro);
    
        // Llamar al procedimiento almacenado para obtener información de cortes por tipo de rostro
        $statement = $this->PDO->prepare("CALL sp_cortes_por_rostro($tipoRostro)");
    
        // Ejecutar la consulta
        $statement->execute();
    
        // Obtener los resultados
        $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        // Convertir las imágenes a Base64
        foreach ($resultados as &$fila) {
            // Suponiendo que la columna 'imagen' contiene datos binarios
            $fila['imagen_base64'] = base64_encode($fila['imagen']);
        }
    
        // Devolver los resultados con imágenes en formato Base64
        return $resultados;
    }
    public function ver_corte(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes ");
		return($statement->execute())?$statement->fetchaLL():false;
	}
}

?>