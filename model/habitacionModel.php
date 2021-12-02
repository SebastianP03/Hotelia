<?php
require_once('Conexion.php');

class Habitacion extends Conexion{

    public function __construct(){
     $this->db=parent::__construct();
    }

 public function  listar($idHot){
          $rows=null;
            $statement=$this->db->prepare("CALL proInfoHab (:idHot)");
            $statement->bindparam(':idHot',$idHot);
            $statement->execute();
            while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }

    public function add($ImaHab,$CanHab,$EstHab,$DesHab,$CosHab,$IdHot){
        $statement=$this->db->prepare('CALL proInsertHab(:ImaHab,:CanHab,:EstHab,:DesHab,:CosHab,:IdHot)');

            $statement->bindparam(':ImaHab',$ImaHab);
            $statement->bindparam(':CanHab',$CanHab);
            $statement->bindparam(':EstHab',$EstHab);
            $statement->bindparam(':DesHab',$DesHab);
            $statement->bindparam(':CosHab',$CosHab);
            $statement->bindparam(':IdHot',$IdHot);
            //$statement->bindparam(':IdReh',$IdReh);

            if ($statement->execute()) {
                header('Location:../view/habitacion/habitacion.php');
            }else{
                header('Location:habitacion.php');
            }
    }

    public function update($IdHab,$ImaHab,$CanHab,$EstHab,$DesHab,$CosHab){       
        $statement=$this->db->prepare('CALL proUpdateHab(:IdHab,:ImaHab,:CanHab,:EstHab,:DesHab,:CosHab)');

            $statement->bindparam(':IdHab',$IdHab);
            $statement->bindparam(':ImaHab',$ImaHab);
            $statement->bindparam(':CanHab',$CanHab);
            $statement->bindparam(':EstHab',$EstHab);
            $statement->bindparam(':DesHab',$DesHab);
            $statement->bindparam(':CosHab',$CosHab);

            if ($statement->execute()) {
                header('Location:../view/habitacion/habitacion.php');
            }else{
                header('Location:../view/habitacion/habitacion.php');
            }
    }

    public function getIdHab($IdHab){
        $rows=null;
        $statement=$this->db->prepare('SELECT * FROM habitacion where Id_Habitacion = :IdHab');
        $statement->bindparam(':IdHab',$IdHab);
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
    }

}


?>