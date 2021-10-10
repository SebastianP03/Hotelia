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
        <div class="login-popup cb-popup" id="login-block">
        	
            <div class="wrap-register">

              <h2 class="title"><i class="glyphicon glyphicon-user"></i> LOGIN</h2>
              <div class="social-login clearfix">
                <a href="#" class="btn-login facebook">Conectar con facebook</a>
                <a href="#" id="signInButton" class="btn-login google">Conectar con google</a>
              </div>

              <div class="line-or"><div class="text-or">O</div></div>
              <div class="clear"></div>
              <form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="k5dNpcDie87dqH4093X4P3Do2WFmaArP3FsGmom6">
                  <div class="form-group">
                      <input type="text" class="icon-a icon-a-user form-control" autocomplete="off" id="email"name="email" placeholder="Correo">
                  </div>



                  <!-- sample input id warning -->
                  <div class="form-group">
                      <input type="password" id="password" class="icon-a icon-a-lock form-control" name="password" placeholder="Contraseña">
                      <div class="forgot">Olvidaste tu <a href="http://webfographics.com/forgot-password">contraseña</a></div>
                  </div>

                  <div class="form-group text-title" style="display: none;">
                      <input type="checkbox" name="remember_me">Recuerdame
                  </div>

                  <input type="text" hidden="hidden" id="os" name="os">
                  <input type="text" hidden="hidden" id="browser" name="browser">

                  <div class="top-warning "></div>

                <div class="btn-block">
                  <button type="submit" class="btn btn-danger btn-lg">LOGIN</button>
                  <span id="pass_hide" hidden="hidden">hide</span>
                  <div class="member-wrap">
                      <span>¿No estas registrado?</span> <a class="login-now" href="http://webfographics.com/register">Registrate ahora</a>
                  </div>
                </div>
          </form>
        </div>
        
    </div>
    
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
                    <ul class="pull-right">
                        <li class="user">
                            <a class="btn btn-link" id="login_btn">Login</a>
                            <a class="btn btn-danger">Registrarse</a>
                        </li>
                        <li class="separator"></li>
                    
                    
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
                <span class="glyphicon glyphicon-align-justify">&nbsp;</span>
            </header>
        	<!-- InstanceBeginEditable name="yieldyu" -->
            <div class="container">
            	<ul class="breadcrumb">
                    <li><a href="../../../index.php">Home</a></li>
                    <li><a href="#">Flight Ticket</a></li>
                    <li><a href="#">Pemesanan</a></li>
                </ul>
                
                <div class="row">
                	<div class="step col-md-12">
                        <ul class="clearfix">
                            <li class="cur">
                                <span class="tooltip-s">Datos</span>
                                <span class="number">1</span>
                            </li>
                            <li>
                                <span class="tooltip-s">Pago</span>
                                <span class="number">2</span>
                            </li>
                            <li>
                                <span class="tooltip-s">Ticket</span>
                                <span class="number">3</span>
                            </li>
                        </ul>
                    </div>
                                </div>
                
                <section class="row step-content">
                	<div class="col-md-8">
                    	<div class="tiles-white row">
                            <h3 class="tiles-title"><strong class="text-blue">Datos</strong> de contacto</h3>
                            <form action="" class="form-group">
                                <div class="input col-sm-8">
                                    <label>Nombres :</label>
                                    <input type="text" class="icon-a icon-a-user" placeholder="Nombre de contacto" />
                                    <span class="help-block">Ej: Ivan Felipe</span>
                                </div>
                                <div class="input col-sm-8">
                                    <label>Apellidos :</label>
                                    <input type="text" class="icon-a icon-a-user" placeholder="Apellidos de contacto" />
                                    <span class="help-block">Ej: Alvarado Rojas</span>
                                </div>
                                <div class="input col-sm-6">
                                    <label>Numero de contacto :</label>
                                    <input type="text" class="icon-a icon-a-phone" placeholder="Numero de telefono" value="+57 "/>
                                    <span class="help-block">Ej: +57 3125694227</span>
                                </div> 
                                  <div class="input col-sm-6">
                                       <label>Fecha de nacimiento :</label>
                                       <input type="text" class="icon-a icon-a-calendar datepicker" placeholder="dd/mm/yyyy" />
                                       <span class="help-block">Debe ser mayor de edad</span>
                                    </div> 
                                 
                                <div class="input col-sm-6">
                                    <label>Tipo de documento :</label>
                                <select name="" id="">
                                    <option value="0">Seleccione su tipo de documento</option>
                                    <option value="1">Cedula de ciudadania</option>
                                    <option value="2">Cedula de extranjeria</option>
                                    <option value="3">Pasaporte</option>
                                </select>
                               </div>  
                               <div class="input col-sm-6">
                                <label>Documento :</label>
                                <input type="text" class="icon-a icon-a-user" placeholder="Numero de doumento">
                            </div>
                                <div class="input col-sm-8">
                                    <label>Correo :</label>
                                    <input type="text" class="icon-a icon-a-mail" placeholder="Correo de contacto">
                                    <span class="help-block">Ej: ejemplo@gmail.com</span>
                                </div>
                                <div class="input col-sm-8">
                                    <label>Confirmar correo :</label>
                                    <input type="text" class="icon-a icon-a-mail" placeholder="Confirmar correo de contacto">
                                    <span class="help-block">Ej: ejemplo@gmail.com</span>
                                </div>
                                <div class="input col-sm-4">
                                    <label>Contraseña :</label>
                                    <input type="password" class="icon-a icon-a-lock" placeholder="Contraseña">
                                </div>

                            </form>
                       </div>
                       
                       
                       
                        <div class="btn-block bold clearfix">
                            <div class="pull-right m-t-20">
                                <form action="reserva2.html" method="post">
                            	<button class="btn btn-info">Siguiente <i class="glyphicon glyphicon-circle-arrow-right"></i> </button>  
                            </form>  
                            </div>
                        </div>
                       
                    </div>
                    <aside class="col-md-4">
                    	<div class="tiles-white titled">
                        	<div class="head"><span><i class="icon arrow-down"></i> Habitacion detalles</span></div>
                            <ul class="price-list">
                            	<li class="clearfix"><?php $nameHotel = $_GET['nombre']; echo $nameHotel; ?><span class="price">COP <strong>623.500</strong></span></li>
                                <li class="clearfix"><?php $direHotel = $_GET['direccion']; echo $direHotel; ?></span></li>
                                <li class="clearfix"><?php $descHotel = $_GET['descripcion']; echo $descHotel; ?>	</span></li>
                                <li class="clearfix">Bagasi (Adult) CGK-DPS	<span class="price">COP <strong>0</strong></span></li>
                                <li class="clearfix">Bagasi (Adult) CGK-DPS	<span class="price">COP <strong>20.000</strong></span></li>
                                <li class="separator"></li>
                                <li class="total clearfix">Total <span class="price">COP <strong>643.012</strong></span></li>
                            </ul>
                            <p class="alert alert-warning">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh </p>
                        </div>
                        
                            </div>
                        </div>
                    </aside>
                </section>
            </div>
            
        	<!-- InstanceEndEditable -->
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
<!-- InstanceEnd --></html>
