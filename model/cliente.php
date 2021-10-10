<?php

require_once ('conexion.php');
session_start();

class Cliente extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function tipoDoc(){
        $smt=$this->db->prepare("SELECT * FROM tipodocumento;");
        $smt->execute();
        $data=$smt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
}

    public function login($correo,$clave){
        $rows=null;
        $statement=$this->db->prepare("SELECT * FROM cliente WHERE Correo_Cliente =:correo and Contraseña_Cliente = :clave");
        $statement->bindparam(':correo',$correo);
        $statement->bindparam(':clave',$clave);
        $statement->execute();
        if ($statement->rowCount()==1) {
            $result=$statement->fetch();
            $_SESSION['Nombre']=$result['Nombres_Cliente'];
            return true;
        }
        return false;
    }

    public function agregar($nombre,$apellido,$fechaNac,$telefono,$tipoDoc,$numDoc,$correo,$clave){
        $smt=$this->db->prepare("INSERT INTO cliente (Nombres_Cliente, Apellidos_Cliente, FechaNac_Cliente, Telefono_Cliente, Numero_Documento_Cliente, Correo_cliente, Contraseña_Cliente, Id_TipoDocumento) VALUES (:nombre, :apellido, :fechaNac, :telefono, :numDoc, :correo, :clave, :tipoDoc);");

        $smt->bindparam(':nombre',$nombre);
        $smt->bindparam(':apellido',$apellido);
        $smt->bindparam(':fechaNac',$fechaNac);
        $smt->bindparam(':telefono',$telefono);
        $smt->bindparam(':tipoDoc',$tipoDoc);
        $smt->bindparam(':numDoc',$numDoc);
        $smt->bindparam(':correo',$correo);
        $smt->bindparam(':clave',$clave);

        if($smt->execute()){
            header('Location:../view/login.php');
        }
    }
}
?>