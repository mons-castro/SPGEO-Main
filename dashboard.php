<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Panel de Control | ARPAN</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <!-- Fonts -->
    <!-- Icons -->
    <link rel="stylesheet" href="assets/css/argon/nucleo.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="assets/css/argon/argon.css" type="text/css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="dashboard">
                    <img src="assets/logos/ARPAN-Letter.png" class="navbar-brand-img" alt="...">
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="?dataAnalysis">
                                <i class="fas fa-chart-bar text-primary"></i>
                                <span class="nav-link-text">Análisis de Datos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?businessNetwork">
                                <i class="fas fa-business-time text-orange"></i>
                                <span class="nav-link-text">Red de Negocios</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                                <i class="fas fa-users text-info"></i>
                                <span class="nav-link-text">Recursos Humanos</span>
                            </a>
                            <div class="collapse" id="navbar-components">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Colaboradores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Incidencias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Reclutamiento</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link">Entradas y Salidas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-finance" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-finance">
                                <i class="fas fa-cash-register text-pink"></i>
                                <span class="nav-link-text">Finanzas</span>
                            </a>
                            <div class="collapse" id="navbar-finance">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="?income" class="nav-link">Flujo de Efectivo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?planning" class="nav-link">Planeaciones</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?invoicing" class="nav-link">Facturación</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?automation">
                                <i class="fas fa-network-wired text-indigo"></i>
                                <span class="nav-link-text">Control y Automatización</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">Extras</h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="?officialSite">
                                <i class="fas fa-desktop text-muted"></i>
                                <span class="nav-link-text">Administrar Sitio Oficial</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?sdkKeys">
                                <i class="fas fa-key text-muted"></i>
                                <span class="nav-link-text">Llaves de APIs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?databases">
                                <i class="fas fa-database text-muted"></i>
                                <span class="nav-link-text">Bases de Datos</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center ml-md-auto">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell"></i> Notificaciones
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                                <!-- Dropdown header -->
                                <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">1</strong>
                                        notificación.</h6>
                                </div>
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder" src="../../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">John Snow</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>2 hrs ago</small>
                                                    </div>
                                                </div>
                                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!-- View all -->
                                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">Ver
                                    todo</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-archive"></i> Aplicaciones
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                                <div class="row shortcuts px-4">
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                        <small>Calendario</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                        <small>Envío de Correos</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <small>Ticket de Soporte</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                            <i class="fas fa-newspaper"></i>
                                        </span>
                                        <small>Blog</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                            <i class="fas fa-tasks"></i>
                                        </span>
                                        <small>Gestión de Proyectos</small>
                                    </a>
                                    <a href="#!" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                                            <i class="fas fa-comments"></i>
                                        </span>
                                        <small>Slack</small>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="https://source.unsplash.com/7omHUGhhmZ0">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Abraham Ayala Padilla</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Opciones</h6>
                                </div>
                                <a href="#!" class="dropdown-item">
                                    <i class="fas fa-user"></i>
                                    <span>Mi Perfil</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="fas fa-cog"></i>
                                    <span>Configuración</span>
                                </a>
                                <a href="#!" class="dropdown-item">
                                    <i class="fas fa-question"></i>
                                    <span>Soporte</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="#!" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Cerrar Sesión</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header -->
        <!-- Header -->
        <div class="header pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 d-inline-block mb-0 text-uppercase">Son las <span id="time"></span></h6>
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


            <!-- Footer -->
            <footer class="footer pt-0">
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

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="assets/js/argon/js.cookie.js"></script>
    <script src="assets/js/argon/jquery.scrollbar.min.js"></script>
    <script src="assets/js/argon/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon/argon.js?v=1.1.0"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/clock.js"></script>
</body>

</html>