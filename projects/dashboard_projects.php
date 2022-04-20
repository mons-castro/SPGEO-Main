<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Gestión de Proyectos | ARPAN</title>
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
    <link rel="stylesheet" href="../assets/css/projects/dashboard_projects.css" type="text/css">
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
                            <div class="col-lg-6 col-2">
                                <h6 class="h2 d-inline-block mb-0 text-uppercase">GESTION DE PROYECTOS</span></h6>
                            </div>
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
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa fa-archive text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">24</h5>
                            <p class="text-muted mb-0">Proyectos</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa fa-th text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">18</h5>
                            <p class="text-muted mb-0">Proyectos Completados</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa fa-file text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">06</h5>
                            <p class="text-muted mb-0">Proyectos Pendientes</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-0">
                                    <label>Buscar</label>
                                    <div class="input-group mb-0">
                                        <input type="text" class="form-control" placeholder="Buscar..." aria-describedby="project-search-addon" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="project-search-addon"><i class="fa fa-search search-icon font-12"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- end row -->
                <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary btn-rounded w-md waves-effect waves-light mb-4"><i class="mdi mdi-plus-circle"></i> Crear Proyecto</button>
                        </div>
                        <div class="col-sm-9">
                            <div class="project-sort float-right">
                                <div class="project-sort-item">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label for="phase-select">Fase :</label>
                                            <select class="form-control ml-2 form-control-sm" id="phase-select">
                                                <option>Todos los proyectos</option>
                                                <option>Completados</option>
                                                <option>En progreso</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="sort-select">Ordenar :</label>
                                            <select class="form-control ml-2 form-control-sm" id="sort-select">
                                                <option>Fecha</option>
                                                <option>Nombre</option>
                                                <option>Fecha de Fin</option>
                                                <option>Fecha de Inicio</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card-box project-box">
                                <div class="dropdown float-right"><a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false"><h3 class="m-0 text-muted"><i class="mdi mdi-dots-horizontal"></i></h3></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="./project.php">Editar</a> <a class="dropdown-item" href="#">Eliminar</a> <a class="dropdown-item" href="#">Añadir Miembro</a></div>
                                </div>
                                <p class="text-muted text-uppercase mb-0 font-13">GESTION</p>
                                <h4 class="mt-0 mb-3"><a href="" class="text-dark">Software Para la Gestión Empresarial y Operaciones (SPGEO)</a></h4>
                                <p class="text-muted font-13">Solución para el control de Pequeñas, Medianas y Grandes empresas, se maneja una fusión del Internet de las Cosas...<a href="#" class="font-600 text-muted">Ver más</a></p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h3 class="mb-0">85</h3>
                                        <p class="text-muted">Tareas</p>
                                    </li>
                                    <li class="list-inline-item">
                                    <div class="badge bg-warning">En proceso</div>
                                    </li>
                                </ul>
                                <div class="project-members mb-4">
                                    <label class="mr-3">Equipo :</label>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme"><img src="../assets/img/jony.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty"><img src="../assets/img/carlos.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson"><img src="../assets/img/manuel.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme"><img src="../assets/img/aron.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                </div>
                                <label class="">Tareas Completadas <span class="text-custom">55/85</span></label>
                                <div class="progress mb-1" style="height: 7px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                                    <!-- /.progress-bar .progress-bar-danger -->
                                </div>
                                <!-- /.progress .no-rounded -->
                            </div>
                        </div>
                        <!-- end col-->
                        <div class="col-xl-4">
                            <div class="card-box project-box">
                                <div class="dropdown float-right"><a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false"><h3 class="m-0 text-muted"><i class="mdi mdi-dots-horizontal"></i></h3></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="#">Editar</a> <a class="dropdown-item" href="#">Eliminar</a> <a class="dropdown-item" href="#">Añadir Miembro</a></div>
                                </div>
                                <p class="text-muted text-uppercase mb-0 font-13">EDUCACION</p>
                                <h4 class="mt-0 mb-3"><a href="" class="text-dark">Beca Pública</a></h4>
                                <p class="text-muted font-13">Registro de dos tipos de usuarios: donadores y beneficiarios, para armar montos y ofrecer una beca pública...<a href="#" class="font-600 text-muted">Ver más</a></p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h3 class="mb-0">39</h3>
                                        <p class="text-muted">Tareas</p>
                                    </li>
                                    <li class="list-inline-item">
                                    <div class="badge bg-danger my-2">En espera</div>
                                    </li>
                                </ul>
                                <div class="project-members mb-4">
                                    <label class="mr-3">Equipo :</label>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme"><img src="../assets/img/jesus.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty"><img src="../assets/img/luis.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme"><img src="../assets/img/abraham.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username"><img src="../assets/img/monse.jpg" class="rounded-circle thumb-sm" alt="friend"></a>
                                </div>
                                <label class="">Task completed: <span class="text-custom">22/39</span></label>
                                <div class="progress mb-1" style="height: 7px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    <!-- /.progress-bar .progress-bar-danger -->
                                </div>
                                <!-- /.progress .no-rounded -->
                            </div>
                        </div>
                        <!-- end col-->
                        <div class="col-xl-4">
                            <div class="card-box project-box">
                                <div class="dropdown float-right"><a href="#" class="dropdown-toggle card-drop arrow-none" data-toggle="dropdown" aria-expanded="false"><h3 class="m-0 text-muted"><i class="mdi mdi-dots-horizontal"></i></h3></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="#">Editar</a> <a class="dropdown-item" href="#">Eliminar</a> <a class="dropdown-item" href="#">Añadir Miembro</a></div>
                                </div>
                                <p class="text-muted text-uppercase mb-0 font-13">TURISMO</p>
                                <h4 class="mt-0 mb-3"><a href="" class="text-dark">Tickets Tlalpujahua</a></h4>
                                <p class="text-muted font-13">Innovoación en destinos turísiticos del Estado de Michoacán con Pueblos Mágicos para fomentar el turismo...<a href="#" class="font-600 text-muted">Ver más</a></p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h3 class="mb-0">120</h3>
                                        <p class="text-muted">Tareas</p>
                                    </li>
                                    <li class="list-inline-item">
                                    <div class="badge bg-success my-2">Terminado</div>
                                    </li>
                                </ul>
                                <div class="project-members mb-4">
                                    <label class="mr-3">Equipo :</label>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty"><img src="../assets/img/carlos.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson"><img src="../assets/img/manuel.jpg" class="rounded-circle thumb-sm" alt="friend"> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme"><img src="../assets/img/monse.jpg" class="rounded-circle thumb-sm" alt="friend"></a>
                                </div>
                                <label class="">Task completed: <span class="text-custom">120/120</span></label>
                                <div class="progress mb-1" style="height: 7px;">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    <!-- /.progress-bar .progress-bar-danger -->
                                </div>
                                <!-- /.progress .no-rounded -->
                            </div>
                        </div>
                        <!-- end col-->
                    </div>
                    <!-- end row -->
                    
                
                </div>
                <!-- container -->
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