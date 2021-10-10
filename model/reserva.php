<?php
require_once '../../config/conexion.php';
session_start();

class Reserva extends Conexion{

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function listarRes(){
            $smt=$this->db->prepare("SELECT Nombre_Hotel,Direccion_Hotel, Fecha_Reserva,FechaEntrada_Reserva,FechaSalida_Reserva,TotalApagar_Reserva FROM reserva inner join reserva_habitacion on reserva.Id_Reserva = reserva_habitacion.Id_Reserva
            INNER join habitacion on reserva_habitacion.Id_Reserva_Habitacion = habitacion.Id_Reserva_Habitacion INNER join hotel on habitacion.Id_Hotel = hotel.Id_Hotel;");
            $smt->execute();
            $data=$smt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
    }

    public function agregar($nombre,$apellido,$nacimiento,$telefono,$documento,$correo,$clave){
        $smt=$this->db->prepare("INSERT INTO cliente (Nombres_Cliente, Apellidos_Cliente, FechaNac_Cliente, Telefono_Cliente, Numero_Documento_Cliente, Correo_cliente, Contraseña_Cliente) VALUES (:nombre, :apellido, :nacimiento, :telefono, :documento, :correo, :clave);");

        $smt->bindparam(':nombre',$nombre);
        $smt->bindparam(':apellido',$apellido);
        $smt->bindparam(':nacimiento',$nacimiento);
        $smt->bindparam(':telefono',$telefono);
        $smt->bindparam(':documento',$documento);
        $smt->bindparam(':correo',$correo);
        $smt->bindparam(':clave',$clave);

        if($smt->execute()){
            header('Location:../index.php');
        }
    }

    // public function actualizar($id,$fechaReserva,$fechaIngreso,$fechaSalida,$precio){ 
    //             $smt=$this->db->prepare("UPDATE reserva SET Fecha_Reserva = ':fechaReserva',FechaEntrada_Reserva = ':fechaIngreso', FechaSalida_Reserva = ':fechaSalida', TotalApagar_Reserva = ':precio' WHERE reserva.Id_Reserva=;':id'");		
    //             $smt->bindparam(':id',$id);
    //             $smt->bindparam(':fechaReserva',$fechaReserva);
    //             $smt->bindparam(':fechaIngreso',$fechaIngreso);
    //             $smt->bindparam(':fechaSalida',$fechaSalida);
    //             $smt->bindparam(':precio',$precio);

    //             if($smt->execute()){
    //                 header('Location: ../view/consultarReservas.php');
    //             }
    // }

    // public function eliminar($id){
    //             $smt = "DELETE FROM reserva WHERE Id_Reserva=':id' ";
    //             $smt->bindparam(':id',$id);

    //             if($smt->execute()){
    //                 header('Location: ../view/consultarReservas.php');
    //             }
    //     }
    
}
?>