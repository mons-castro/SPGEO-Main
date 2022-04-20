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
    <link rel="stylesheet" href="assets/css/dashboard.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
</head>

<body class="bg-white" onload="saludo()">

<?php 
if (isset($_SESSION["usuario"])) {
    
    exit();
}

?>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-dark" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center bg-white">
                <a class="navbar-brand" href="././dashboard.php">
                    <img src="assets/logos/arpan.svg" class="navbar-brand-img" alt="...">
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
                                <span class="nav-link-text text-white">Análisis de Datos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?businessNetwork">
                                <i class="fas fa-business-time text-orange"></i>
                                <span class="nav-link-text text-white">Red de Negocios</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                                <i class="fas fa-users text-info"></i>
                                <span class="nav-link-text text-white">Recursos Humanos</span>
                            </a>
                            <div class="collapse" id="navbar-components">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="./employees/dashboard_employee.php" class="nav-link text-white">Colaboradores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./employees/incidencias.php" class="nav-link text-white">Incidencias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link text-white">Reclutamiento</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="./employees/entrada-salida.php" class="nav-link text-white">Entradas y Salidas</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-finance" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-finance">
                                <i class="fas fa-cash-register text-pink"></i>
                                <span class="nav-link-text text-white">Finanzas</span>
                            </a>
                            <div class="collapse" id="navbar-finance">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="./finance/flujo.php" class="nav-link text-white">Flujo de Efectivo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?planning" class="nav-link text-white">Planeaciones</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?invoicing" class="nav-link text-white">Facturación</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?automation">
                                <i class="fas fa-network-wired text-indigo"></i>
                                <span class="nav-link-text text-white">Control y Automatización</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted text-white">Extras</h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="?officialSite">
                                <i class="fas fa-desktop text-muted"></i>
                                <span class="nav-link-text text-white">Administrar Sitio Oficial</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?sdkKeys">
                                <i class="fas fa-key text-muted"></i>
                                <span class="nav-link-text text-white">Llaves de APIs</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?databases">
                                <i class="fas fa-database text-muted"></i>
                                <span class="nav-link-text text-white">Bases de Datos</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="main-content bg-white" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-light bg-white" >
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
                                    <a href="applications/ticket.php" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <small>Ticket de Soporte</small>
                                    </a>
                                    <a href="applications/blog.php" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                                            <i class="fas fa-newspaper"></i>
                                        </span>
                                        <small>Blog</small>
                                    </a>
                                    <a href="./projects/dashboard_projects.php" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                                            <i class="fas fa-tasks"></i>
                                        </span>
                                        <small>Gestión de Proyectos</small>
                                    </a>
                                    <a href="applications/slack.php" class="col-4 shortcut-item">
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
                                        <img alt="Image placeholder" src="assets/img/monse.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Monserrat Alejandra Castro Sixtos</span>
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
        
        <div class="header pb-6 border-top">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-3 col-2">
                            <h6 class="h2 d-inline-block mb-0 text-uppercase"><span id="saludo"></span></h6>
                        </div>
                        <div class="col-lg-3 col-2">
                            <h6 class="h2 d-inline-block mb-0 text-uppercase">Son las <span id="time"></span></h6>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- Page content -->
        <div class="container-fluid mt--6">
          <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Actividad</p>
                    <h5 class="font-weight-bolder mb-0">
                      
                      <span class="text-success text-sm font-weight-bolder">55%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fa fa-user" aria-hidden="true" style="color:white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Usuarios hoy</p>
                    <h5 class="font-weight-bolder mb-0">
                      10
                      
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa fa-users" aria-hidden="true" style="color:white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Nuevos Clientes</p>
                    <h5 class="font-weight-bolder mb-0">
                      7
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fa fa-plus" aria-hidden="true" style="color:white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Nuevos proyectos</p>
                    <h5 class="font-weight-bolder mb-0">
                      4
                     
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="fa fa-code" aria-hidden="true" style="color:white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          
            <div class="row">
              <div class="col-xl-8">
                <header>
                  <h4 class="display-4 mb-4 text-center">Diciembre 2021</h4>
                  <div class="row d-none d-sm-flex p-1 bg-dark text-white">
                    <h5 class="col-sm p-1 text-center text-white">Domingo</h5>
                    <h5 class="col-sm p-1 text-center text-white">Lunes</h5>
                    <h5 class="col-sm p-1 text-center text-white">Martes</h5>
                    <h5 class="col-sm p-1 text-center text-white">Miercoles</h5>
                    <h5 class="col-sm p-1 text-center text-white">Jueves</h5>
                    <h5 class="col-sm p-1 text-center text-white">Viernes</h5>
                    <h5 class="col-sm p-1 text-center text-white">Sabado</h5>
                  </div>
                </header>
                <div class="row border border-right-0 border-bottom-0">
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                    <h5 class="row align-items-center">
                      <span class="date col-1">29</span>
                      <small class="col d-sm-none text-center text-muted">Sunday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                    <h5 class="row align-items-center">
                      <span class="date col-1">30</span>
                      <small class="col d-sm-none text-center text-muted">Monday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                    <h5 class="row align-items-center">
                      <span class="date col-1">31</span>
                      <small class="col d-sm-none text-center text-muted">Tuesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">1</span>
                      <small class="col d-sm-none text-center text-muted">Wednesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">2</span>
                      <small class="col d-sm-none text-center text-muted">Thursday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">3</span>
                      <small class="col d-sm-none text-center text-muted">Friday</small>
                      <span class="col-1"></span>
                    </h5>
                    <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-info text-white" title="Test Event 1">Test Event 1</a>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">4</span>
                      <small class="col d-sm-none text-center text-muted">Saturday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="w-100"></div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">5</span>
                      <small class="col d-sm-none text-center text-muted">Sunday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">6</span>
                      <small class="col d-sm-none text-center text-muted">Monday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">7</span>
                      <small class="col d-sm-none text-center text-muted">Tuesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">8</span>
                      <small class="col d-sm-none text-center text-muted">Wednesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-success text-white" title="Test Event 2">Test Event 2</a>
                    <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-danger text-white" title="Test Event 3">Test Event 3</a>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">9</span>
                      <small class="col d-sm-none text-center text-muted">Thursday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">10</span>
                      <small class="col d-sm-none text-center text-muted">Friday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">11</span>
                      <small class="col d-sm-none text-center text-muted">Saturday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="w-100"></div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">12</span>
                      <small class="col d-sm-none text-center text-muted">Sunday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">13</span>
                      <small class="col d-sm-none text-center text-muted">Monday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">14</span>
                      <small class="col d-sm-none text-center text-muted">Tuesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">15</span>
                      <small class="col d-sm-none text-center text-muted">Wednesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">16</span>
                      <small class="col d-sm-none text-center text-muted">Thursday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">17</span>
                      <small class="col d-sm-none text-center text-muted">Friday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">18</span>
                      <small class="col d-sm-none text-center text-muted">Saturday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="w-100"></div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">19</span>
                      <small class="col d-sm-none text-center text-muted">Sunday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">20</span>
                      <small class="col d-sm-none text-center text-muted">Monday</small>
                      <span class="col-1"></span>
                    </h5>
                    <a class="event d-block p-1 pl-2 pr-2 mb-1 rounded text-truncate small bg-primary text-white" title="Test Event with Super Duper Really Long Title">Test Event with Super Duper Really Long Title</a>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">21</span>
                      <small class="col d-sm-none text-center text-muted">Tuesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">22</span>
                      <small class="col d-sm-none text-center text-muted">Wednesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">23</span>
                      <small class="col d-sm-none text-center text-muted">Thursday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">24</span>
                      <small class="col d-sm-none text-center text-muted">Friday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">25</span>
                      <small class="col d-sm-none text-center text-muted">Saturday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="w-100"></div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">26</span>
                      <small class="col d-sm-none text-center text-muted">Sunday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">27</span>
                      <small class="col d-sm-none text-center text-muted">Monday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">28</span>
                      <small class="col d-sm-none text-center text-muted">Tuesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">29</span>
                      <small class="col d-sm-none text-center text-muted">Wednesday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate ">
                    <h5 class="row align-items-center">
                      <span class="date col-1">30</span>
                      <small class="col d-sm-none text-center text-muted">Thursday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                    <h5 class="row align-items-center">
                      <span class="date col-1">31</span>
                      <small class="col d-sm-none text-center text-muted">Friday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="day col-sm p-2 border border-left-0 border-top-0 text-truncate d-none d-sm-inline-block bg-light text-muted">
                    <h5 class="row align-items-center">
                      <span class="date col-1">1</span>
                      <small class="col d-sm-none text-center text-muted">Saturday</small>
                      <span class="col-1"></span>
                    </h5>
                    <p class="d-sm-none">No events</p>
                  </div>
                  <div class="w-100"></div>
                 
                </div>
              </div>
              <div class="col-xl-4">
              <br><br><br>
                <div class="card">
                  <div class="card-header border-0">
                    <div class="row align-items-center">
                      <div class="col">
                        <h3 class="mb-0 text-white" >Proyectos</h3>
                      </div>
                      <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary">Ver todo
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Proyecto</th>
                          <th scope="col">Tareas</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            Tlalpujahua
                          </th>
                          <td>
                            55
                          </td>
                        <tr>
                          <th scope="row">
                            Beca Pública
                          </th>
                          <td>
                            47
                          </td>
                          
                        </tr>
                        <tr>
                          <th scope="row">
                            SPGEO
                          </th>
                          <td>
                            60
                          </td>
                          
                        </tr>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            

              
          </div>
        
          
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
<div class="page-content container note-has-grid">
    <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2 active" id="all-category">
                <i class="icon-layers mr-1"></i><span class="d-none d-md-block">Todas las Notas</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-business"> <i class="icon-briefcase mr-1"></i><span class="d-none d-md-block">Negocio</span></a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-social"> <i class="icon-share-alt mr-1"></i><span class="d-none d-md-block">Social</span></a>
        </li>
        <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-important"> <i class="icon-tag mr-1"></i><span class="d-none d-md-block">Importante</span></a>
        </li>
        <li class="nav-item ml-auto">
            <a href="javascript:void(0)" class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes"> <i class="icon-note m-1"></i><span class="d-none d-md-block font-14">Añadir nota</span></a>
        </li>
    </ul>
    <div class="tab-content bg-transparent">
        <div id="note-full-container" class="note-has-grid row">
            <div class="col-md-4 single-note-item all-category" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Book a Ticket for Movie">Book a Ticket for Movie <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">11 March 2009</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-important" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Go for lunch">Go for lunch <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">01 April 2002</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-social" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Meeting with Mr.Jojo">Cumpleaños Carlos Guzmán <i class="fa fa-birthday-cake" aria-hidden="true"></i></h5>
                    <p class="note-date font-12 text-muted">01 Diciembre 2021</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">No olvides felicitarlo.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-business" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give Review for design">Give Review for design <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">02 January 2000</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-social" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Nightout with friends">Cumpleaños Monserrat <i class="fa fa-birthday-cake" aria-hidden="true"></i></h5>
                    <p class="note-date font-12 text-muted">11 Diciembre 2021</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Envía tus mejores deseos</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-important" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Launch new template">Launch new template <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">21 January 2015</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-social" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Change a Design">Noche Buena <i class="fa fa-tree" aria-hidden="true"></i></h5>
                    <p class="note-date font-12 text-muted">24 Diciembre 2021</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Reunión con el equipo ARPAN México</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-business" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give review for foods">Give review for foods <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">18 December 2020</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 single-note-item all-category note-important" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Give salary to employee">Give salary to employee <i class="point fa fa-circle ml-1 font-10"></i></h5>
                    <p class="note-date font-12 text-muted">15 Fabruary 2020</p>
                    <div class="note-content">
                        <p class="note-inner-content text-muted" data-notecontent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="mr-1"><i class="fa fa-star favourite-note"></i></span>
                        <span class="mr-1"><i class="fa fa-trash remove-note"></i></span>
                        <div class="ml-auto">
                            <div class="category-selector btn-group">
                                <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                    <div class="category">
                                        <div class="category-business"></div>
                                        <div class="category-social"></div>
                                        <div class="category-important"></div>
                                        <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right category-menu">
                                    <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business
                                    </a>
                                    <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social
                                    </a>
                                    <a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);">
                                        <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add notes -->
    <div class="modal fade" id="addnotesmodal" tabindex="-1" role="dialog" aria-labelledby="addnotesmodalTitle" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title text-white">Agregar Notas</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="notes-box">
                        <div class="notes-content">
                            <form action="javascript:void(0);" id="addnotesmodalTitle">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <div class="note-title">
                                            <label>Titulo Nota</label>
                                            <input type="text" id="note-has-title" class="form-control" minlength="25" placeholder="Title" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="note-description">
                                            <label>Descripción</label>
                                            <textarea id="note-has-description" class="form-control" minlength="60" placeholder="Description" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-n-save" class="float-left btn btn-success" style="display: none;">Save</button>
                    <button class="btn btn-danger" data-dismiss="modal">Descartar</button>
                    <button id="btn-n-add" class="btn btn-info" disabled="disabled">Agregar</button>
                </div>
            </div>
        </div>
    </div>
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

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      $(function() {
    function removeNote() {
        $(".remove-note").off('click').on('click', function(event) {
          event.stopPropagation();
          $(this).parents('.single-note-item').remove();
        })
    }

    function favouriteNote() {
        $(".favourite-note").off('click').on('click', function(event) {
          event.stopPropagation();
          $(this).parents('.single-note-item').toggleClass('note-favourite');
        })
    }

    function addLabelGroups() {
        $('.category-selector .badge-group-item').off('click').on('click', function(event) {
          event.preventDefault();
          /* Act on the event */
          var getclass = this.className;
          var getSplitclass = getclass.split(' ')[0];
          if ($(this).hasClass('badge-business')) {
            $(this).parents('.single-note-item').removeClass('note-social');
            $(this).parents('.single-note-item').removeClass('note-important');
            $(this).parents('.single-note-item').toggleClass(getSplitclass);
          } else if ($(this).hasClass('badge-social')) {
            $(this).parents('.single-note-item').removeClass('note-business');
            $(this).parents('.single-note-item').removeClass('note-important');
            $(this).parents('.single-note-item').toggleClass(getSplitclass);
          } else if ($(this).hasClass('badge-important')) {
            $(this).parents('.single-note-item').removeClass('note-social');
            $(this).parents('.single-note-item').removeClass('note-business');
            $(this).parents('.single-note-item').toggleClass(getSplitclass);
          }
        });
    }

    var $btns = $('.note-link').click(function() {
        if (this.id == 'all-category') {
          var $el = $('.' + this.id).fadeIn();
          $('#note-full-container > div').not($el).hide();
        } if (this.id == 'important') {
          var $el = $('.' + this.id).fadeIn();
          $('#note-full-container > div').not($el).hide();
        } else {
          var $el = $('.' + this.id).fadeIn();
          $('#note-full-container > div').not($el).hide();
        }
        $btns.removeClass('active');
        $(this).addClass('active');  
    })

    $('#add-notes').on('click', function(event) {
        $('#addnotesmodal').modal('show');
        $('#btn-n-save').hide();
        $('#btn-n-add').show();
    })

    // Button add
    $("#btn-n-add").on('click', function(event) {
        event.preventDefault();
        /* Act on the event */
        var today = new Date();
      var dd = String(today.getDate()).padStart(2, '0');
      var mm = String(today.getMonth()); //January is 0!
      var yyyy = today.getFullYear();
      var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
      today = dd + ' ' + monthNames[mm]  + ' ' + yyyy;

        var $_noteTitle = document.getElementById('note-has-title').value;
        var $_noteDescription = document.getElementById('note-has-description').value;

        $html =     '<div class="col-md-4 single-note-item all-category"><div class="card card-body">' +
                                '<span class="side-stick"></span>' +
                                '<h5 class="note-title text-truncate w-75 mb-0" data-noteHeading="'+$_noteTitle+'">'+$_noteTitle+'<i class="point fa fa-circle ml-1 font-10"></i></h5>' +
                                '<p class="note-date font-12 text-muted">'+today+'</p>' +
                                '<div class="note-content">' +
                                    '<p class="note-inner-content text-muted" data-noteContent="'+$_noteDescription+'">'+$_noteDescription+'</p>' +
                                '</div>' +
                                '<div class="d-flex align-items-center">' +
                                    '<span class="mr-1"><i class="fa fa-star favourite-note"></i></span>' +
                                    '<span class="mr-1"><i class="fa fa-trash remove-note"></i></span>' +
                                    '<div class="ml-auto">' +
                                          '<div class="category-selector btn-group">' +
                                                    '<a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">' +
                                                        '<div class="category">' +
                                                            '<div class="category-business"></div>' +
                                                            '<div class="category-social"></div>' +
                                                            '<div class="category-important"></div>' +
                                                            '<span class="more-options text-dark"><i class="icon-options-vertical"></i></span>'+
                                                        '</div>' +
                                                    '</a>' +
                                                    '<div class="dropdown-menu dropdown-menu-right category-menu">' +
                                                        '<a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>Business</a>' +
                                                        '<a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Social</a>' +
                                                        '<a class="note-important badge-group-item badge-important dropdown-item position-relative category-important text-danger" href="javascript:void(0);"><i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i> Important</a>' +
                                                '</div>' +
                                         '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div></div> ';

        $("#note-full-container").prepend($html);
        $('#addnotesmodal').modal('hide');

        removeNote();
        favouriteNote();
        addLabelGroups();
    });

    $('#addnotesmodal').on('hidden.bs.modal', function (event) {
        event.preventDefault();
        document.getElementById('note-has-title').value = '';
        document.getElementById('note-has-description').value = '';
    })

    removeNote();
    favouriteNote();
    addLabelGroups();

    $('#btn-n-add').attr('disabled', 'disabled'); 
})

 $('#note-has-title').keyup(function() {
      var empty = false;
      $('#note-has-title').each(function() {
          if ($(this).val() == '') {
                  empty = true;
          }
      });

      if (empty) {
          $('#btn-n-add').attr('disabled', 'disabled'); 
      } else {
          $('#btn-n-add').removeAttr('disabled');
      }
}); 
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script src="assets/js/argon/js.cookie.js"></script>
    <script src="assets/js/argon/jquery.scrollbar.min.js"></script>
    <script src="assets/js/argon/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon/argon.js?v=1.1.0"></script>
   
    <script src="assets/js/clock.js"></script>
</body>

</html>