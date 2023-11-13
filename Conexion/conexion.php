<?php
class conexion{
    private $host="localhost";
    private $dbname="bd_barberia";
    private $user="root";
    private $password="";

    public function conexion(){
        try{
            $PDO=new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
            
            return $PDO;

        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}
?>