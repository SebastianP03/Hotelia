<?php
require_once '../../model/reserva.php';
$model = new Reserva();
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Hotelia</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../assets/css/jquery-ui.css">
        <link rel="stylesheet" href="../../assets/css/main.css">
        <link rel="stylesheet" href="../../assets/fonts/flaticon.css">
        <link rel="stylesheet" href="../../assets/css/mobile.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>


        <script src="../../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body>
    
    <div class="main-wrap">
      <header class="mini-header">
              <a class="menu glyphicon glyphicon-align-justify" href="#"></a>
            <a class="logo" href="#">
                <img src="../../assets/images/logo.png" alt="logo" />
            </a>
             <a class="search glyphicon glyphicon-search" href="#"></a>
      </header>
      
      <header class="main-header" id="header">
            	<div class="top clearfix">
                	<div class="container">
                    	<ul class="pull-left contact-info">
                            <li><i class="glyphicon glyphicon-envelope"></i> info@stravel.com</li>
                            <li><i class="glyphicon glyphicon-phone"></i> +62903244222</li>
                        </ul>
                </div>
            </div>
                
            <div class="main-menu">
                	<div class="container">
                    	<a href="#" class="cur pull-left">
                            <span class="text-blue text-big">Hotelia</span>
                            Nuestros <strong class="text-blue">servicios</strong>
                        </a>
                        <a href="#" class="pull-left">
                            <span class="text-blue text-big">Popular</span>
                            Sitios recomendados para tu viaje
                        </a>
                        <a class="logo" href="../../index.php">
                            <img src="../../assets/images/logo.png" alt="logo" />
                        </a>
                        <a href="#" class="pull-right">
                            <span class="text-blue text-big">¿Por qué Hotelia?</span>
                            Las ventajas que te ofrecemos
                        </a>
                        <a href="#" class="pull-right">
                            <span class="text-blue text-big">Soporte</span>
                            Todo sobre nosotros
                        </a>
                    </div>
                </div>
                <span class="glyphicon glyphicon-align-justify">&nbsp;</span>
            </header>
        	<!-- InstanceBeginEditable name="yieldyu" -->
            <div class="container">               <?php
                               if($_SESSION!=null){
                                $reserva=$model->ticket($_SESSION['Id']);
                                if ($model !=null) {
                                    foreach ($reserva as $res) {
                            ?>
            <ul class="breadcrumb">
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="javascript:history.go(-3)"><?php echo $res['Nombre_Hotel']?></a></li>
                    <li><a href="#">Reservar</a></li>
                </ul>
                
                <div class="row">
                	<div class="step col-md-12">
                        <ul class="clearfix">
                            <li class="done">
                                <span class="tooltip-s">Datos</span>
                                <span class="number">1</span>
                            </li>
                            <li class="done">
                                <span class="tooltip-s">Pago</span>
                                <span class="number">2</span>
                            </li>
                            <li class="cur">
                                <span class="tooltip-s">Ticket</span>
                                <span class="number">3</span>
                            </li>
                        </ul>
                    </div>
                </div>
 
                <div class="col-md-2"></div>
                <section class="row e-ticket step-content text-center">
                	<div class="col-md-8 ">
                    	<div class="tiles-white row">
                            <h3 class="tiles-title">
                            	<strong class="text-blue">Exito.</strong> Tu reserva se ha realizado.
                            </h3>
                            <div class="alert alert-info">
                               Se ha enviado un correo con la informacion de tu reserva.
                            </div>

                            <nav class="pull-right hidden-xs pagination-tiket">
                            	<a href="#" class="cur">&lsaquo; Anterior</a>
                                <span>Pagina: 1/2</span>
                                <a href="#">Siguiente &rsaquo;</a>
                            </nav>
                            <div class="clear"></div>
                            <section class="e-tiket-ctn">
                            	<div class="t-head">
                                	<img src="../../assets/images/logo.png" alt="logo" />
                                	<strong>Informacion de la reserva</strong>
                                    <span class="code">
                                    	Numero de la reserva
                                        <strong><?php echo $res['Id_Reserva']?></strong>
                                    </span>
                                </div>
                                <div class="t-route clearfix">

                                </div>
                                <div class="t-body">
                                	<p class="info">
                                    	<strong>Nota :</strong> Recuerda que si quieres cancelar una reserva deber hacerlo anterior a 24 horas de la fecha de entrada. Si lo haces fuera de tiempo, tu dinero no se reembolsara.
                                    </p>
                                    <ul class="step-guide clearfix m-b-20">
                                    	<li style="width:37%">
                                        	<img src="../../assets/images/identitas.png" alt="" class="p-t-5"/>
                                            Al momento de ingresar al hotel debe mostrar este ticket electronico
                                        </li>
                                        <li style="width:25%">
                                        	<img src="../../assets/images/time.png" alt="" />
                                            Debe llegar con <strong>60 minutos</strong><br> de anterioridad.
                                        </li>
                                        <li style="width:35%">
                                        	<img src="../../assets/images/info.png" alt="" />
                                            La hora de la reserva es la hora local de donde se ubica el hotel
                                        </li>
                                    </ul>
                                    <h3 class="tiles-title no-padding">
                                        Datos del<strong class="text-blue"> cliente.</strong>
                                    </h3>
                                    <table class="table">
                                    	<thead>
                                        	<tr>
                                                <th>Nombre</th>
                                                <th>Direccion</th>
                                                <th>Tipo de habitacion</th>
                                                <th>Costo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr>
                                                <td><?php echo $res['Nombre_Hotel']?></td>
                                                <td><?php echo $res['Direccion_Hotel']?></td>
                                                <td><?php echo $res['Descripcion_Habitacion']?></td>
                                                <td><?php echo "$".$res['TotalApagar_Reserva']?></td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                    <table class="table">
                                    	<thead>
                                        	<tr>
                                                <th>No. Personas</th>
                                                <th>No. de adultos</th>
                                                <th>No. de niños</th>
                                                <th>No. de camas</th>
                                                <th>Fecha Entrada</th>
                                                <th>Fecha Salida</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<tr>
                                                <td><?php echo $res['Cantidad_Personas_Reserva_Habitacion']?></td>
                                                <td><?php echo $res['Cantidad_Adultos_Reserva_Habitacion']?></td>
                                                <td><?php echo $res['Cantidad_Niños_Reserva_Habitacion']?></td>
                                                <td><?php echo $res['CantidadCamas_Habitacion']?></td>
                                                <td><?php echo $res['FechaEntrada_Reserva']?></td>
                                                <td><?php echo $res['FechaSalida_Reserva']?></td>
                                            </tr>
                                           
                                        </tbody>
                                    </table>
                                    <article class="important">
                                    	<h4>Importante</h4>
                                        <p>Hotelia se reserva reclamos ante cualquiera de las siguientes situaciones. Si tiene algun inconveniente cancele su cita o dirijase al centro de <strong class="text-blue">ayudas y reclamos</strong> </p>
										<ol>
                                        	<li>Los datos que ingreso son erroneos. </li>
                                            <li>Pierde el ticket electronico. </li>
                                            <li>No llega en el horario acordado con el hotel. </li>
                                            <li>El hotel no cumple sus expectativas. </li>
                                        </ol>
                                        
                                        <p>Ante estos casos es mejor que solucione directamente con el encargado del hotel.</p>
                                    </article>
                                    
                                    <div class="t-footer clearfix">
                                    	<ul>
                                        	<li class="logo">
                                            	<img src="../../assets/images/logo2.png" alt="" />
                                            </li>
                                            <li>
                                            	<span>
                                                    Jl.Karapitan no.100<br />
                                                    Bandung 40921, Indonesia
                                                </span>
                                            </li>
                                            <li>
                                            	<span>
                                                    p : +62 123 4567<br />
                                                    f  : +62 123 4567
                                                </span>
                                            </li>
                                            <li>
                                            	<span>
                                                    info@stravel.com<br />
                                                    www.stravel.com
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <div class="pull-left hidden-xs">
                                <a href="#" class="btn btn-def"><i class="glyphicon glyphicon-file"></i> PDF</a>
                                <a href="#" class="btn btn-def"><i class="glyphicon glyphicon-print"></i> Imprimir</a>
                                <a href="#" class="btn btn-def"><i class="glyphicon glyphicon-envelope"></i> Email</a>
                            </div>
                            <nav class="pull-right hidden-xs pagination-tiket">
                            	<a href="#" class="cur">&lsaquo; Anterior</a>
                                <span>Pagina: 1/2</span>
                                <a href="#">Siguiente &rsaquo;</a>
                            </nav>
                       </div>
                    </div>
                    
                </section>
            </div>
            <?php
                                    }
                                    }
                        }
            ?>
        	<!-- InstanceEndEditable -->
            <footer>
        	<a href="#header" class="icon icon-flight"></a>
        	<div class="container">
            	<span class="icon deco"></span>
            	<div class="row">
                	<div class="col-sm-2 text-center">
                    	<img class="logo" src="../../assets/images/logo.png" alt="logo" />
                    </div>
                    <div class="col-sm-3">
                    	<ul>
                        	<li><strong>Nosotros</strong></li>
                            <li><a href="#">Quiénes somos</a></li>
                            <li><a href="#">Cómo funcionan nuestros servicios</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                    	<ul>
                        	<li><strong>Contactar</strong></li>
                            <li><a href="#">Preguntas frecuentes</a></li>
                            <li><a href="#">Atención al cliente</a></li>
                            <li><a href="#">Ayuda</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 subscribe">
                    	<strong>Subscribete</strong>
                        <input type="email" placeholder="Tu correo electronico" />
                        <input type="submit" class="btn btn-info" value="Enviar" />
                        <div class="socmed">
                        	Encuentranos : 
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-youtube"></i>
                            <i class="fab fa-github"></i>
                        </div>
                    </div>
                </div>
            </div>
            <span class="copyright">Copyright&copy;2021 │ Todos los derechos reservados</span>
        </footer>
        
    </div> <!-- /container -->        
		<script src="../../assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="../../assets/js/jquery-ui.min.js"></script>	
        <script src="../../assets/js/vendor/bootstrap.min.js"></script>
        <script src="../../assets/js/bootstrap-datepicker.js"></script>	
        <script src="../../assets/js/jquery.slides.min.js"></script>	
        <script src="../../assets/js/jquery.colorbox.js"></script>	
        <script src="../../assets/js/enquire.min.js"></script>
        <script src="../../assets/js/main.js"></script>
        <!-- InstanceBeginEditable name="js_custom" --><!-- InstanceEndEditable -->
    </body>
<!-- InstanceEnd --></html>
