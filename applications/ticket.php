<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Crear Proyecto | ARPAN</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicon/favicon-16x16.png">
    <!-- Fonts -->
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/css/argon/nucleo.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="../assets/css/argon/argon.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/projects/projects2.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/ticket.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
</head>
<body class="bg-white" >
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-dark" id="sidenav-main"></nav>
    <div class="main-content bg-white" id="panel">
        <nav class="navbar navbar-top navbar-expand navbar-light bg-white" id="barrah" ></nav>
    
            <!-- Header -->
            <div class="header pb-6 border-top">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                        <h6 class="h2 d-inline-block mb-0 text-uppercase tex-center"></h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page content -->
            <div class="container-fluid mt--6">
                <!-- Insert content here -->
                <?php
                if (isset($_GET['dataAnalysis'])) { // Análisis de Datos

                } else if (isset($_GET['employees'])) { // Empleados
                    include('employees/employees.php');
                } else if (isset($_GET['createNewEmployee'])) {
                    include('employees/createNewEmployee.php');
                } else if (isset($_GET['suspendedEmployees'])) {
                    include('employees/suspendedEmployees.php');
                } else if (isset($_GET['businessNetwork'])) { // Red de Negocios

                } else if (isset($_GET['income'])) { // Entradas

                } else if (isset($_GET['outlet'])) { // Salidas

                } else if (isset($_GET['planning'])) { // Planeación Financiera

                } else if (isset($_GET['invoicing'])) { // Facturación

                } else if (isset($_GET['checkInOut'])) { // Registro de Entradas y Salidas

                } else if (isset($_GET['automation'])) { // Control y Automatización

                } else if (isset($_GET['officialSite'])) { // Administrar Sitio Oficial

                } else if (isset($_GET['sdkKeys'])) { // Llaves de APIs y SDKs

                } else if (isset($_GET['databases'])) { // Bases de Datos de ARPAN

                }
                ?>
                


                <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<section class="content">
	<div class="row">
		<!-- BEGIN NAV TICKET -->
		<div class="col-md-3">
			<div class="grid support">
				<div class="grid-body">
					<h2>Ticket de Soporte</h2>
					
					<hr>
					
					<ul>
						<li class="active"><a href="#">Problemas<span class="pull-right">30</span></a></li>
						<li><a href="#">Creados por ti<span class="pull-right">7</span></a></li>
						<li><a href="#">Menciones<span class="pull-right">5</span></a></li>
					</ul>
					
					<hr>
					
					<p><strong>Labels</strong></p>
					<ul class="support-label">
						<li><a href="#"><span class="bg-blue">&nbsp;</span>&nbsp;&nbsp;&nbsp;Aplicación<span class="pull-right">2</span></a></li>
						<li><a href="#"><span class="bg-red">&nbsp;</span>&nbsp;&nbsp;&nbsp;Css<span class="pull-right">3</span></a></li>
						<li><a href="#"><span class="bg-yellow">&nbsp;</span>&nbsp;&nbsp;&nbsp;Diseño<span class="pull-right">3</span></a></li>
						<li><a href="#"><span class="bg-black">&nbsp;</span>&nbsp;&nbsp;&nbsp;Html<span class="pull-right">9</span></a></li>
						<li><a href="#"><span class="bg-light-blue">&nbsp;</span>&nbsp;&nbsp;&nbsp;Javascript<span class="pull-right">5</span></a></li>
						<li><a href="#"><span class="bg-green">&nbsp;</span>&nbsp;&nbsp;&nbsp;Gestión<span class="pull-right">1</span></a></li>
						<li><a href="#"><span class="bg-purple">&nbsp;</span>&nbsp;&nbsp;&nbsp;Móvil<span class="pull-right">2</span></a></li>
						<li><a href="#"><span class="bg-teal">&nbsp;</span>&nbsp;&nbsp;&nbsp;Php<span class="pull-right">5</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- END NAV TICKET -->
		<!-- BEGIN TICKET -->
		<div class="col-md-9">
			<div class="grid support-content">
				 <div class="grid-body">
					 <h2>Problemas</h2>
					 
					 <hr>
					 
					 <div class="btn-group">
						<button type="button" class="btn btn-default active">10 Abiertos</button>
						<button type="button" class="btn btn-default">5 Cerrados</button>
					</div>
					 
					 <div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">  <strong>Más nuevo</strong> <span class="caret"></span></button>
						<ul class="dropdown-menu fa-padding" role="menu">
							<li><a href="#"><i class="fa fa-check"></i> Más nuevo</a></li>
							<li><a href="#"><i class="fa"> </i> Más antiguo</a></li>
							<li><a href="#"><i class="fa"> </i> Recientemente actualizado</a></li>
							<li><a href="#"><i class="fa"> </i> Más comentado</a></li>
							<li><a href="#"><i class="fa"> </i> Menos comentado</a></li>
						</ul>
					</div>
					
					<!-- BEGIN NEW TICKET -->
					<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#newIssue">Nuevo Ticket</button>
					<div class="modal fade" id="newIssue" tabindex="-1" role="dialog" aria-labelledby="newIssue" aria-hidden="true">
						<div class="modal-wrapper">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-blue">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title"><i class="fa fa-pencil"></i> Crear nuevo asunto</h4>
									</div>
									<form action="#" method="post">
										<div class="modal-body">
											<div class="form-group">
												<input name="subject" type="text" class="form-control" placeholder="Nombre">
											</div>
											<div class="form-group">
												<input name="department" type="text" class="form-control" placeholder="Departamento">
											</div>
											<div class="form-group">
												<textarea name="message" class="form-control" placeholder="Por favor detalla tu problema o asunto para atenderlo de manera eficiente" style="height: 120px;"></textarea>
											</div>
											<div class="form-group">
												<input type="file" name="attachment">
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Descartar</button>
											<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i> Crear</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- END NEW TICKET -->
					 
					<div class="padding"></div>
					 
					<div class="row">
						<!-- BEGIN TICKET CONTENT -->
						<div class="col-md-12">
							<ul class="list-group fa-padding">
								<li class="list-group-item" data-toggle="modal" data-target="#issue">
									<div class="media">
										<i class="fa fa-cog pull-left"></i>
										<div class="media-body">
											<strong>Se cierra la importación de configutación de arrastrar y soltar</strong> <span class="label label-danger">IMPORTANTE</span><span class="number pull-right"># 13698</span>
											<p class="info">Revisado por <a href="#">Monserrat Alejandra Castro</a> Hace 3 horas <i class="fa fa-comments"></i> <a href="#">2 comentarios</a></p>
										</div>
									</div>
								</li>
								<li class="list-group-item" data-toggle="modal" data-target="#issue">
									<div class="media">
										<i class="fa fa-code-fork pull-left"></i>
										<div class="media-body">
											<strong>El menú desplegable de activación manual no funciona </strong> <span class="label label-primary">IMPORTANTE</span><span class="number pull-right"># 13695</span>
											<p class="info">Revisado por <a href="#">Sergio Regalado</a> Hace 15 minutos <i class="fa fa-comments"></i> <a href="#">0 comentarios</a></p>
										</div>
									</div>
								</li>
								<li class="list-group-item" data-toggle="modal" data-target="#issue">
									<div class="media">
										<i class="fa fa-cog pull-left"></i>
										<div class="media-body">
											<strong>Hacer arreglos los navegadores con autoprefixer</strong> <span class="label label-warning">URGENTE</span><span class="number pull-right"># 13679</span>
											<p class="info">Revisado por<a href="#"> Erick Estrada</a> Hace 2 horas <i class="fa fa-comments"></i> <a href="#">3 comentarios</a></p>
										</div>
									</div>
								</li>
								<li class="list-group-item" data-toggle="modal" data-target="#issue">
									<div class="media">
										<i class="fa fa-code pull-left"></i>
										<div class="media-body">
											<strong>Popover no se mueve cuando el elemento atado se mueve</strong> <span class="label label-primary">NO IMPORTANTE</span><span class="number pull-right"># 13678</span>
											<p class="info">Revisado por<a href="#"> Manuel Gúzman</a> Hace 1 día <i class="fa fa-comments"></i> <a href="#">1 comentario</a></p>
										</div>
									</div>
								</li>
								<li class="list-group-item" data-toggle="modal" data-target="#issue">
									<div class="media">
										<i class="fa fa-file-o pull-left"></i>
										<div class="media-body">
											<strong>Barra de navegación horizontal a vertical fuera de canva</strong> <span class="label label-primary">IMPORTANTE</span><span class="number pull-right"># 13630</span>
											<p class="info">Revisado por<a href="#"> Carlos Gonzélez</a> 5 days ago <i class="fa fa-comments"></i> <a href="#">3 comentarios</a></p>
										</div>
									</div>
								</li>
							</ul>
							
							<!-- BEGIN DETAIL TICKET -->
							<div class="modal fade" id="issue" tabindex="-1" role="dialog" aria-labelledby="issue" aria-hidden="true">
								<div class="modal-wrapper">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header bg-blue">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<h4 class="modal-title"><i class="fa fa-cog"></i> Se cierra la importación de configutación de arrastrar y soltar</h4>
											</div>
											<form action="#" method="post">
												<div class="modal-body">
													<div class="row">
														<div class="col-md-2">
															<img src="../assets/img/monse.jpg" class="img-circle" alt="" width="50">
														</div>
														<div class="col-md-10">
															<p>Problema <strong>#13698</strong> Revisado por <a href="#">Monserrat Alejandra Castro</a> Hace 3 horas</p>
															<p>Respuesta lenta del sitio cuando se trata de arrastrar y soltar el objeto en cuestión, marca errores e inclusive se congela el objeto y se cierra la ventana donde se encuentra la opción</p>
															
														</div>
													</div>
													<div class="row support-content-comment">
														<div class="col-md-2">
															<img src="../assets/img/carlos.jpg" class="img-circle" alt="" width="50">
														</div>
														<div class="col-md-10">
															<p>Escrito por <a href="#">Carlos Gonzélez</a> 15/11/2021 a las 14:12</p>
															<p>Yo programe esa sección en cuanto termine mi trabajo reviso el problema y lo corrijo</p>
															<a href="#"><span class="fa fa-reply"></span> &nbsp;Responder</a>
														</div>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<!-- END DETAIL TICKET -->
						</div>
						<!-- END TICKET CONTENT -->
					</div>
				</div>
			</div>
		</div>
		<!-- END TICKET -->
	</div>
</section>
</div>
          
               

                <!-- Footer -->
                <footer class="footer pt-0 bg-white">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6">
                            <div class="copyright text-center text-lg-left text-muted">
                                &copy; 2021 <a href="https://www.arpan.com.mx" class="font-weight-bold ml-1" target="_blank">ARPAN México</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="#!" class="nav-link" target="_blank">Aviso de Privacidad</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#!" class="nav-link" target="_blank">Términos y Condiciones</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>


            </div>
        </div>
    

    
       
       


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="../assets/js/argon/js.cookie.js"></script>
<script src="../assets/js/argon/jquery.scrollbar.min.js"></script>
<script src="../assets/js/argon/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="../assets/js/argon/argon.js?v=1.1.0"></script>
<script src="../assets/js/employee/ver_empleado.js"></script>
</body>
</html>