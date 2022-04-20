<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Incidencias | ARPAN</title>
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
            <div class="header pb-4 border-top">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-2 mb-1">
                                <h6 class="h2 d-inline-block mb-0 text-uppercase">INCIDENCIAS</span></h6>
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
                        <div class="card-body">
                            <div class="nav-wrapper">
                                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0 active" id="incidencia-solicitud" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-file iconos" aria-hidden="true"></i>Solicitud</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-sm-3 mb-md-0" id="incidencia-seguimiento" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-list iconos" aria-hidden="true"></i>Seguimiento</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                            <form id="incidencias" enctype="multipart/form-data" >
                                                <div class="row">
                                                    <div class="col-lg-1 col-md-1 col-sm-12 mb-1"></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-6">
                                                        <img id="arpan" src="../assets/logos/arpan.svg" alt="logo">
                                                        <img id="letrarpan"src="../assets/logos/ARPAN-Letter.png" alt="letra-logo">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                                            <h4 id="solicitud" class="text-right">SOLICITUD DE JUSTIFICACION DE INCIDENCIA</h4>
                                                            <div id="e-fechasolicitud" class="alert alert-danger error" role="alert"></div>
                                                            <label class="incidencia" for="fecha-incidencia">Fecha de Solicitud:</label>
                                                            <input class="form-control" type="date" id="fecha-incidencia" name="fecha-incidencia">
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-12 mb-1"></div>
                                                </div>

                                                <div class="row">
                                                        <div class="col-lg-1 col-md-1 col-sm-12 mb-1"></div>
                                                        <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                                            <div class="form-group">
                                                                <div id="e-nombre" class="alert alert-danger error" role="alert"></div>
                                                                <label class="incidencia" for="nombre">Nombre del empleado</label>
                                                                <input type="text" class="form-control" id="nombre" placeholder="Ej. Monserrat Alejandra Castro Sixtos" name="nombre">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 col-sm-12 mb-1">
                                                            <div class="form-group">
                                                                <div id="e-email" class="alert alert-danger error" role="alert"></div>
                                                                <label class="incidencia" for="email">Correo electrónico</label>
                                                                <input type="text" class="form-control" id="email" placeholder="Ej. alejandra_castro@arpan.com.mx" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-1 col-sm-12 mb-1"></div>
                                                </div>
                                            
                                                <div class="row">
                                                    <div class="col-lg-1 col-md-1 col-sm-12 mb-1"></div>
                                                    <div class="col-lg-10 col-md-12 col-sm-12 mb-12">
                                                        <div class="form-group text-center">
                                                            <div id="incidencia" class="alert alert-danger error incidencia"  role="alert"></div>
                                                            <span>Tipo de incidencia</span>

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-12 mb-1"></div>
                                                </div>

                                                <div class="row">
                                                    
                                                    <div class="col-lg-3 col-md-3 col-sm-12 mb-1">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-radio mb-3 text-center">
                                                                <input name="tipo-incidencia" class="custom-control-input" id="incidencia1" value="Falta" type="radio">
                                                                <label class="custom-control-label" for="incidencia1">Falta</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 mb-1">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-radio mb-3 text-center">
                                                                <input name="tipo-incidencia" class="custom-control-input" id="incidencia2" value="Retardo"type="radio">
                                                                <label class="custom-control-label" for="incidencia2">Retardo</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 mb-1">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-radio mb-3 text-left">
                                                                <input name="tipo-incidencia" class="custom-control-input" id="incidencia3" value="Omisión de Entrada"type="radio">
                                                                <label class="custom-control-label" for="incidencia3">Omisión de entrada</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-12 mb-1">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-radio mb-3 text-left">
                                                                <input name="tipo-incidencia" class="custom-control-input" id="incidencia4" value="Omisión de Salida"type="radio">
                                                                <label class="custom-control-label" for="incidencia4">Omisión de Salida</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4 right-block">
                                                        <div id="e-inicioincidencia" class="alert alert-danger error" role="alert"></div>
                                                        <label class="incidencia" for="inicio-incidencia">Desde:</label>
                                                        <input class="form-control" type="date" id="inicio-incidencia" name="inicio-incidencia">
                                                        <div id="e-finincidencia" class="alert alert-danger error" role="alert"></div>
                                                        <label class="incidencia" for="fin-incidencia">Hasta:</label>
                                                        <input class="form-control" type="date" id="fin-incidencia" name="fin-incidencia">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-2 right-block">
                                                    <div id="e-motivo" class="alert alert-danger error" role="alert"></div>
                                                            <div id="e-motivo" class="alert alert-danger error" role="alert"></div>
                                                            <label class="incidencia" for="biografia">Motivo</label>
                                                            <textarea name="motivo" class="form-control" id="motivo" rows="5"></textarea>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-8 col-md-8 col-sm-12 mb-4"></div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4 right-block">
                                                        <div class="form-group">
                                                            <button class="btn registrar" type="button" id="registraincidencias"> Registrar Incidencia </button>           
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                <table >
                                                    <!--Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th>Fecha de Solicitud</th>
                                                            <th>Nombre del Empleado</th>
                                                            <th>Correo Electrónico</th>
                                                            <th>Tipo de Incidencia</th>
                                                            <th>Desde</th>
                                                            <th>Hasta</th>
                                                            <th>Motivo</th>
                                                        </tr>
                                                    </thead>
                                                    <!--Table head-->

                                                    <!--Table body-->
                                                    <tbody>
                                                        <tr class="table-info">
                                                            <th scope="row"><span>07/10/2021</span></th>
                                                            <td ><span>Monserrat Alejandra Castro Sixtos</span></td>
                                                            <td><span>alejandra_castro@arpan.com.mx</span></td>
                                                            <td><span>Falta</span></td>
                                                            <td><span>07/10/2021</span></td>
                                                            <td><span>15/10/2021</span></td>
                                                            <td><span>No asisitio el día laboral específicado y tampoco justifiiiico</span></td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                    <!--Table body-->
                                                </table>
                                                    <!--Table-->
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
<script src="../assets/js/employee/incidencias.js"></script>
</body>
</html>