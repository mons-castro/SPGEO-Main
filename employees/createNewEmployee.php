<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>REGISTRO DE USUARIO | ARPAN</title>
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
    <link rel="stylesheet" href="../assets/css/dashboard.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">
    <link rel="stylesheet" href="../assets/css/employee/new_employee.css" type="text/css">
</head>

<body class="bg-white">
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-dark" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center bg-white">
                <a class="navbar-brand" href="./../dashboard.php">
                    <img src="../assets/logos/arpan.svg" class="navbar-brand-img" alt="...">
                    <img src="../assets/logos/ARPAN-Letter.png" class="navbar-brand-img" alt="...">
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
                                        <a href="./../employees/dashboard_employee.php" class="nav-link text-white">Colaboradores</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link text-white">Incidencias</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link text-white">Reclutamiento</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#!" class="nav-link text-white">Entradas y Salidas</a>
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
                                        <a href="?income" class="nav-link text-white">Flujo de Efectivo</a>
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
                                                <img alt="Image placeholder" class="avatar rounded-circle">
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
        <div class="header pb-6 border-top">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        
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
                <div class="card mb-4">
    
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0 text-uppercase text-center titulo">Registrar un nuevo empleado</h3>
    </div>
        <!------------------------------------------------------ INFORMACION PERSONAL --------------------------------------------------->
        <br>
        <div id="error-gral" class="alert alert-danger error " role="alert"></div>
        <form id="registro" enctype="multipart/form-data" >
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <h4 class="titulo text-center"><i class="fas fa-user"></i> Información Personal</h4>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="form-group">
                        <div id="e-nombre" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="nombre1">Nombre</label>
                        <input type="text" class="form-control" id="nombre1" placeholder="Ej. Karen" name="nombre">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="form-group">
                        <div id="e-nombre2" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="nombre2">Segundo Nombre</label>
                        <input type="text" class="form-control" id="nombre2" placeholder="Ej. Yunuen" name="nombre2">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="form-group">
                            <div id="e-apat" class="alert alert-danger error" role="alert"></div>
                            <label class="campos" for="apaterno">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apaterno" placeholder="Ej. Mora" name="apaterno">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="form-group">
                            <div id="e-amat" class="alert alert-danger error" role="alert"></div>
                            <label class="campos" for="amaterno">Apellido Materno</label>
                            <input type="text" class="form-control" id="amaterno" placeholder="Ej. Quintana" name="amaterno">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
            </div>
        
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>   
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-tel" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="tel">Teléfono</label>
                        <input type="text" class="form-control" id="tel" placeholder="Ej. 3312991964" name="tel">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-fecha" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="nacimiento">Fecha de Nacimiento</label>
                        <input class="form-control" type="date" id="nacimiento" name="nacimiento">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-sexo" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="sexo">Sexo</label>
                        <select name="sexo" class="form-control required" id="sexo">
                            <option value="">Selecciona el Género</option>
                            <option value="M">Másculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-religion" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="religion">Religión</label>
                        <select name="religion" class="form-control" id="religion">
                            <option value="">Selecciona la Religión</option>
                            <option value="Hinduismo">Hinduismo</option>
                            <option value="Judaísmo">Judaísmo</option>
                            <option value="Taoísmo">Taoísmo</option>
                            <option value="Budismo">Budismo</option>
                            <option value="Cristianismo">Cristianismo</option>
                            <option value="Jainismo">Jainismo</option>
                            <option value="Sijismo">Sijismo</option>
                            <option value="Islam">Islam</option>
                            <option value="Bahaísmo">Bahaísmo</option>
                            <option value="Catolicismo">Catolicismo</option>
                            <option value="Satanismo">Satanismo</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
            </div>


            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-edocivil" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="estcivil">Estado Civil</label>
                        <select name="estcivil"class="form-control" id="estcivil">
                            <option value="">Selecciona el Estado Civil</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Separación en Proceso Judicial">Separación en Proceso Judicial</option>
                            <option value="Viudo">Viudo</option>
                            <option value="Concubinato">Concubinato</option>
                            <option value="Relación Sentimental">Relación Sentimental</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-nss" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="nss">NSS</label>
                        <input name="nss" type="text" class="form-control" id="nss" placeholder="Ej. 69169823072">
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-rfc" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="rfc">RFC</label>
                        <input name="rfc" type="text" class="form-control" id="rfc" placeholder="Ej. AAPA980929CC5">
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-curp" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="curp">CURP</label>
                        <input name="curp" type="text" class="form-control" id="curp" placeholder="Ej. AAPA980929HMNYDB06">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
            </div>

            <!----------------------------------------- UBICACION ----------------------------------------------------------------------->

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"><h4 class="titulo text-center"><i class="fas fa-home"></i> Ubicación</h4></div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="form-group">
                        <div id="map"></div>
                        <div id="e-cp" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="cp">Código Postal</label>
                        <input name="cp" type="number" class="form-control" id="cp" placeholder="Ej. 61100">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4 align-self-center">
                    <button id="ubi" type="button" class="btn btn-secondary"><i class="fas fa-search"></i> Buscar ubicación</button>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
            </div>

            <section class="location">
                <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="form-group">
                            <div id="e-estado" class="alert alert-danger error" role="alert"></div>
                            <label class="campos" for="estado">Estado</label>
                            <input name="estado" type="text" class="form-control" id="estado" placeholder="Este campo se llena autoáticamente">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12 mb-3">
                        <div class="form-group">
                            <div id="e-municipio" class="alert alert-danger error" role="alert"></div>
                            <label class="campos" for="municipio">Municipio</label>
                            <input name="municipio" type="text" class="form-control" id="municipio" placeholder="Este campo se llena autoáticamente">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 mb-3">
                        <div class="form-group">
                            <div id="e-colonia" class="alert alert-danger error" role="alert"></div>
                            <label class="campos" for="colonia">Colonia</label>
                            <input name="colonia" type="text" class="form-control" id="colonia" placeholder="Este campo se llena autoáticamente">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="form-group">
                            <div id="e-calle" class="alert alert-danger error" role="alert"></div>
                            <label class="campos" for="calle">Calle</label>
                            <input name="calle" type="text" class="form-control" id="calle" placeholder="Este campo se llena autoáticamente">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="form-group">
                            <div id="e-numero" class="alert alert-danger error" role="alert"></div>
                            <label class="campos" for="direcnum">Número</label>
                            <input name="direcnum" type="number" class="form-control" id="direcnum" placeholder="Este campo se llena autoáticamente">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                </div>
            </section>

            <!------------------------  INFORMACION LABORAL ------------------------------------------------------------------->
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"><h4 class="titulo text-center"><i class="fas fa-briefcase"></i> Información Laboral</h4></div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="form-group">
                        <div id="e-lic" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="lic">Licenciatura</label>
                        <input name="lic" type="text" class="form-control" id="lic" placeholder="Ej. Ingeniería en Gestión Empresarial">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                    <div class="form-group">
                        <div id="e-puesto" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="puesto">Puesto de Trabajo</label>
                        <select name="puesto"class="form-control" id="puesto">
                            <option value="" >Selecciona el Puesto</option>
                            <option value="Desarrollador Web">Desarrollador Web</option>
                            <option value="Desarrollador Móvil">Desarrollador Móvil</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                <div class="col-lg-5 col-md-4 col-sm-12">
                    <div class="form-group">
                        <div id="e-bio" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="biografia">Biografía Laboral</label>
                        <textarea name="biografia" class="form-control" id="biografia" rows="8"></textarea>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 align-self-center">
                    <label class="campos" for="file">Foto del Empleado</label>
                    <div id="e-foto" class="alert alert-danger error" role="alert"></div>
                    <input type="file" name="file" id="file" accept="image/png, image/jpeg, image/jpg, image/gif" />
                    <img id="img" class="img-fluid rounded-circle shadow-xl" src="#" alt="">
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
            </div>
            
            <!-- REDES SOCIALES-->
            <br>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"> <h4 class="titulo text-center"><i class="fas fa-project-diagram"></i> Redes Sociales</h4></div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-fb" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="fb">Usuario de Facebook</label>
                        <input name="fb" type="text" class="form-control" id="fb" placeholder="Ej. abrxy">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-ig" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="ig">Usuario de Instagram</label>
                        <input name="ig" type="text" class="form-control" id="ig" placeholder="Ej. abe.dmg">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-2">
                    <div class="form-group">
                        <div id="e-linkedin" class="alert alert-danger error" role="alert"></div>
                        <label class="campos" for="linkedin">Usuario de Linkedin</label>
                        <input name="linkedin"type="text" class="form-control" id="linkedin" placeholder="Ej. abe_dmg">
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
            </div>

            <div class="row">
                <div class="col-lg-9 col-md-2 col-sm-12 mb-2"></div>
                <div class="col-lg-3 col-md-3 col-sm-12 mb-2 right-block">
                    <div class="form-group">
                        <button class="btn registrar" type="button" id="registraemp"> Registrar </button>           
                    </div>
                </div>

            </div>
        </form>
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

   


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../assets/js/argon/js.cookie.js"></script>
    <script src="../assets/js/argon/jquery.scrollbar.min.js"></script>
    <script src="../assets/js/argon/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon/argon.js?v=1.1.0"></script>
    <script src="../assets/js/employee/create_emp.js"></script>
   
</body>

</html>