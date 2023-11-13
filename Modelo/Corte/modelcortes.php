<?php
class userModel{
	private $PDO;
	public function __construct(){
        require("../../Conexion/conexion.php");
		$con=new conexion();
		$this->PDO=$con->conexion();
	}
	
	public function ver_corte_1(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=1;");
		return($statement->execute())?$statement->fetchaLL():false;
	}

	public function ver_corte_2(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=2;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_3(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=3;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_4(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=4;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_5(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=5;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_6(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=6;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_7(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=7;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_8(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=8;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_9(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=9;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_10(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=10;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_11(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=11;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_12(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=12;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_13(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=13;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_14(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=14;");
		return($statement->execute())?$statement->fetchaLL():false;
	}

	public function ver_corte_15(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=15;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_16(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=16;");
		return($statement->execute())?$statement->fetchaLL():false;
	}

	public function ver_corte_17(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=17;");
		return($statement->execute())?$statement->fetchaLL():false;
	}

	public function ver_corte_18(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=18;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_19(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=19;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_20(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=20;");
		return($statement->execute())?$statement->fetchaLL():false;
	}

	public function ver_corte_21(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=21;");
		return($statement->execute())?$statement->fetchaLL():false;
	}
	public function ver_corte_22(){
		$statement=$this->PDO->prepare("SELECT * FROM tb_cortes WHERE id_cortes=22;");
		return($statement->execute())?$statement->fetchaLL():false;
	}

}
?>
