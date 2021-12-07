<?php
require_once('../../model/encargadoModel.php');
require_once('../../model/hotelModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();

$ModeloHotel=new Hotel();
$idHotel=$_GET['id'];

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

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top" >
			<div class="page-header-inner " >
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
						<!-- end manage user dropdown -->
						
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
										<div class="sidebar-userpic-name">     <?php echo $_SESSION['NOMBRES'] ." ". $_SESSION['APELLIDOS']; ?><br>
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
									<li class="nav-item">
										<a href="../Habitacion/habitacion.php" class="nav-link ">
											<i class="material-icons">vpn_key</i>
											<span class="title">Mis habitaciones</span>
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
								<div class="page-title">Actualizar Hotel</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="../EncargadoView/indexEncargado.php">Menú Principal</a>&nbsp;<i class="fa fa-angle-right"></i>
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="apartadoHotel.php">Apartado Hotel</a>&nbsp;<i class="fa fa-angle-right"></i>
								<li class="active">Actualizar Hotel</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PROFILE SIDEBAR -->
							<div class="profile-sidebar">
								<div class="card card-topline-aqua">
									<div class="card-body no-padding height-9">
										<div class="row">
											<div class="profile-userpic">
												
											</div>
										</div>
										<div class="profile-usertitle">
											<div class="profile-usertitle-name"><img src=" " alt="hotel"> </div>
										</div>
										<!-- END SIDEBAR USER TITLE -->
										<!-- SIDEBAR BUTTONS -->
										<div class="profile-userbuttons">
											<form action="../../controller/encargadoController.php" method="POST">
												<input type="file" name="FotEnc">
												<button type="submit" name="AccionB" value="Foto" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">Cambiar Foto</button>
											</form>
										</div>
										<!-- END SIDEBAR BUTTONS -->
									</div>
								</div>
								
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="profile-tab-box">
										<div class="p-l-20">
											<ul class="nav ">
                                            <li class="nav-item tab-all"><a class="nav-link active show"
														href="#tab1" data-toggle="tab">Mi hotel</a></li>
											</ul>
										</div>
									</div>
									<div class="white-box">
										<!-- Tab panes -->
										<div class="tab-content">
											<div class="tab-pane active fontawesome-demo" id="tab1">
											<div class="tab-pane" id="tab3">
												<div class="row">
													<div class="col-md-12 col-sm-12">
														<div class="card-head">
															<header>Informacion de Hotel</header>
														</div>
														<div class="card-body " id="bar-parent1">
                                                            <?php
                                                                $Hotel=$ModeloHotel->getIdHotelEspecifico($idHotel, $_SESSION['ID']);
                                                                if ($Hotel !=null) {
                                                                    foreach ($Hotel as $Hot) {
                                                            ?>
                                                            <form action="../../controller/hotelController.php" method="POST">
															<div class="col-md-6 col-sm-6"> 
																<div class="form-group">
																<input type="hidden" name="IdEnc" value="<?php echo $_SESSION['ID']?>">
																<input type="hidden" name="IdHot" value="<?php echo $idHotel?>">                                                                    
                                                                <label>Nombre</label>
                                                                    <input type="text" class="form-control" name="NomHot" value="<?php echo $Hot['Nombre_Hotel']?>">
																</div>
																<div class="form-group">
                                                                <label>Direccion</label>
                                                                    <input type="text" class="form-control" name="DirHot" value="<?php echo $Hot['Direccion_Hotel']?>">
                                                            	</div>
																<div class="form-group">
																	<label>Descripción</label>
																	<input type="text" class="form-control" name="DesHot" value="<?php echo $Hot['Descripcion_Hotel']?>">
																</div>
															</div>
																<button type="submit" class="btn btn-primary" name="AccionB" value="Actualizar">Actualizar</button>
                                                                </form>
                                                            <?php
                                                                }}
                                                            ?>
														</div>


													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END PROFILE CONTENT -->
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
	</div>
	<!-- start js include path -->
	<script src="../../assets1/plugins/jquery/jquery.min.js"></script>
	<script src="../../assets1/plugins/popper/popper.min.js"></script>
	<script src="../../assets1/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../../assets1/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- bootstrap -->
	<script src="../../assets1/plugins/bootstrap/js/bootstrap.min.js"></script>
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


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/user_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 12:37:58 GMT -->
</html>