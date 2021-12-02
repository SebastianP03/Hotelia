<?php

require_once('../model/servicioModel.php');
//$ModeloServicio=new Hotel();

?>

<!DOCTYPE html>
<html lang="es">
  <head>
        <title>Pagina de servicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet"  href="css/style.css">
  </head>
    <body>

         <div class="container">
       
         <div class="row">


         <h4 class="display-4 text-center">Registrar Servicio</h4>
 


    <a href="apartadoHotel.php"><button>Volver</button></a><br><br>



    <form action="../controller/servicioController.php" method="POST">

            <input type="hidden" name="IdSer" placeholder="Id Servicio" required><br>

        <div class="form-group">
        <label for="Nombre_Servicio">Nombre Servicio </label>
        <br> <input type="text" class="form-control" name="Nomser" required placeholder="Nombre servicio ">
         </div> <br>
        
        <input type="submit" name="AccionS" class="btn btn-primary" value="Registrar">
        
         <a href="apartadoHotel.php"><button>Volver</button></a><br><br>

    </form>
</body>
</html>