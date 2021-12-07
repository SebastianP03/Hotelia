<?php
require_once('../../model/encargadoModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<!-- icons -->
	<link href="../../assets1/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets1/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../../assets1/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets1/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
	<link href="../../assets1/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../../assets1/plugins/material/material.min.css">
	<link rel="stylesheet" href="../../assets1/css/material_style.css">
	<!-- animation -->
	<link href="../../assets1/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
	<link href="../../assets1/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../../assets1/css/style.css" rel="stylesheet" type="text/css" />
	<link href="../../assets1/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../../assets1/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->

        <title>Hotelia</title>
		<link rel="shortcut icon" href="../../asset/images/LogoSolo.png">
</head>
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
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				
				<!-- start mobile menu -->
				
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<span class="username username-hide-on-mobile"> <?php echo $_SESSION['NOMBRES']?> </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-default animated jello">
								<li>
									<a href="../EncargadoView/perfilEncargado.php">
										<i class="icon-user"></i> perfil </a>
								</li>
								
								<li>	
										<i class="icon-logout"></i> <form action="../../controller/encargadoController.php" method="POST">
        <input type="submit" name="AccionB" value="CerrarSesion">
    </form> 
								</li>
							</ul>
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
											</div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name">     <?php echo "$_SESSION[NOMBRES]" ." ". $_SESSION['APELLIDOS']; ?><br>
									</div>
										<div class="profile-usertitle-job"> Encargado </div>
									</div>
									<div class="sidebar-userpic-btn">
										<a class="tooltips" href="perfilEncargado.php" data-placement="top"
											data-original-title="Perfil">
											<i class="material-icons">person_outline</i>
										</a>
										<a class="tooltips" href="" data-placement="top"
											data-original-title="Correo">
											<i class="material-icons">mail_outline</i>
										</a>
										<a class="tooltips" href="" data-placement="top"
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
									<span class="title">Mi hotel</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="../HotelView/apartadoHotel.php" class="nav-link ">
											<i class="material-icons">vpn_key</i>
											<span class="title">Informacion de mi hotel</span>
										</a>
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
								<div class="page-title">Menu principal</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								
								<li class="active">Menu principal</li>
							</ol>
						</div>
					</div>
			<!-- start widget -->
					<div class="state-overview">
						<div class="row">

							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<a href="GenerarOfertas.php">
									<div class="info-box bg-orange">
										<span class="info-box-icon push-bottom"><i
												class="material-icons">monetization_on</i></span>
										<div class="info-box-content">
											<span class="info-box-text">Realizar</span>
											<span class="info-box-number">Oferta</span>
											<div class="progress">
												<div class="progress-bar width-50"></div>
											</div>
										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</a>
							</div>
							<!-- /.col -->
							<div class="col-xl-3 col-md-6 col-12">
								<a href="Rango.php">
									<div class="info-box bg-success">
										<span class="info-box-icon push-bottom"><i
												class="material-icons">monetization_on</i></span>
										<div class="info-box-content">
											<span class="info-box-text">Realizar</span>
											<span class="info-box-number">Reporte</span>
											<div class="progress">
												<div class="progress-bar width-50"></div>
											</div>
										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</a>
							</div>
						</div>
					</div>
					<!-- end widget -->
					<!-- chart start -->

					<!-- Chart end -->
					<!-- start Payment Details -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Reservas en mi Hotel</header>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table5">
												<thead>
													<tr>
														<th>No</th>
														<th>Nombre</th>
														<th>Entrada</th>
														<th>Salida</th>
														<th>Estado</th>
														<th>Telefono</th>
														<th>Habitacion</th>
													</tr>
												</thead>
												<tbody>
													<tr>
													<?php
                                                    $reservas=$ModeloEncargado->ReservasHotel($_SESSION['ID']);
                                                    if ($reservas !=null) {
                                                        foreach ($reservas as $res) {
                                                	?> 
														<td><?php echo $res['Id_Reserva'] ?></td>
														<td><?php echo $res['Nombres_Cliente'] . " " . $res['Apellidos_Cliente']?></td>
														<td><?php echo $res['FechaEntrada_Reserva'] ?></td>
														<td><?php echo $res['FechaSalida_Reserva'] ?></td>
													<?php
														if ($res['Estado_Reserva']== 'Activa') {
													?>
															<td><span class="label label-sm label-success">Activa</span></td>
													<?php
													}
													?>
													<?php
														if ($res['Estado_Reserva']== 'Inactiva') {
													?>
														<td><span class="label label-sm label-warning">Inactiva </span></td>
													<?php	
													}
													?>

														<td><?php echo $res['Telefono_Cliente'] ?></td>
														<td><?php echo $res['Id_Habitacion'] ?></td>
													</tr>
													<?php }} ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			<!-- end page content -->
			<!-- start chat sidebar -->
			<div class="chat-sidebar-container" data-close-on-body-click="false">
				<div class="chat-sidebar">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#quick_sidebar_tab_1" class="nav-link active tab-icon" data-toggle="tab">Theme
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_2" class="nav-link tab-icon" data-toggle="tab"> Chat
							</a>
						</li>
						<li class="nav-item">
							<a href="#quick_sidebar_tab_3" class="nav-link tab-icon" data-toggle="tab"> Settings
							</a>
						</li>
					</ul>
						<!-- Start Doctor Chat -->
						<div class="tab-pane chat-sidebar-chat animated slideInRight" id="quick_sidebar_tab_2">
							<div class="chat-sidebar-list">
								<div class="chat-sidebar-chat-users slimscroll-style" data-rail-color="#ddd"
									data-wrapper-class="chat-sidebar-list">
									<div class="chat-header">
										<h5 class="list-heading">Online</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<i class="online dot"></i>
											<div class="media-body">
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">5</span>
											</div> <img class="media-object" src="../../assets1/img/user/user1.jpg" width="35"
												height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Rajesh</h5>
												<div class="media-heading-sub">Director</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../../assets1/img/user/user5.jpg"
												width="35" height="35" alt="...">
											<i class="away dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jacob Ryan</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">8</span>
											</div> <img class="media-object" src="../../assets1/img/user/user4.jpg" width="35"
												height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Kehn Anderson</h5>
												<div class="media-heading-sub">CEO</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../../assets1/img/user/user2.jpg"
												width="35" height="35" alt="...">
											<i class="busy dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Sarah Smith</h5>
												<div class="media-heading-sub">Anaesthetics</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../../assets1/img/user/user7.jpg"
												width="35" height="35" alt="...">
											<i class="online dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Vlad Cardella</h5>
												<div class="media-heading-sub">Cardiologist</div>
											</div>
										</li>
									</ul>
									<div class="chat-header">
										<h5 class="list-heading">Offline</h5>
									</div>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">4</span>
											</div> <img class="media-object" src="../../assets1/img/user/user6.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jennifer Maklen</h5>
												<div class="media-heading-sub">Nurse</div>
												<div class="media-heading-small">Last seen 01:20 AM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../../assets1/img/user/user8.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Lina Smith</h5>
												<div class="media-heading-sub">Ortho Surgeon</div>
												<div class="media-heading-small">Last seen 11:14 PM</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">9</span>
											</div> <img class="media-object" src="../../assets1/img/user/user9.jpg" width="35"
												height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Jeff Adam</h5>
												<div class="media-heading-sub">Compounder</div>
												<div class="media-heading-small">Last seen 3:31 PM</div>
											</div>
										</li>
										<li class="media"><img class="media-object" src="../../assets1/img/user/user10.jpg"
												width="35" height="35" alt="...">
											<i class="offline dot"></i>
											<div class="media-body">
												<h5 class="media-heading">Anjelina Cardella</h5>
												<div class="media-heading-sub">Physiotherapist</div>
												<div class="media-heading-small">Last seen 7:45 PM</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Doctor Chat -->
						<!-- Start Setting Panel -->
						<div class="tab-pane chat-sidebar-settings animated slideInUp" id="quick_sidebar_tab_3">
							<div class="chat-sidebar-settings-list slimscroll-style">
								<div class="chat-header">
									<h5 class="list-heading">Layout Settings</h5>
								</div>
								<div class="chatpane inner-content ">
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Sidebar Position</div>
											<div class="setting-set">
												<select
													class="sidebar-pos-option form-control input-inline input-sm input-small ">
													<option value="left" selected="selected">Left</option>
													<option value="right">Right</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Header</div>
											<div class="setting-set">
												<select
													class="page-header-option form-control input-inline input-sm input-small ">
													<option value="fixed" selected="selected">Fixed</option>
													<option value="default">Default</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Sidebar Menu </div>
											<div class="setting-set">
												<select
													class="sidebar-menu-option form-control input-inline input-sm input-small ">
													<option value="accordion" selected="selected">Accordion</option>
													<option value="hover">Hover</option>
												</select>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Footer</div>
											<div class="setting-set">
												<select
													class="page-footer-option form-control input-inline input-sm input-small ">
													<option value="fixed">Fixed</option>
													<option value="default" selected="selected">Default</option>
												</select>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">Account Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Notificaciones</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-1">
														<input type="checkbox" id="switch-1" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Show Online</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-7">
														<input type="checkbox" id="switch-7" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Status</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-2">
														<input type="checkbox" id="switch-2" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">2 Steps Verification</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-3">
														<input type="checkbox" id="switch-3" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-header">
										<h5 class="list-heading">General Settings</h5>
									</div>
									<div class="settings-list">
										<div class="setting-item">
											<div class="setting-text">Location</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-4">
														<input type="checkbox" id="switch-4" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Save Histry</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-5">
														<input type="checkbox" id="switch-5" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
										<div class="setting-item">
											<div class="setting-text">Auto Updates</div>
											<div class="setting-set">
												<div class="switch">
													<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect"
														for="switch-6">
														<input type="checkbox" id="switch-6" class="mdl-switch__input"
															checked>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	<script src="../../assets1/plugins/sparkline/jquery.sparkline.min.js"></script>
	<script src="../../assets1/js/pages/sparkline/sparkline-data.js"></script>
	<!-- Common js-->
	<script src="../../assets1/js/app.js"></script>
	<script src="../../assets1/js/layout.js"></script>
	<script src="../../assets1/js/theme-color.js"></script>
	<!-- material -->
	<script src="../../assets1/plugins/material/material.min.js"></script>
	<!-- animation -->
	<script src="../../assets1/js/pages/ui/animations.js"></script>
	<!-- morris chart -->
	<script src="../../assets1/plugins/morris/morris.min.js"></script>
	<script src="../../assets1/plugins/morris/raphael-min.js"></script>
	<script src="../../assets1/js/pages/chart/morris/morris_home_data.js"></script>
	<!-- end js include path -->
</body>
</html>
