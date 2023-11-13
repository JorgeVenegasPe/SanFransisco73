<?php

class control{
	private $model;

	public function __construct(){
		require_once("../../Modelo/Corte/modelcortes.php");
		$this->model=new userModel();
	}
	
    public function ver_corte_1(){
    	return ($this->model->ver_corte_1()) ? $this->model->ver_corte_1():false;
    }
	public function ver_corte_2(){
    	return ($this->model->ver_corte_2()) ? $this->model->ver_corte_2():false;
    }
	public function ver_corte_3(){
    	return ($this->model->ver_corte_3()) ? $this->model->ver_corte_3():false;
    }
	public function ver_corte_4(){
    	return ($this->model->ver_corte_4()) ? $this->model->ver_corte_4():false;
    }
	public function ver_corte_5(){
    	return ($this->model->ver_corte_5()) ? $this->model->ver_corte_5():false;
    }
	public function ver_corte_6(){
    	return ($this->model->ver_corte_6()) ? $this->model->ver_corte_6():false;
    }
	public function ver_corte_7(){
    	return ($this->model->ver_corte_7()) ? $this->model->ver_corte_7():false;
    }
	public function ver_corte_8(){
    	return ($this->model->ver_corte_8()) ? $this->model->ver_corte_8():false;
    }
	public function ver_corte_9(){
    	return ($this->model->ver_corte_9()) ? $this->model->ver_corte_9():false;
    }
	public function ver_corte_10(){
    	return ($this->model->ver_corte_10()) ? $this->model->ver_corte_10():false;
    
	}
	public function ver_corte_11(){
    	return ($this->model->ver_corte_11()) ? $this->model->ver_corte_11():false;
    }
	public function ver_corte_12(){
    	return ($this->model->ver_corte_12()) ? $this->model->ver_corte_12():false;
    }
	public function ver_corte_13(){
    	return ($this->model->ver_corte_13()) ? $this->model->ver_corte_13():false;
    }
	public function ver_corte_14(){
    	return ($this->model->ver_corte_14()) ? $this->model->ver_corte_14():false;
    }
	public function ver_corte_15(){
    	return ($this->model->ver_corte_15()) ? $this->model->ver_corte_15():false;
    }
	public function ver_corte_16(){
    	return ($this->model->ver_corte_16()) ? $this->model->ver_corte_16():false;
    }
	public function ver_corte_17(){
    	return ($this->model->ver_corte_17()) ? $this->model->ver_corte_17():false;
    }
	public function ver_corte_18(){
    	return ($this->model->ver_corte_18()) ? $this->model->ver_corte_18():false;
    }
	public function ver_corte_19(){
    	return ($this->model->ver_corte_19()) ? $this->model->ver_corte_19():false;
    }
	public function ver_corte_20(){
    	return ($this->model->ver_corte_20()) ? $this->model->ver_corte_20():false;
    }
	public function ver_corte_21(){
    	return ($this->model->ver_corte_21()) ? $this->model->ver_corte_21():false;
    }
	public function ver_corte_22(){
    	return ($this->model->ver_corte_22()) ? $this->model->ver_corte_22():false;
    }

}

?>