<?php
class RostroController {
    private $model;

    public function __construct() {
        require_once(__DIR__ . '/../../Modelo/Corte/rostro.php');


        $this->model = new userModel();
    }

    public function obtenerInfoCortesPorRostro($tipoRostro) {
        // Obtener información de cortes por tipo de rostro
        $infoCortes = $this->model->obtenerInfoCortesPorRostro($tipoRostro);

        // Aquí puedes realizar cualquier manipulación necesaria de los resultados

        // Devolver la información de los cortes
        return $infoCortes;
    }

    public function ver_corte(){
    	return ($this->model->ver_corte()) ? $this->model->ver_corte():false;
    }
}
?>
