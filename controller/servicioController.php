<?php
//llamado modelo
    require_once('../model/servicioModel.php');
//guarda el valor del boton
    $accion=$_POST['AccionS'];

    if ($accion == "Registrar") {
        $ModeloServicio=new Servicio();
        $NomSer=$_POST['NomSer'];

        $ModeloServicio->add($NomSer);
    }

    if ($accion == "Actualizar") {
        //define la variable de un objeto
        $ModeloServicio=new Servicio();
        //datos que recibe el formulario 
        $IdSer=$_POST['IdSer'];
        $NomSer=$_POST['NomSer'];
    
        //modelo hotel realiza la funcion llamada update lo cual le pasa  parametros

        $Modeloservicio->update($IdSer,$NomSer);
    }
?>