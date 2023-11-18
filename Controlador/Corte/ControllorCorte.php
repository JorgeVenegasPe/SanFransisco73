<?php
class CorteControler{
	private $model;

	public function __construct(){
		require_once("Modelo/Corte/modelcortes.php");
		$this->model=new CorteModel();
	}
	public function InsertarProducto($rostro,$caracteristica,$imagen,$descripcion) {
        $id = $this->model->InsertarProducto($rostro,$caracteristica,$imagen,$descripcion);
        return ($id != false) ? header("Location: ../formulario-guardar.php") : header("Location: ../formulario-guardar.php");
    }
	public function ver_corte(){
    	return ($this->model->ver_corte()) ? $this->model->ver_corte():false;
    }
	public function ver_rostro(){
    	return ($this->model->ver_rostro()) ? $this->model->ver_corte():false;
    }
}

?>