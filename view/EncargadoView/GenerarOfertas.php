<?php
require_once('../../model/encargadoModel.php');
require_once('../../model/hotelModel.php');
$ModeloEncargado= new Encargado();
$ModeloEncargado->validateSession();

$ModeloHotel=new Hotel();
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
                
               
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- end message dropdown -->
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
										<div class="sidebar-userpic-name">     <?php echo "$_SESSION[NOMBRES]" ." ". $_SESSION['APELLIDOS']; ?><br>
									</div>
										<div class="profile-usertitle-job"> Encargado </div>
									</div>
									<div class="sidebar-userpic-btn">
										<a class="tooltips" href="../EncargadoView/perfilEncargado.php" data-placement="top"
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
                                <div class="page-title">Generar Oferta</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                        href="">Menú Principal</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                
                                <li class="active">Generar Oferta</li>
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
                                    
                                    <table
                                        class="table table-striped table-bordered table-hover  order-column full-width"
                                        >
                                        <thead>
                                            <tr>
                                                <th> id habitación </th>
                                                <th> Hotel </th>
                                                <th> Descripción </th>
                                                <th> Costo </th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <?php
                                                    $habitacion=$ModeloEncargado->listarHabitaciones($_SESSION['ID']);
                                                    if ($habitacion !=null) {
                                                        foreach ($habitacion as $hab) {
                                                ?>    

                                                <td><?php echo $hab['Id_Habitacion']?></td>
                                                <td>
                                                <?php echo $hab['Nombre_Hotel']?>
                                                </td>
                                                <td>
                                                <?php echo $hab['Descripcion_Habitacion']?>
                                                    
                                                </td>
                                                <td>
                                                <?php echo $hab['Costo_Habitacion']?>
                                                </td>
                                                
                                                <!-- boton de acciones -->
                                                <td class="valigntop">
                                                    <div class="btn-group">
                                                    <button
                                                            class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin"
                                                            type="button" data-toggle="dropdown" aria-expanded="false">
                                                            Acciones
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            <li>
                                                                <a href="Oferta.php?id=<?php echo $hab['Id_Habitacion'] ?>">
                                                                    <i class="material-icons">create </i> Oferta </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                                }}
                                            ?>
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