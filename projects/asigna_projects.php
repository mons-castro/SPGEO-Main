<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Asigación de Proyectos | ARPAN</title>
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
    <link rel="stylesheet" href="../assets/css/projects/project.css" type="text/css">
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
                                <h6 class="h2 d-inline-block mb-0 text-uppercase">EMPLEADOS</span></h6>
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
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<div class="container">
<div class="row">
    <div class="col-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Lista de Asignación de Proyectos</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="proTeamScroll" tabindex="2" style="height: 400px; overflow: hidden; outline: none;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Empleado</th>
                                <th>Proyectos</th>
                                <th>Fecha de Asignación</th>
                                <th>Equipo</th>
                                <th>Prioridad</th>
                                <th>Status</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                </td>
                                <td>
                                    <h4 class="mb-0 font-13">SPGEO</h4>
                                    
                                </td>
                                <td>30-08-2021</td>
                                <td class="text-truncate">
                                    <ul class="list-unstyled order-list m-b-0">
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                        <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="badge-outline col-red">Alta</div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress-text">30%</div>
                                    <div class="progress" data-height="6" style="height: 6px;">
                                        <div class="progress-bar bg-success" data-width="30%" style="width: 30%;"></div>
                                    </div>
                                </td>
                                <td>
                                    <a data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                </td>
                                <td>
                                    <h4 class="mb-0 font-13">Beca Publica</h4>

                                </td>
                                <td>18-10-2021</td>
                                <td class="text-truncate">
                                    <ul class="list-unstyled order-list m-b-0">
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                        <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="badge-outline col-green">Alta</div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress-text">5%</div>
                                    <div class="progress" data-height="6" style="height: 6px;">
                                        <div class="progress-bar bg-purple" data-width="5%" style="width: 5%;"></div>
                                    </div>
                                </td>
                                <td>
                                    <a data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-img"><img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                </td>
                                <td>
                                    <h4 class="mb-0 font-12">Tickets Tlalpujahua</h4>
                                    
                                </td>
                                <td>01-10-2021</td>
                                <td class="text-truncate">
                                    <ul class="list-unstyled order-list m-b-0">
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                        <li class="team-member team-member-sm"><img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                        <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="badge-outline col-blue">Media</div>
                                </td>
                                <td class="align-middle">
                                    <div class="progress-text">10%</div>
                                    <div class="progress" data-height="6" style="height: 6px;">
                                        <div class="progress-bar" data-width="10%" style="width: 10%;"></div>
                                    </div>
                                </td>
                                <td>
                                    <a data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                    <a data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
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