<?php 
    class Login {
        private $PDO;
        public function __construct()
        {
        require("../../Conexion/conexion.php");
        $con=new conexion();
        $this->PDO=$con->conexion();

        }
        public function validarDatos($usu, $pass) {
            if($_POST){
                session_start();
                $usu = $_POST['usu'];
                $pass = $_POST['pass'];
                $this->PDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $statement=$this->PDO->prepare("SELECT * FROM tb_usuario WHERE usuario= :u AND password= :p");
                $statement->bindParam(":u", $usu);
                
                $statement->bindParam(":p", $pass);
                $statement->execute();
                $usu = $statement->fetch(PDO::FETCH_ASSOC);
                if($usu){
                    $_SESSION['usuario'] = $usu["usuario"];
                    
                    header("location: ../../index.php");
                }else{
                    header("location: ../../Login_Registro.php?error=1");
                } 
            }
        }

    }
?>