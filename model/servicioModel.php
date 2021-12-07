<?php
require_once('Conexion.php');

class Servicio extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

     public function listar(){
            $smt=$this->db->prepare("SELECT * FROM servicio;");
            $smt->execute();
            $data=$smt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
    }

    public function add($NomSer){
        $statement=$this->db->prepare('CALL proInsertSer(:NomSer)');

            $statement->bindparam(':NomSer',$NomSer);
           
            if ($statement->execute()) {
               header('Location:../view/Servicio/servicio.php');
            }else{
                header('Location:../view/Servicio/servicio.php');
            }
    }
//funcion update para ejecutar necesita de unos datos 
    
    public function update($IdSer,$NomSer){
        //variable statement  utiliza el constructor  de la conexion utilice la variable de bd se utiliza en la conexion 
        //prepare  ejecute una accion  
        $statement=$this->db->prepare('CALL proUpdateSer(:IdSer,:NomSer)');
        $statement->bindparam(':IdSer',$IdSer);
        $statement->bindparam(':NomSer',$NomSer);
          
        if ($statement->execute()) {
           header('Location:../view/Servicio/servicio.php');
        }else{
           header('Location:../view/Servicio/servicio.php');

      }

    }


}

?>