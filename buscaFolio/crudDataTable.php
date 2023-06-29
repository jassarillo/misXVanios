<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!--> 
<html lang="es">
	<!--<![endif]-->
	<!-- start: HEAD -->
<head>
    <title>Sistema Luana</title>
    <!-- start: META -->
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <!-- end: GOOGLE FONTS -->
    <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="bower_components/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="bower_components/switchery/dist/switchery.min.css">
    <link rel="stylesheet" href="bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="bower_components/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick.css">
    <link rel="stylesheet" href="bower_components/slick.js/slick/slick-theme.css">
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link href="bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet" media="screen">
    <link href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" href="bower_components/DataTables/media/css/dataTables.bootstrap.min.css">
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- start: Packet CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/themes/lyt2-theme-1.css" id="skin_color">
    <!-- end: Packet CSS -->
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="favicon.ico" /> -->
</head>
	<!-- end: HEAD -->
	<body>
		<div id="app" class="lyt-2">
			<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<div>
						<!-- start: USER OPTIONS -->
						<?php include('settings_views/user_options.html')?>
						<!-- end: USER OPTIONS -->
						<nav>
							<!-- start: MAIN NAVIGATION MENU -->
							<?php include('settings_views/main_navigation_menu.html');?>
							<!-- end: MAIN NAVIGATION MENU -->
						</nav>
					</div>
				</div>
			</div>
			<!-- / sidebar -->
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<button href="#" class="sidebar-mobile-toggler pull-left btn no-radius hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-left hidden-sm hidden-xs">
							<li class="sidebar-toggler-wrapper">
								<div>
									<button href="javascript:void(0)" class="btn sidebar-toggler visible-md visible-lg">
										<i class="fa fa-bars"></i>
									</button>
								</div>
							</li>
							<li>
								<a href="#" class="toggle-fullscreen"> <i class="fa fa-expand expand-off"></i><i class="fa fa-compress expand-on"></i></a>
							</li>
						</ul>
						<ul class="nav navbar-right">
							
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
					<button class="sidebar-mobile-toggler dropdown-off-sidebar btn hidden-md hidden-lg"  data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</button>
					<button class="dropdown-off-sidebar btn hidden-sm hidden-xs" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</button>
					<!-- end: NAVBAR COLLAPSE -->
				</header>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
							<h4 class="mainTitle no-margin">Pre-Registro</h4>
							<ul class="pull-right breadcrumb">
								<li>
									<a href="index.html"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Home</a>
								</li>
								<li>
									Recursos Humanos
								</li>
								<li>
									Pre-Registro
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: PRE-REGISTRO -->
						<div class="container-fluid container-fullw">
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-white">
										<div class="panel-body">
											<h5 class="over-title margin-bottom-15">Pre-Registro</h5>
											
											<div class="panel-body">
                                                <div class="col-md-12">
													<!---****--->
													<table class="table table-striped- table-bordered table-hover table-checkable" id="inventarios-table">
														<thead>
														<tr>														
															<th class="center">#</th>
                                                                <th>RFC</th>
                                                                <th>Fecha Solicitud</th>
                                                                <th>Apellido Paterno</th>
                                                                <th>Apellido Materno</th>
                                                                <th>Nombre</th>
                                                                <th>Teléfono Fijo</th>
                                                                <th>Teléfono Celular</th>
                                                                <th></th>
																<th></th>															
														</tr>
														</thead>					
													</table>
													<!-----****-->
                                                </div>
                                            </div>
										</div>										
									</div>
								</div>
							</div>
						</div>
						<!-- end: PRE-REGISTRO -->
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<?php include('settings_views/footer.html');?>
			<!-- end: FOOTER -->
			<!-- start: OFF-SIDEBAR -->
			<?php include('settings_views/sidebar.html');?>
			<!-- end: OFF-SIDEBAR -->
			<!-- start: SETTINGS -->
			<?php include('settings_views/settings.html')?>
			<!-- end: SETTINGS -->
		</div>
		
		
		
	</body>
</html>

<!-- include js, bootstraps, dataTables, form_elemnts -->
			<?php include('settings_views/includes_js.html');?>
<!-- include js, bootstraps, dataTables, form_elemnts -->


<script type="text/javascript">
Main.init();
FormElements.init();
TableData.init();
$(document).ready(function() {
    function extractEntradas() 
    {
        filtro=0;
               
                data_table = $("#inventarios-table").DataTable({
                   
                    "buttons": [
                        'csv', 'excel', 'pdf', 'print'
                    ],
                    "ajax": {
                        "url":   "inicio.php?inicio="+inicio+"&fin="+fin,
                        //"data": { filtro: filtro },//Consulta a PAGOSUNIFICADOS
                        "type": "GET",
						//"datatype": "json",
						"dataSrc": "",
							
					},
					
					"columns": [
                       {"data":"id"},
                       {"data":"rfc"},
                       {"data":"fecha_nacim"},
                       {"data":"ap_paterno"},
                       {"data":"ap_materno"},
                       {"data":"nombre"},
                       {"data":"nombre"},
					   {"data":"nombre"},
					   {
                            "mRender": function (data, type, row) {
                                //var id_user = row.idInvent;
                                //return '<a class="btn btn-cdmx" onClick="get_data_edit_inventario('+row.idInvent+');" href="javascript:void('+ row.idInvent+')">Editar</a>';
                                    return '<a href="/luana/rh_preregistro_editar.php?id_pe='+ row.id +'" class="btn btn-primary">Editar</a>' + 
											'<a href="/eliminar/'+ row.id +'" class="btn btn-danger">Editar</a>';
                            }
                        },
					   //{data: 'id', name: 'id'}
				],
                    
                    /*"drawCallback": function () {
                        $(".creditos").change(function () {
                            if ($(this).is(':checked')) {
                                //console.log($(this).val());
                                if ($.inArray($(this).val(), creditos) == -1) {
                                    //creditos[] = $(this).val();
                                    creditos.push($(this).val());
                                }

                            }
                            else {
                                //creditos.pop($(this).val())
                                creditos.splice($.inArray($(this).val(), creditos), 1);
                            }
                            console.log(creditos);
                        });

                    }*/
                });
    };

    extractEntradas();
});





// Mostrar modal para alta de rol


//$(".dt-buttons").addClass('kt-hidden');

</script>