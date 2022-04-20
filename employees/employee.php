<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Perfil Empleado | ARPAN</title>
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
    <link rel="stylesheet" href="../assets/css/employee/employee.css" type="text/css">
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
                            <h6 class="h2 d-inline-block mb-0 text-uppercase">PERFIL DEL EMPLEADO</span></h6>
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
                <div class="container">
                <div class="row gutters">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                <img src="../assets/img/monse.jpg" alt="Rounded image" class="img-fluid rounded shadow" style="width: auto;">
                                </div>
                                <h5 class="user-name">Monserrat Alejandra Castro Sixtos</h5>
                                <h6 class="user-email">alejandra_castro@arpan.com.mx</h6>
                            </div>
                            <div class="about">
                                <h5 style="text-align:justify">Biografía</h5>
                                <p style="text-align:justify">Proactiva, comprometida, responsable con ganas de aprender e innovar. Proactiva, comprometida, responsable con ganas de aprender e innovar. Proactiva, comprometida, responsable con ganas de aprender e innovar. Proactiva, comprometida, responsable con ganas de aprender e innovar.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                <div class="card-body">
                            <div class="nav-wrapper">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="info-personal" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fas fa-user iconos"></i>Información personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="info-ubicacion" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fas fa-home iconos"></i>Ubicación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="info-laboral" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fas fa-briefcase iconos"></i>Información laboral</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="info-redes" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="fas fa-project-diagram iconos"></i> Redes Sociales</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                            <div class="row">
                                                    <div class="col-lg-6 col-md-2 col-sm-12 mb-2">
                                                    <label class="renglon">Nombre:</label>
                                                        <span id="nombre">Monserrat Alejandra Castro Sixtos</span><br>
                                                        <label class="renglon">Telefono:</label>
                                                        <span id="tel">443555831</span><br>
                                                        <label class="renglon">Fecha de Nacimiento:</label>
                                                        <span id="nacimiento">1998/12/11</span><br>
                                                        <label class="renglon">Sexo:</label>
                                                        <span id="sexo">Femenino</span><br>
                                                    </div>
                                                    <div class="col-lg-6 col-md-2 col-sm-12 mb-2">
                                                        <label class="renglon">Religión:</label>
                                                        <span id="religion">Catolicismo</span><br>
                                                        <label class="renglon">Estado Civil:</label>
                                                        <span id="edo_civil">Soltero (a)</span><br>
                                                        <label class="renglon">NSS:</label>
                                                        <span id="nss">15478932145</span><br>
                                                        <label class="renglon">CURP:</label>
                                                        <span id="curp">CASM981211MMNSXN09</span><br>
                                                        <label class="campos">RFC:</label>
                                                        <span id="rfc">CANE721211BD1</span>
                                                    </div>
                                                    
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                                <div class="row">
                                                            <div class="col-lg-6 col-md-2 col-sm-12 mb-2">
                                                                <label class="renglon">Código Postal:</label>
                                                                <span id="cp">58337</span><br>
                                                                <label class="renglon">Estado:</label>
                                                                <span id="estado">Michoacán</span><br>
                                                                <label class="renglon">Municipio:</label>
                                                                <span id="municipio">Morelia</span><br>
                                                            </div>
                                                            <div class="col-lg-6 col-md-2 col-sm-12 mb-2">
                                                                <label class="renglon">Colonia:</label>
                                                                <span id="colonia">San Isidro Itzicuaro</span><br>
                                                                <label class="renglon">Calle:</label>
                                                                <span id="calle">Tarecuato</span><br>
                                                                <label class="renglon">Número:</label>
                                                                <span id="numero">572</span><br>
                                                            </div>
                                                            
                                                </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                                <div class="row">
                                                            <div class="col-lg-6 col-md-2 col-sm-12 mb-2">
                                                                <label class="renglon">Licenciatura:</label>
                                                                <span id="licenciatura">Ingeniería en Tecnologías de la Información y Comunicaciones</span><br>
                                                                <label class="renglon">Puesto de trabajo:</label>
                                                                <span id="puesto">Desarrollador Web</span><br>
                                                            </div>
                                                            <div class="col-lg-6 col-md-2 col-sm-12 mb-2">
                                                                <label class="renglon">Biografía:</label>
                                                                <span id="colonia">
                                                                    Proactiva, comprometida, responsable con ganas de aprender e innovar.
                                                                    Proactiva, comprometida, responsable con ganas de aprender e innovar.
                                                                    Proactiva, comprometida, responsable con ganas de aprender e innovar.
                                                                    Proactiva, comprometida, responsable con ganas de aprender e innovar.
                                                                </span><br>
                                                            </div>
                                                                    
                                                </div>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                                                <div class="row">
                                                            <div class="col-lg-4 col-md-2 col-sm-12 mb-2">
                                                                <label class="renglon">Facebook:</label>
                                                                <span id="fb">Alejandra Castro</span><br>
                                                            </div>
                                                            <div class="col-lg-4 col-md-2 col-sm-12 mb-2">
                                                                <label class="renglon">Instagram:</label>
                                                                <span id="ig">_monse98</span><br>
                                                            </div>
                                                            <div class="col-lg-4 col-md-2 col-sm-12 mb-2">
                                                                <label class="renglon">LinkedIn</label>
                                                                <span id="linkedin">Monserrat Alejandra Castro Sixtos</span><br>
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