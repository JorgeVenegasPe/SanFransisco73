<?php
class CorteControler{
    private $model;
    public function __construct()
    {      
        require_once(__DIR__ . "/../../Modelo/Corte/ModelCortes.php");

        
        $this->model=new CorteModel();
    }
    public function ver_corte(){
    	return ($this->model->ver_corte()) ? $this->model->ver_corte():false;
    }
} 
?>