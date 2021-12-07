<?php
require_once('Conexion.php');

class Caracteristicas extends Conexion{

    public function __construct(){
     $this->db=parent::__construct();
    }

 public function  listar(){
          $rows=null;
            $smt=$this->db->prepare("SELECT * FROM caracteristicas;");
            $smt->execute();
            while ($result=$smt->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }

    public function add($AirCar,$TelCar,$TipCar){
        $statement=$this->db->prepare('CALL proInsertCar(:AirCar,:TelCar,:TipCar)');

          
            $statement->bindparam(':AirCar',$AirCar);
            $statement->bindparam(':TelCar',$TelCar);
            $statement->bindparam(':TipCar',$TipCar);
          

            if ($statement->execute()) {
                header('Location:../view/Caracteristicas/caracteristicas.php');
            }else{
                header('Location:../view/Caracteristicas/caracteristicas.php');
            }
    }

    public function update($IdCar,$AirCar,$TelCar,$TipCar){       
        $statement=$this->db->prepare('CALL proUpdateCar(:IdCar,:AirCar,:TelCar,:TipCar)');

        $statement->bindparam(':IdCar',$IdCar);
        $statement->bindparam(':AirCar',$AirCar);
        $statement->bindparam(':TelCar',$TelCar);
        $statement->bindparam(':TipCar',$TipCar);

            if ($statement->execute()) {
                header('Location:../view/Caracteristicas/caracteristicas.php');
            }else{
                header('Location:../view/Caracteristicas/caracteristicas.php');
            }
    }

}
?>