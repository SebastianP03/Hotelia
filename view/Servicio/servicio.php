<?php
require_once('../../model/encargadoModel.php');
require_once('../../model/hotelModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();

$ModeloHotel=new Hotel();

require_once('../../model/servicioModel.php');
$ModeloServicio=new Servicio();


?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/advanced_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:41:34 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    
    <!-- icons -->
    <link href="../../assets1/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets1/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap -->
    <link href="../../assets1/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- data tables -->
    <link href="../../assets1/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="../../assets1/plugins/material/material.min.css">
    <link rel="stylesheet" href="../../assets1/css/material_style.css">
    <!-- animation -->
    <link href="../../assets1/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="../../assets1/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../assets1/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="../../assets1/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="../../assets1/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->

    <title>Hotelia</title>
		<link rel="shortcut icon" href="../../asset/images/LogoSolo.png">
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo">
					<a href="../EncargadoView/indexEncargado.php">
                    <img src="../../asset/images/logo2.png" alt="logo" />
				    </a>
				</div>
                <!-- logo end -->
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
                    data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i class="fa fa-bell-o"></i>
                                <span class="badge headerBadgeColor1"> 6 </span>
                            </a>
                            <ul class="dropdown-menu animated swing">
                                <li class="external">
                                    <h3><span class="bold">Notifications</span></h3>
                                    <span class="notification-label purple-bgcolor">New 6</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">just now</span>
                                                <span class="details">
                                                    <span class="notification-icon circle deepPink-bgcolor"><i
                                                            class="fa fa-check"></i></span> Congratulations!. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">3 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle purple-bgcolor"><i
                                                            class="fa fa-user o"></i></span>
                                                    <b>John Micle </b>is now following you. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">7 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle blue-bgcolor"><i
                                                            class="fa fa-comments-o"></i></span>
                                                    <b>Sneha Jogi </b>sent you a message. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">12 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle pink"><i
                                                            class="fa fa-heart"></i></span>
                                                    <b>Ravi Patel </b>like your photo. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">15 mins</span>
                                                <span class="details">
                                                    <span class="notification-icon circle yellow"><i
                                                            class="fa fa-warning"></i></span> Warning! </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="time">10 hrs</span>
                                                <span class="details">
                                                    <span class="notification-icon circle red"><i
                                                            class="fa fa-times"></i></span> Application error. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="javascript:void(0)"> All notifications </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
                        <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge headerBadgeColor2"> 2 </span>
                            </a>
                            <ul class="dropdown-menu animated slideInDown">
                                <li class="external">
                                    <h3><span class="bold">Messages</span></h3>
                                    <span class="notification-label cyan-bgcolor">New 2</span>
                                </li>
                                <li>
                                    <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="../../assets1/img/user/user2.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Sarah Smith </span>
                                                    <span class="time">Just Now </span>
                                                </span>
                                                <span class="message"> Jatin I found you on LinkedIn... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="../../assets1/img/user/user3.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> John Deo </span>
                                                    <span class="time">16 mins </span>
                                                </span>
                                                <span class="message"> Fwd: Important Notice Regarding Your Domain
                                                    Name... </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="../../assets1/img/user/user1.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Rajesh </span>
                                                    <span class="time">2 hrs </span>
                                                </span>
                                                <span class="message"> pls take a print of attachments. </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="../../assets1/img/user/user8.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Lina Smith </span>
                                                    <span class="time">40 mins </span>
                                                </span>
                                                <span class="message"> Apply for Ortho Surgeon </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="photo">
                                                    <img src="../../assets1/img/user/user5.jpg" class="img-circle" alt="">
                                                </span>
                                                <span class="subject">
                                                    <span class="from"> Jacob Ryan </span>
                                                    <span class="time">46 mins </span>
                                                </span>
                                                <span class="message"> Request for leave application. </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-menu-footer">
                                        <a href="#"> All Messages </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- end message dropdown -->
                        <!-- start manage user dropdown -->
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-close-others="true">
                                <img alt="" class="img-circle " src="../../assets1/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> John </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                                <li>
                                    <a href="user_profile.html">
                                        <i class="icon-user"></i> Profile </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-settings"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                                <li class="divider"> </li>
                                <li>
                                    <a href="lock_screen.html">
                                        <i class="icon-lock"></i> Lock
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">settings</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
            <!-- start sidebar menu -->
            <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu">
                    <div id="remove-scroll">
                        <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true"
                            data-slide-speed="200">
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="../../assets1/img/sdp.jpg" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name">     <?php echo "$_SESSION[NOMBRES]" ." ". $_SESSION['APELLIDOS']; ?><br>
									</div>
										<div class="profile-usertitle-job"> servicio </div>
									</div>
									<div class="sidebar-userpic-btn">
										<a class="tooltips" href="../EncargadoView/perfilEncargado.php" data-placement="top"
											data-original-title="Perfil">
											<i class="material-icons">person_outline</i>
										</a>
										<a class="tooltips" href="email_inbox.html" data-placement="top"
											data-original-title="Correo">
											<i class="material-icons">mail_outline</i>
										</a>
										<a class="tooltips" href="chat.html" data-placement="top"
											data-original-title="Chat">
											<i class="material-icons">chat</i>
										</a>
										<a class="tooltips" href="" data-placement="top"
											data-original-title="Cerrar Sesión">
											<form action="../../controller/encargadoController.php" method="POST">
										<i class="material-icons" name="AccionB" value="CerrarSesion">input</i>
							</form>
										</a>
									</div>
								</div>
							</li>
							
                            <li class="nav-item">
								<a href="" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Menú Principal</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="../EncargadoView/indexEncargado.php" class="nav-link ">
											<span class="title">Menú Principal</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="../EncargadoView/perfilEncargado.php" class="nav-link ">
											<span class="title">Mi Perfil</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">store</i>
									<span class="title">Mis Servicios</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="../HotelView/apartadoHotel.php" class="nav-link ">
											<i class="material-icons">vpn_key</i>
											<span class="title">Informacion de los Servicios</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="../Habitacion/habitacion.php" class="nav-link ">
											<i class="material-icons">vpn_key</i>
											<span class="title">Mis habitaciones</span>
										</a>
									</li>

                                    <li class="nav-item">
										<a href="../Servicio/servicio.php" class="nav-link ">
											<i class="material-icons">vpn_key</i>
											<span class="title">Mis servicios</span>
										</a>
									</li>

                                    <li class="nav-item">
										<a href="../Caracteristicas/caracteristicas.php" class="nav-link ">
											<i class="material-icons">vpn_key</i>
											<span class="title">Caracteristicas</span>
										</a>
									</li>
								</ul>
							</li>
							
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end sidebar menu -->
            <!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Mis Servicios</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="index.html">Menú Principal</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active">Informacion de Servicios</li>
                            </ol>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-topline-aqua">
                                <div class="card-head">
                                    <header></header>
                                   
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a href="formServicio.php">
                                                    <button id="addRow1" class="btn btn-info">
                                                        Registrar Nuevo Servicio <i class="fa fa-plus"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <table
                                        class="table table-striped table-bordered table-hover  order-column full-width"
                                        >
                                        <thead>
                                            <tr>
                                            <tr>
                                            <th>Id Servicio</th>
                                            <th>Nombre de Servicio</th>         
                                            <th colspan="2">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tr>
                                        </thead>
                                        <tbody>
 

        <tr>
        <?php
        $Servicio=$ModeloServicio->listar();

        if ($Servicio !=null) {
            foreach ($Servicio as $Ser) {
        ?>
            <td><?php echo $Ser['Id_Servicio']?></td>
            <td><?php echo $Ser['Nombre_Servicio']?></td>
         
            <th><a href="ActualizarSer.php?id=<?php echo $Ser['Id_Servicio'] ?>" class="btn btn-primary">Editar</th>  
            <th><a href=" deleteSer.php?id=<?php echo $Ser['Id_Servicio'] ?>"><button type='button' class="btn btn-info" onclick="return ConfirmDelete()">Eliminar</buttom> </th>                                                              
            </tr>
        </tr>
        <?php
            }}
        ?>
    </table><br>

                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
            
            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
			<div class="page-footer-inner"> 2021 &copy; Hotelia
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="../../assets1/plugins/jquery/jquery.min.js"></script>
    <script src="../../assets1/plugins/popper/popper.min.js"></script>
    <script src="../../assets1/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="../../assets1/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="../../assets1/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- data tables -->
    <script src="../../assets1/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets1/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets1/js/pages/table/table_data.js"></script>
    <!-- Common js-->
    <script src="../../assets1/js/app.js"></script>
    <script src="../../assets1/js/layout.js"></script>
    <script src="../../assets1/js/theme-color.js"></script>
    <!-- Material -->
    <script src="../../assets1/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="../../assets1/js/pages/ui/animations.js"></script>
    <!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/advanced_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:41:34 GMT -->
</html>
