<?php
require_once('../../model/habitacionModel.php');
require_once('../../model/encargadoModel.php');
require_once('../../model/hotelModel.php');
$ModeloHabitacion=new Habitacion();
$ModeloEncargado=new Encargado();
$ModeloHotel=new Hotel();
$ModeloEncargado->validateSession();
$ModeloHotel->getIdHotel($_SESSION['ID']);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
        <title>Pagina Habitacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet"  href="css/style.css">
        <link rel="stylesheet"  href="css/styleImg.css">
  </head>
    <body>


      <div class="container">

        <div class="principal">
       
         <div class="row">

              <h4 class="display-4 text-center">Crear Habitacion</h4>
              <form action="../../controller/habitacionController.php" method="POST">

                <input type="hidden" name="IdHot" value="<?php echo $_SESSION['IDHOTEL']?>">
                <br><div class="mb-3">
                <label for="Descripcion_Habitacion" class="form-label">Descripcion</label>
                 <!--<br> <input type="text" class="form-control" name="DesHab" required placeholder="Descripcion ">-->


               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="DesHab" required placeholder="Descripcion de la habitacion"></textarea>
              	 
      	  
              	  <br><div class="form-group">
              	  <label for="CantidadCamas_Habitacion">Cantidad de camas </label>
                 <br> <input type="text" class="form-control" name="CanHab" required placeholder="Cantidad de camas ">
                 </div> 


                  <div class="col-sm-15">
                    <label for="">Archivo a subir:</label>
                  <form method="post" action="" entype="multipart/form-data">
                  <br> <input id="archivo" class="form-control" type="file" name="ImaHab" multiple="" accept="image/*" required><br>
                  </div>

                  <div class="barra">
                    <div class="barra_Azul" id="barra_estado">
                    <span></span>
                  </div>


                <br> <div class="form-group">
                 <label for="Costo_Habitacion">Costo</label>
                 <input type="number" class="form-control" name="CosHab" required placeholder="costo Habitacion">
                 </div>


                 <br> <div class="form group">
                 <select class="form-select"  name="EstHab" required>
                        <option selected>Estado Habitacion</option>
                        <option value="0">Inactivo</option>
                        <option value="1">Activo</option>
                        
                 </select><br>

  
                </div>
              
                <input type="submit" name="AccionH" value="Registrar">
              
            </form>


          </div>
        </div>
      </div>

    </body>
  </head>
</html>
