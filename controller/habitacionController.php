<?php
    require_once('../model/habitacionModel.php');
//recibe el valor de los botones de los formularios
   
     $accion=$_POST['AccionH'];

     if ($accion == "Registrar") {
        $ModeloHabitacion=new Habitacion();

        $ImaHab=$_POST['ImaHab'];
        $CanHab=$_POST['CanHab'];
        $EstHab=$_POST['EstHab'];
        $DesHab=$_POST['DesHab'];
        $CosHab=$_POST['CosHab'];
        $IdHot=$_POST['IdHot'];
        //$IdReh=$_POST['IdReh'];

        $ModeloHabitacion->add($ImaHab,$CanHab,$EstHab,$DesHab,$CosHab,$IdHot);
     }

    //
   
    if ($accion == "Actualizar") {
        $ModeloHabitacion=new Habitacion ();

        $IdHab=$_POST['IdHab'];
        $ImaHab=$_POST['ImaHab'];
        $CanHab=$_POST['CanHab'];
        $EstHab=$_POST['EstHab'];
        $DesHab=$_POST['DesHab'];
        $CosHab=$_POST['CosHab'];
        //$IdReh=$_POST['IdReh'];

        $ModeloHabitacion->update($IdHab,$ImaHab,$CanHab,$EstHab,$DesHab,$CosHab);
    }




//$sql="UPDATE habitacion SET  Imagen_Habitacion='$Imagen_Habitacion',CantidadCamas_Habitacion='$CantidadCamas_Habitacion',Estado_Habitacion='$Estado_Habitacion',Descripcion_Habitacion='$Descripcion_Habitacion',Costo_Habitacion='$Costo_Habitacion' WHERE Id_Habitacion='$Id_Habitacion'";
//$query=mysqli_query($con,$sql);

   // if($query){
      //  Header("Location: habitacion.php");
  //  }



?>