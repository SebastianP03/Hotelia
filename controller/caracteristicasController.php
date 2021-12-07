<?php
    require_once('../model/caracteristicasModel.php');
//recibe el valor de los botones de los formularios
   
     $accion=$_POST['AccionC'];

     if ($accion == "Registrar") {
       
        $ModeloCaracteristicas=new Caracteristicas();

        $AirCar=$_POST['AirCar'];
        $TelCar=$_POST['TelCar'];
        $TipCar=$_POST['TipCar'];
        

        $ModeloCaracteristicas->add($AirCar,$TelCar,$TipCar);
     }

       
    if ($accion == "Actualizar") {

        $ModeloCaracteristicas=new Caracteristicas();    

        $IdCar=$_POST['IdCar'];
        $AirCar=$_POST['AirCar'];
        $TelCar=$_POST['TelCar'];
        $TipCar=$_POST['TipCar'];

     
       $ModeloCaracteristicas->update($IdCar,$AirCar,$TelCar,$TipCar);
       
    }



?>