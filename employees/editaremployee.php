<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ARPAN México">
    <title>Editar Empleado | ARPAN</title>
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
    <link rel="stylesheet" href="../assets/css/employee/new_employee.css" type="text/css">
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
                 <div class="card-header">
                    <h3 class="mb-0 text-uppercase text-center titulo">Editar perfil de empleado</h3>
                </div>
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
                </div></div>
    

    
       
       


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="../assets/js/argon/js.cookie.js"></script>
<script src="../assets/js/argon/jquery.scrollbar.min.js"></script>
<script src="../assets/js/argon/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="../assets/js/argon/argon.js?v=1.1.0"></script>
<script src="../assets/js/employee/editar_emp.js"></script>
</body>
</html>