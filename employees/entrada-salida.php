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
    <link rel="stylesheet" href="../assets/css/slack.css" type="text/css">
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
                
                <div class="row">
                                                    <div class="col-lg-1 col-md-1 col-sm-12 mb-1"></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-6">
                                                        <img id="arpan" src="../assets/logos/arpan.svg" alt="logo">
                                                        <img id="letrarpan"src="../assets/logos/ARPAN-Letter.png" alt="letra-logo">
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                                            <h4 id="solicitud" class="text-right">CONTROL DE HORARIO</h4>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-12 mb-1"></div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="2"></th>
                        <th scope="col" colspan="3">Semana</th>
                        </tr>
                        <tr>
                        <th scope="col"></th>
                        <th scope="col" colspan="2">LUNES</th>
                        <th scope="col" colspan="2">MARTES</th>
                        <th scope="col" colspan="2">MIERCOLES</th>
                        <th scope="col" colspan="2">JUEVES</th>
                        <th scope="col" colspan="2">VIERNES</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white">Empleado</th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white">Inicio</th>
                        <th scope="row" style="background-color:white">Fin</th>
                        <th scope="row" style="background-color:white">Inicio</th>
                        <th scope="row" style="background-color:white">Fin</th>
                        <th scope="row" style="background-color:white">Inicio</th>
                        <th scope="row" style="background-color:white">Fin</th>
                        <th scope="row" style="background-color:white">Inicio</th>
                        <th scope="row" style="background-color:white">Fin</th>
                        <th scope="row" style="background-color:white">Inicio</th>
                        <th scope="row" style="background-color:white">Fin</th>
                        <th scope="row" style="background-color:white">Horas Normales</th>
                        <th scope="row" style="background-color:white">Horas Extra</th>
                        <th scope="row" style="background-color:white">Total Horas</th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th  rowspan="2" scope="row" style="background-color:white"></th>
                        </tr>
                        <tr>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        <th scope="row" style="background-color:white"></th>
                        </tr>
                        
                    </tbody>
                </table>

            
                <div class="row">
                        <div class="col-lg-10 col-md-2 col-sm-12 mb-2"></div>
                        <div class="col-lg-1 col-md-3 col-sm-12 mb-2 right-block">
                            <div class="form-group">
                                <button class="btn registrar" type="button" id="registraemp"> Registrar </button>           
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