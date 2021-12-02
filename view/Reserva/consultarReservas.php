<?php

require_once '../../model/reserva.php';
$model = new Reserva();
$reserva=$model->listarRes($_SESSION['Id']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="../../assets/css/consultarReservas.css">
</head>
<body>
    <header>
        <h3 class="text-center text-light">Reservas</h3>
    </header>

    <div class="container">
        <div class="table responsive">
            <form action="../../controller/reservaController.php" method="get">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>Numero reserva</th>
                <th>Nombre hotel</th>
                <th>Direccion</th>
                <th>Habitacion</th>
                <th>Fecha de la reserva</th>
                <th>Fecha entrada</th>
                <th>Fecha salida</th>
                <th>Precio</th>
                <th>Accion</th>
            </tr>
        </thead>
      
        <tbody>
              <?php
        foreach ($reserva as $dato){
        ?>
            <tr>  
            <td><?php echo $dato['Id_Reserva'] ?></td>
                <td><?php echo $dato['Nombre_Hotel'] ?></td>
                <td><?php echo $dato['Direccion_Hotel'] ?></td>
                <td><?php echo $dato['Descripcion_Habitacion'] ?></td>
                <td><?php echo $dato['Fecha_Reserva'] ?></td>
                <td><?php echo $dato['FechaEntrada_Reserva'] ?></td>
                <td><?php echo $dato['FechaSalida_Reserva'] ?></td>
                <td><?php echo "$".$dato['TotalApagar_Reserva'] ?></td>
                <td></td>   
            </tr>
      <?php
        }
        ?>
        </tbody>
  
    </table>
    </form>
</div>
</div>
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formReservas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nameHotel" class="col-form-label">Nombre Hotel:</label>
                <input type="text" class="form-control" id="nameHotel">
                </div>
                <div class="form-group">
                <label for="direHotel" class="col-form-label">Direccion:</label>
                <input type="text" class="form-control" id="direHotel">
                </div>
                <div class="form-group">
                <label for="descHab" class="col-form-label">Habitacion:</label>
                <input type="text" class="form-control" id="descHab">
                </div>
                <div class="form-group">
                <label for="fechaRes" class="col-form-label">Fecha reserva:</label>
                <input type="datetime" class="form-control" id="fechaRes"?>
                </div>  
                <div class="form-group">
                <label for="fechaIngreso" class="col-form-label">Fecha Ingreso:</label>
                <input type="date" class="form-control" id="fechaIngreso" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
                </div>                
                <div class="form-group">
                <label for="fechaSalida" class="col-form-label">Fecha salida:</label>
                <input type="date" class="form-control" id="fechaSalida" min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
                </div>       
                <div class="form-group">
                <label for="pago" class="col-form-label">Precio a pagar:</label>
                <input type="number" class="form-control" id="pago">
                </div>         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
</body>
<script src="../../library/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<script src="../../assets/js/consultarReservas.js"></script>
</html>