<?php
require_once('../../model/habitacionModel.php');
require_once('../../model/encargadoModel.php');
require_once('../../model/hotelModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();
$ModeloHabitacion=new Habitacion();
//$Habitacion=$ModeloHabitacion->listar($_SESSION['IDHOTEL']);
$idHab=$_GET['id'];
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
                        <li><?php echo "$_SESSION[NOMBRES]"." ". $_SESSION['APELLIDOS']; ?> - <?php echo "$_SESSION[CORREO]";?></li>
                    </ul>
                </div>
            </div>
                
                <div class="main-menu">
                	<div class="container">
                    	<a href="#" class="cur pull-left">
                            <span class="text-blue text-big">Flight Ticket</span>
                            More than <strong class="text-blue">1020</strong> Destination
                        </a>
                        <a href="#" class="pull-left">
                            <span class="text-blue text-big">Traveling Promo</span>
                            More than <strong class="text-blue">1020</strong> Promo's
                        </a>
                        <a class="logo" href="../../index.php">
                            <img src="../../assets/images/logo.png" alt="logo" />
                        </a>
                        <a href="#" class="pull-right">
                            <span class="text-blue text-big">Help And Support</span>
                            Duis autem vel eum iriue
                        </a>
                        <a href="#" class="pull-right">
                            <span class="text-blue text-big">News And Article</span>
                            Lorem Ipsum dolor sit amet
                        </a>
                    </div>
                </div>
            </header>
            <div class="container">
            	<ul class="breadcrumb">
                </ul>
                
                
                <section class="row step-content">
                    <aside class="col-md-3">
                        <div class="tiles-white titled no-margin">
                        	<div class="head"><span><i class="icon arrow-down"></i> Configurar cuenta</span></div>
                          <ul class="menu">
                               <li><a href="../EncargadoView/perfilEncargado.php" id="pro" class="cur"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
                               <li><a href="../HotelView/apartadoHotel.php" id="his"><i class="glyphicon glyphicon-compressed"></i> Mi Hotel</a></li>
                               <li><a href="Actualizar.php" id="his"><i class="glyphicon glyphicon-compressed"></i> Actualizar Hotel</a></li>
                                <li><a href="../Habitacion/habitacion.php" id="cre"><i class="glyphicon glyphicon-credit-card"></i> Mis Habitaciones</a></li>
                            </ul>
                        </div>
                    </aside>
                    <div id="profile">
                    <div class="col-md-9">
                    	<div class="tiles-white row no-margin">
                            <h3 class="tiles-title">Datos de <strong class="text-blue">Habitacion</strong> </h3>
                            
                                                      <?php
                                                      
                                  $Habitacion=$ModeloHabitacion->getIdHab($idHab);
                                  if ($Habitacion !=null) {
                                      foreach ($Habitacion as $Hab) {
                              ?>
                            <form action="../../controller/habitacionController.php" method="POST" class="form-group">
                            <input type="hidden" name="IdHab" value="<?php echo $_GET['id']?>">
                                <div class="row">

                                    <div class="input col-sm-6">
                                        <label>Descripcion :</label>
                                        <input type="text" class="icon-a icon-a-user" name="DesHab" value="<?php echo $Hab['Descripcion_Habitacion']?>">
                                    </div>
                                    <div class="input col-sm-6">
                                      <label>Cantidad de Camas :</label>
                                      <input type="text" class="icon-a icon-a-user" name="CanHab" value="<?php echo $Hab['CantidadCamas_Habitacion']?>">
                                  </div>
                                </div>

                                <div class="row">
                                  	<div class="input col-sm-6">
                                        <label>Imagen :</label>
                                       <!--- <input type="text" name="ImaHab" value="<?php //echo $Hab['Imagen_Habitacion']?>">--->
                                    </div>
                                     <div class="input col-sm-6">
                                        <label>Costo :</label>
                                        <input type="text" name="CosHab" value="<?php echo $Hab['Costo_Habitacion']?>">
                                    </div>
                                </div>



                                <div class="row">
                                     <div class="input col-sm-6">
                                     <div class="form group">
                                    <select class="form-select" name="EstHab" required value="<?php echo $Hab['Estado_Habitacion']?>"><br>
                                      <option selected>Estado Habitacion</option>
                                      <option value="0">Inactivo</option>
                                      <option value="1">Activo</option>           
                                    </select><br>
                                    </div></div>
                                   
                                </div>
                                
                                
                                <button class="btn btn-info" name="AccionH" value="Actualizar">Actualizar perfil</button>    

                            </form>
                            <?php
                                }}
                            ?>
                       </div>
                    </div>
                <section class="col-md-9 col-md-offset-3">
                	<div class="btn-block bold clearfix">
                        <div class="m-t-20 text-center">
                            <button class="btn btn-info" style="display: none; " form="Password" name="btn" id="Pass" value="Password">Cambiar contraseña</button>   
                        </div>
                 </div>
                </section>
                </div>
                </div>
                
        	<footer>
        	<a href="#header" class="icon icon-flight"></a>
        	<div class="container">
            	<span class="icon deco"></span>
            	<div class="row">
                	<div class="col-sm-2 text-center">
                    	<img class="logo" src="../../assets/images/logo.png" alt="logo">
                    </div>
                    <div class="col-sm-2">
                    	<ul>
                        	<li><strong>Our Menu</strong></li>
                            <li><a href="#">Press Center</a></li>
                            <li><a href="#">Travel News</a></li>
                            <li><a href="#">Best Price Guarantee</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                    	<ul>
                        	<li><strong>Usefull Link</strong></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Travel News</a></li>
                            <li><a href="#">Support Center</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2">
                    	<ul>
                        	<li><strong>Account</strong></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Personal Information</a></li>
                            <li><a href="#">My Credit Slip</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 subscribe">
                    	<strong>Subscribe</strong>
                        <input type="email" placeholder="Your Email Address">
                        <input type="submit" class="btn btn-info" value="Send">
                        <div class="socmed">
                        	Find Us : 
                            <a href="#"><i class="icon fb"></i></a>
                            <a href="#"><i class="icon tw"></i></a>
                            <a href="#"><i class="icon yt"></i></a>
                            <a href="#"><i class="icon gp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="copyright">copyrights©2015</span>
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
    </html>
