<?php
require_once '../../model/cliente.php';
$model = new Cliente();
$cliente=$model->tipoDoc();

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

        <link rel="stylesheet" href="../../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../../assets/css/jquery-ui.css" />
        <link rel="stylesheet" href="../../assets/css/main.css" />
        <link rel="stylesheet" href="../../fonts/flaticon.css" />
        <link rel="stylesheet" href="../../assets/css/mobile.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    	<div class="login-popup cb-popup" id="login-block">
        	
                <div class="wrap-register">
                    
                  <h2 class="title"><img src="../../assets/images/logo2.png" alt=""></h2>
                  <!-- <div class="social-login clearfix">
                    <a href="#" class="btn-login facebook"></a>
                    <a href="#" id="signInButton" class="btn-login google"></a>
                  </div>
    
                  <div class="line-or"><div class="text-or"></div></div> 
                   -->
                  <div class="clear"></div>
                  <form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="k5dNpcDie87dqH4093X4P3Do2WFmaArP3FsGmom6">
                      <div class="form-group">
                          <input type="email" class="icon-a icon-a-user form-control" autocomplete="off" id="email"name="email" placeholder="Correo">
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
                      <button type="submit" class="btn btn-danger btn-lg">INICIAR SESION</button>
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
                    <img src="assets/images/logo.png" alt="logo" />
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
                                <a class="btn btn-danger" id="login_btn" href="view/signup.php">Iniciar sesion</a>
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
<div class="container">
      <div class="row">
       	  <section class="col-md-6 col-md-offset-3 text-center">
           	  <div class="tiles-white row">
                 <h2 class="title "><img src="../../assets/images/logo2.png" alt=""></h2>
                <h3 class="tiles-title text-center"> Gestiona tu Hotel <strong class="text-blue">gratis</strong></h3>
                  <form action="../../controller/encargadoController.php" method="POST" class="form-group">
                      <div class="input col-sm-12">
                          <input type="email" class="icon-a icon-a-mail" name="CorEnc" placeholder="Email" />
                      </div>
                      <div class="input col-sm-6">
                          <input type="text" class="icon-a icon-a-user" name="NomEnc" placeholder="Nombre" />
                      </div>
                      <div class="input col-sm-6">
                          <input type="text" class="icon-a icon-a-user" name="ApeEnc" placeholder="Apellidos" />
                      </div>
                     
                      <div class="input col-sm-6">
                          <input type="date" name="FecNacEnc" class="icon-a icon-a-user"/>
                      </div>
                      <div class="input col-sm-6">
                          <input type="tel" name="TelEnc" class="icon-a icon-a-user" placeholder="Numero de telefono" />
                      </div>
                      <div class="input col-sm-6"></div>
                      <div class="input col-sm-6">
                                <select name="TipoDoc" >
                                <option value="1">Cédula de Ciudadania</option>
                                <option value="2">Cédula de Extrangeria</option>
                                <option value="3">Pasaporte</option>                                    
                                </select>
                               </div>  
                               <div class="input col-sm-6">
                                <input type="number" class="icon-a icon-a-user" placeholder="Numero de documento" maxlength="10" name="NumDocEnc" >
                            </div>
                            <div class="input col-sm-6">
                                          <input type="password" class="icon-a icon-a-lock newPass"  name="newPass" id="newPass" placeholder="Contraseña">
                                      </div>
                                      <div class="input col-sm-6">
                                          <input type="password" class="icon-a icon-a-lock newPass"name="ConEnc" name="cnewPass" id="cnewPass" placeholder="Confirmar contraseña"><div class="alertChangePass" style="display: none; text-align: center; font-weight: bold;"></div>
                                  </div>
                    <div class="btn-block bold clearfix text-center">
                       	  <p><input type="checkbox" required/> Acepto la <a href="#">Política de Privacidad y Condiciones de Uso</a> </p>
                          <button type="submit" class="btn btn-info" name="AccionB" value="Registrarse">Resgistrarse <i class="glyphicon glyphicon-circle-arrow-right"></i> </button>    
                   	  </div>
                  </form>
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
</body>
</html>
