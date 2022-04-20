

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Proyecto | ARPAN</title>
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

                <div class="container card">
                    <div class="row card-body">
                        <div class="col-md-9">
                                    <div class="wrapper wrapper-content animated fadeInUp">
                                        <div class="ibox">
                                            <div class="ibox">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="m-b-md">
                                                            <h2>SPGEO</h2>
                                                        </div>
                                                        <dl class="dl-horizontal">
                                                            <dt>Status:</dt> <dd><div class="badge bg-warning">En proceso</div></dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <dl class="dl-horizontal">

                                                            <dt>Creado por:</dt> <dd>Abraham Ayala Padilla</dd>
                                                            <dt>Cliente:</dt> <dd><a href="#" class="text-navy"> ARPAN México</a> </dd>
                                                            <dt>Versión:</dt> <dd>     v1.4.2 </dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-lg-7" id="cluster_info">
                                                        <dl class="dl-horizontal">

                                                            <dt>Última Actualización:</dt> <dd>18-10-2021</dd>
                                                            <dt>Creado:</dt> <dd> 	30-08-2021 </dd>
                                                            <dt>Participantes:</dt>
                                                            <dd class="project-people">
                                                            <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
                                                            <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png"></a>
                                                            <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png"></a>
                                                            <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar4.png"></a>
                                                            <a href=""><img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar5.png"></a>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <dl class="dl-horizontal">
                                                            <dt>Progreso:</dt>
                                                            <dd>
                                                                <div class="progress progress-striped active m-b-sm">
                                                                    <div style="width: 30%;" class="progress-bar"></div>
                                                                </div>
                                                                <small>Proyecto en progreso con <strong>30% de avance</strong>.</small>
                                                            </dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="text-justify m-t-md right-block">
                                                            <span>Actividades</span> 
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="text-justify m-t-md text-right">
                                                            <button class="btn actividad btn-sm" type="button" id="registract" data-toggle="modal" data-target="#newActivity"> Nueva Actividad </button>     
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="newActivity" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header pb-1 border border-buttom">
                                                                <h5 class="modal-title" id="exampleModalLabel">Registrar Nueva Actividad</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body mb-2">
                                                                <form>
                                                                <div class="form-group mb-2">
                                                                    <label for="status-act" class="col-form-label">Status:</label>
                                                                    <input type="text" class="form-control" placeholder="Ej. Pendiente" id="status-act" name="status-act" >
                                                                    <label for="nombre-act" class="col-form-label">Actividad:</label>
                                                                    <input type="text" class="form-control" placeholder="Ej. Diseño de interfaz" id="nombre-act" name="nombre-act">
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-lg-6 mb-1">
                                                                            <label class="col-form-label" for="inicio-act">Inicio de Actividad</label>
                                                                        <input class="form-control" type="date" id="inicio-act" name="inicio-act">
                                                                        </div>
                                                                        <div class="col-lg-6 mb-1">
                                                                            <label class="col-form-label" for="inicio-acts">Fin de Actividad</label>
                                                                        <input class="form-control" type="date" id="fin-act" name="fin-act">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="act-text" class="col-form-label">Comentarios:</label>
                                                                    <textarea class="form-control" id="act-text"></textarea>
                                                                </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Regresar</button>
                                                                <button type="button" class="btn btn-primary">Registrar Actividad</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row m-t-sm">
                                                    <div class="col-lg-12">
                                                        <div class="tab-pane" id="tab-2">
                                                            <table class="table table-striped">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>Status</th>
                                                                                    <th>Actividad</th>
                                                                                    <th>Inicio</th>
                                                                                    <th>Fin</th>
                                                                                    <th>Comentarios</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td>
                                                                                        <span class="label label-primary">Finalizada</span>
                                                                                    </td>
                                                                                    <td>
                                                                                    Dashboard SPGEO
                                                                                    </td>
                                                                                    <td>
                                                                                    30-09-2021
                                                                                    </td>
                                                                                    <td>
                                                                                        10-09-2021
                                                                                    </td>
                                                                                    <td>
                                                                                    <p class="small">
                                                                                        Definición de paleta de colores.
                                                                                    </p>
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
                                </div>
                                <div class="col-md-3">
                                    <div class="wrapper wrapper-content project-manager">
                                        <h4>Descripción:</h4>
                                        <p class="small">
                                        <ul class="list-inline" style="text-align:justify">
                                        Solución para el control de Pequeñas, Medianas y Grandes empresas, se maneja una fusión del Internet de las Cosas...
                                        </p>
                                        <p class="small font-bold">
                                            <span><i class="fa fa-circle text-warning"></i> Prioridad: Alta</span>
                                        </p>
                                        <h5>Documentos de Proyecto</h5>
                                        <ul class="list-unstyled project-files">
                                            <li><a href="#"><i class="fa fa-file"></i> Project_document.docx</a></li>
                                            <li><a href="#"><i class="fa fa-file"></i> Contract_20_11_2021.docx</a></li><br>
                                        </ul>
                                        <div class="text-justify m-t-md">
                                            <button class="btn actividad btn-sm" type="button" id="registract"> Añadir Archivos</button>     
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