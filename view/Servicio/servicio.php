<?php
require_once('../model/servicioModel.php');

$ModeloServicio=new Servicio();

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina servicio</title>
</head>
<body>
    <h2>Listado de servicio</h2>

     <div class="link-right">
      <a href="formServicio.php" class="link-primary">Agregar</a>
       <a href="apartadoHotel.php" class="link-primary">volver</a>
  </div>

    <table border="1">
        <tr>
            <th>Id Servicio</th>
            <th>Nombre de Servicio</th>         
            <th></th>
            <th></th>
        </tr>


        <tr>
        <?php
        $Servicio=$ModeloServicio->listar();

        if ($Servicio !=null) {
            foreach ($Servicio as $Ser) {
        ?>
            <td><?php echo $Ser['Id_Servicio']?></td>
            <td><?php echo $Ser['Nombre_Servicio']?></td>
         
            <th><a href="ActualizarSer.php?id=<?php echo $Hab['Id_Habitacion'] ?>" class="btn btn-info">Editar</th>                                      
            </tr>
        </tr>
        <?php
            }}
        ?>
    </table><br>


  
</body>
</html>
