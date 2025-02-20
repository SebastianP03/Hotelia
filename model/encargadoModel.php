<?php
require_once("Conexion.php");
session_start();

class Encargado extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function login($CorEnc,$ConEnc){
        $rows=null;
        $statement=$this->db->prepare("CALL proLoginEnc(:CorEnc,:ConEnc)");
        $statement->bindparam(':CorEnc',$CorEnc);
        $statement->bindparam(':ConEnc',$ConEnc);
        $statement->execute();
        if ($statement->rowCount()==1) {
            $result=$statement->fetch();
            $_SESSION['ID']=$result['Id_Encargado'];
            $_SESSION['NOMBRES']=$result['Nombres_Encargado'];
            $_SESSION['APELLIDOS']=$result['Apellidos_Encargado'];
            $_SESSION['CORREO']=$result['Correo_Encargado'];
            return true;
        }
        return false;
    }
    
    public function validateSession(){
        if ($_SESSION['ID']==null) {
            header('Location:../../index.php');
        }
    }

    public function add($NomEnc,$ApeEnc,$FecNacEnc,$TelEnc,$NumDocEnc,$CorEnc,$ConEnc,$TipoDoc){
        $statement=$this->db->prepare('CALL proInsertEnc(:NomEnc,:ApeEnc,:FecNacEnc,:TelEnc,:NumDocEnc,:CorEnc,:ConEnc,:TipoDoc);');
            $statement->bindparam(':NomEnc',$NomEnc);
            $statement->bindparam(':ApeEnc',$ApeEnc);
            $statement->bindparam(':FecNacEnc',$FecNacEnc);
            $statement->bindparam(':TelEnc',$TelEnc);
            $statement->bindparam(':NumDocEnc',$NumDocEnc);
            $statement->bindparam(':CorEnc',$CorEnc);
            $statement->bindparam(':ConEnc',$ConEnc);
            $statement->bindparam(':TipoDoc',$TipoDoc);
            
            if($statement->execute()){
                header('Location:../view/EncargadoView/indexEncargado.php');
            }else{
                header('Location:../../index.php');
            }
    }

    public function getIdEnc($idEnc){
        $rows=null;
        $statement=$this->db->prepare('CALL proInfoEnc(:idEnc);');
        $statement->bindparam(':idEnc',$idEnc);
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows;
        
    }

    public function update($IdEnc,$NomEnc,$ApeEnc,$TelEnc,$CorEnc,$ConEnc){
        $statement=$this->db->prepare('CALL proUpdateEnc(:IdEnc,:NomEnc,:ApeEnc,:TelEnc,:CorEnc,:ConEnc);');
            $statement->bindparam(':IdEnc',$IdEnc);
            $statement->bindparam(':NomEnc',$NomEnc);
            $statement->bindparam(':ApeEnc',$ApeEnc);
            $statement->bindparam(':TelEnc',$TelEnc);
            $statement->bindparam(':CorEnc',$CorEnc);
            $statement->bindparam(':ConEnc',$ConEnc);
            if($statement->execute()){
                header('Location:../view/EncargadoView/perfilEncargado.php');
            }else{
                header('Location:../view/EncargadoView/perfilEncargado.php');
            }
    }

    public function signOut(){
        session_unset();
        session_destroy();
        header('Location:../index.php');
    }


    public function Reporte($IdEnc,$Rango){
        $rows=null;
        $statement=$this->db->prepare('call proReporte (:IdEnc,:Rango);');
        $statement->bindparam(':IdEnc',$IdEnc);
        $statement->bindparam(':Rango',$Rango);
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows; 
    }

    public function ReservasHotel($IdEnc){
        $rows=null;
        $statement=$this->db->prepare('call proReservasHotel (:IdEnc);');
        $statement->bindparam(':IdEnc',$IdEnc);
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows; 
    }

    public function listarHabitaciones($IdEnc){
        $rows=null;
        $statement=$this->db->prepare('call listarHabitacionesOferta (:IdEnc);');
        $statement->bindparam(':IdEnc',$IdEnc);
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows; 
    }

    public function infoHabitacionOferta($IdHab){
        $rows=null;
        $statement=$this->db->prepare('select * from habitacion where Id_Habitacion = :IdHab;');
        $statement->bindparam(':IdHab',$IdHab);
        $statement->execute();
        while ($result=$statement->fetch()) {
            $rows[]=$result;
        }
        return $rows; 
    }
    public function oferta($IdHab, $CosHab){
        $rows=null;
        $statement=$this->db->prepare('update habitacion set Costo_Habitacion = :CosHab where Id_Habitacion = :IdHab');
        $statement->bindparam(':IdHab',$IdHab);
        $statement->bindparam(':CosHab',$CosHab);
        if($statement->execute()){
            header('Location:../view/EncargadoView/GenerarOfertas.php');
        }else{
            header('Location:../view/EncargadoView/Oferta.php');
        } 
    }
}
?>