<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Panel Colaboradores | ARPAN</title>
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
    <link rel="stylesheet" href="../assets/css/employee/dashboard_employee.css" type="text/css">
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
                                <h6 class="h2 d-inline-block mb-0 text-uppercase">COLABORADORES</span></h6>
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
            <!-- CARDS INFORMATIVAS-->
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <span>Empleados</span>
                                            <h3 id="nempleados">10</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <i class="fa fa-users" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body text-right">
                                            <span>Departamentos</span>
                                            <h3 id="ndeptos">3</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-12 mb-2"></div>
                </div>
        



                <div class="card shadow">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-5 text-center">
                            <div class="form-group buscar">
                                <div class="input-group mb-4">
                                    <input class="form-control" placeholder="Buscar Empleado" type="text">
                                <div class="input-group-prepend">
                                    <button class="btn buscempleado"><i class="fa fa-search icono" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-5 text-right botones">
                        <a href="./createNewEmployee.php" class="btn buscempleado">Registrar Empleado<i class="fas fa-plus-circle icono"></i></a>
                        <!--<a href="#" class="btn btn-neutral">Empleados Suspendidos<i class="fas fa-trash icono"></i></a>-->
                    </div>
                </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                            <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css" rel="stylesheet">
                   
                   <div class="row">
                       <div class="col-lg-3">
                           <div class="left-sidebar">
                               <div class="accordion" id="accordionExample">
                                   <!-- collapse one end -->
                                   <div class="card mt-4">
                                       <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                           <div class="card-header" id="headingthree">
                                               <h6 class="mb-0 text-light f-18">Categorias</h6>
                                           </div>
                                       </a>
                                       <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                           <div class="card-body p-0">
                                               <div class="custom-control custom-radio">
                                                   <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                                                   <label class="custom-control-label ml-1 text-muted f-15" for="customRadio8">Diseñador Grafico</label>
                                               </div>

                                               <div class="custom-control custom-radio">
                                                   <input type="radio" id="customRadio9" name="customRadio1" class="custom-control-input">
                                                   <label class="custom-control-label ml-1 text-muted f-15" for="customRadio9">Desarrollador Móvil</label>
                                               </div>

                                               <div class="custom-control custom-radio">
                                                   <input type="radio" id="customRadio10" name="customRadio1" class="custom-control-input">
                                                   <label class="custom-control-label ml-1 text-muted f-15" for="customRadio10">Desarrollador Web</label>
                                               </div>

                                               <div class="custom-control custom-radio">
                                                   <input type="radio" id="customRadio11" name="customRadio1" class="custom-control-input">
                                                   <label class="custom-control-label ml-1 text-muted f-15" for="customRadio11">Full Stack Developer</label>
                                               </div>

                                               <div class="custom-control custom-radio">
                                                   <input type="radio" id="customRadio12" name="customRadio1" class="custom-control-input">
                                                   <label class="custom-control-label ml-1 text-muted f-15" for="customRadio12">Contador</label>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- collapse one end -->
                               </div>
                           </div>
                       </div>

                       <div class="col-lg-9">
                           <div class="row">
                            <div class="col-lg-4 col-md-6">
                                    <div class="list-grid-item mt-4">
                                        <div class="grid-item-content p-2">
                                            <div class="employers-list-img mt-3">
                                                <img src="../assets/img/monse.jpg" alt="" class="img-fluid mx-auto d-block">
                                            </div>
                                            <div class="grid-list-desc text-center mt-4">
                                                <h5 class="mb-1"><a href="#" class="text-dark">Monserrat Alejandra Castro Sixtos</a></h5>
                                                <p class="text-muted f-14 mb-0">Desarrollador Web</p>
                                                <p class="text-muted f-14 mb-0">Ing. Tecnologías de la Información y Comunicaciones</p>
                                            </div>
                                        </div>
                                        <hr class="mt-0 mb-0">
                                        <div class="apply-button text-center mt-2 mb-2">
                                            <a href="./employee.php" class="btn btn-custom btn-sm">Ver perfil</a>
                                        </div>
                                    </div>
                                </div>   
                                <div class="col-lg-4 col-md-6">
                                   <div class="list-grid-item mt-4">
                                       <div class="grid-item-content p-2">
                                           <div class="employers-list-img mt-3">
                                               <img src="../assets/img/sergio.jpg" alt="" class="img-fluid mx-auto d-block">
                                           </div>
                                           <div class="grid-list-desc text-center mt-4">
                                               <h5 class="mb-1"><a href="#" class="text-dark">Sergio Regalado Aguilar</a></h5>
                                               <p class="text-muted f-14 mb-0">SCRUM Master</p>
                                               <p class="text-muted f-14 mb-0">Ing. Tecnologías de la Información y Comunicaciones</p>
                                           </div>
                                       </div>
                                       <hr class="mt-0 mb-0">
                                       <div class="apply-button text-center mt-2 mb-2">
                                           <a href="./employee.php" class="btn btn-custom btn-sm">Ver perfil</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4 col-md-6">
                                   <div class="list-grid-item mt-4">
                                       <div class="grid-item-content p-2">
                                           <div class="employers-list-img mt-3">
                                               <img src="../assets/img/carlos.jpg" alt="" class="img-fluid mx-auto d-block ">
                                           </div>
                                           <div class="grid-list-desc text-center mt-4">
                                               <h5 class="mb-1"><a href="#" class="text-dark">Carlos Jovan Gonzalez Guzman</a></h5>
                                               <p class="text-muted f-14 mb-0">Desarrollador Web</p>
                                               <p class="text-muted f-14 mb-0">Ing. Sistemas Computacionales</p>
                                           </div>
                                       </div>
                                       <hr class="mt-0 mb-0">
                                       <div class="apply-button text-center mt-2 mb-2">
                                           <a href="./employee.php" class="btn btn-custom btn-sm">Ver perfil</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4 col-md-6">
                                   <div class="list-grid-item mt-4">
                                       <div class="grid-item-content p-2">
                                           <div class="employers-list-img mt-3">
                                               <img src="../assets/img/manuel.jpg" alt="" class="img-fluid mx-auto d-block">
                                           </div>
                                           <div class="grid-list-desc text-center mt-4">
                                               <h5 class="mb-1"><a href="#" class="text-dark">Manuel Gúzman</a></h5>
                                               <p class="text-muted f-14 mb-0">Full Stack Developer</p>
                                               <p class="text-muted f-14 mb-0">Ing. Tecnologías de la Información y Comunicaciones</p>
                                           </div>
                                       </div>
                                       <hr class="mt-0 mb-0">
                                       <div class="apply-button text-center mt-2 mb-2">
                                           <a href="./employee.php" class="btn btn-custom btn-sm">Ver perfil</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4 col-md-6">
                                   <div class="list-grid-item mt-4">
                                       <div class="grid-item-content p-2">
                                           <div class="employers-list-img mt-3">
                                               <img src="../assets/img/jesus.jpg" alt="" class="img-fluid mx-auto d-block">
                                           </div>
                                           <div class="grid-list-desc text-center mt-4">
                                               <h5 class="mb-1"><a href="#" class="text-dark">Jesús Nambo Rodriguez</a></h5>
                                               <p class="text-muted f-14 mb-0">Contador</p>
                                               <p class="text-muted f-14 mb-0">Contador Público</p>
                                           </div>
                                       </div>
                                       <hr class="mt-0 mb-0">
                                       <div class="apply-button text-center mt-2 mb-2">
                                           <a href="./employee.php" class="btn btn-custom btn-sm">Ver perfil</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-lg-4 col-md-6">
                                   <div class="list-grid-item mt-4">
                                       <div class="grid-item-content p-2">
                                           <div class="employers-list-img mt-3">
                                               <img src="../assets/img/aron.jpg" alt="" class="img-fluid mx-auto d-block">
                                           </div>
                                           <div class="grid-list-desc text-center mt-4">
                                               <h5 class="mb-1"><a href="#" class="text-dark">Aron Yañez Custodia</a></h5>
                                               <p class="text-muted f-14 mb-0">Full Stack Developer</p>
                                               <p class="text-muted f-14 mb-0">Ing. Sistemas Computacionales</p>
                                           </div>
                                       </div>
                                       <hr class="mt-0 mb-0">
                                       <div class="apply-button text-center mt-2 mb-2">
                                           <a href="./employee.php" class="btn btn-custom btn-sm">Ver perfil</a>
                                       </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination job-pagination justify-content-center mt-5 mb-5">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                                        <i class="mdi mdi-chevron-double-left f-15"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">
                                                        <i class="mdi mdi-chevron-double-right f-15"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                              
                            
                             
                           </div>
                       </div>
                   </div>
                               <!-- <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Empleado</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Puesto</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablempleados">
                                    
                                    </tbody>
                                </table>
            -->
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
<script src="../assets/js/employee/dashboard_empleado.js"></script>
</body>
</html>