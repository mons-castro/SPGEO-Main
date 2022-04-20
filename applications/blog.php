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
    <link rel="stylesheet" href="../assets/css/blog.css" type="text/css">
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
                

                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-justify full-content">
            <h2 class="section-title text-center"><span>Bienvenidos</span></h2>
            <p class="sub-section-title v-2 text-center">Hablemos un poco de los logros que llevamos a cabo en este año,siempre comprometidos con pequeños problemas ofreciendo grandes soluciones.</p>
           
            <!--  /.mrb -->
        </div>
        <!--  /.col-md-12 -->
    </div>
    <!--  /.row -->

    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <article class="post">
                        <div class="article-v2">
                            <figure class="article-thumb">
                                <a href="#">
                                    <img src="../assets/img/blog1.jpg" alt="blog image" style="width:280px"/>
                                </a>
                            </figure>
                            <!-- /.article-thumb -->
                            <div class="article-content-main">
                                <div class="article-header">
                                    <h2 class="entry-title text-justify"><a href="#">ARPAN México firma convenio con el Tecnológico Nacional de México Campus Ciudad Hidalgo</a></h2>
                                    <div class="entry-meta">
                                        <div class="entry-date">8 de octubre 2021</div>
                                        <!-- /.entry-date -->
                                        <div class="entry-cat">
                                            <a href="#">Abraham Ayala Padilla</a>
                                        </div>
                                        <!--  /.entry-cat -->
                                    </div>
                                    <!-- /.entry-meta -->
                                </div>
                                <!-- /.article-header -->
                                <div class="article-content text-justify">
                                    <p>Con  la finalidad de sumar esfuerzos para que los estudiantes amplien sus conocimientos y habilidades así como también permitir su experimentación en el campo laboral previo a su egreso. </p>
                                </div>
                                <!--  /.article-content -->
                                <div class="article-footer">
                                    <div class="row">
                                        <div class="col-6 text-left footer-link">
                                            <a href="#" class="more-link">Leer más</a>
                                        </div>
                                        <!--  /.col-6 -->
                                        <div class="col-6 text-right footer-meta">
                                            <a href="#">25 <i class="pe-7s-comment"></i></a>
                                            <a href="#">10 <i class="pe-7s-share"></i></a>
                                        </div>
                                        <!--  /.col-6 -->
                                    </div>
                                    <!--  /.row -->
                                </div>
                                <!--  /.article-footer -->
                            </div>
                            <!--  /.article-content-main -->
                        </div>
                        <!--  /.article-v2 -->
                    </article>
                    <!--  /.post -->
                </div>
                <!--  /.col-md-6 -->

                <div class="col-md-6 col-xl-4">
                    <article class="post">
                        <div class="article-v2">
                            <figure class="article-thumb">
                                <a href="#">
                                    <img src="../assets/img/blog2.jpg" alt="blog image" style="width:340px"  />
                                </a>
                            </figure>
                            <!-- /.article-thumb -->
                            <div class="article-content-main">
                                <div class="article-header">
                                    <h2 class="entry-title text-justify"><a href="#">Empoderando Mujeres Poderosamente Simple</a></h2>
                                    <div class="entry-meta">
                                        <div class="entry-date">21 de septiembre 2021</div>
                                        <!-- /.entry-date -->
                                        <div class="entry-cat">
                                            <a href="#">Monserrat Alejandra Catro</a>
                                        </div>
                                        <!--  /.entry-cat -->
                                    </div>
                                    <!-- /.entry-meta -->
                                </div>
                                <!-- /.article-header -->
                                <div class="article-content text-justify">
                                    <p>Agradecemos la confianza del TecnNM y The Coca-Cola Company junto a su programa 5by20 para realizar una plataforma que a partir de Mayo será usada por millones de mujeres alrededor de todo México. </p>
                                </div>
                                <!--  /.article-content -->
                                <div class="article-footer">
                                    <div class="row">
                                        <div class="col-6 text-left footer-link">
                                            <a href="#" class="more-link">Read More</a>
                                        </div>
                                        <!--  /.col-6 -->
                                        <div class="col-6 text-right footer-meta">
                                            <a href="#">15 <i class="pe-7s-comment"></i></a>
                                            <a href="#">20 <i class="pe-7s-share"></i></a>
                                        </div>
                                        <!--  /.col-6 -->
                                    </div>
                                    <!--  /.row -->
                                </div>
                                <!--  /.article-footer -->
                            </div>
                            <!--  /.article-content-main -->
                        </div>
                        <!--  /.article-v2 -->
                    </article>
                    <!--  /.post -->
                </div>
                <!--  /.col-md-6 -->

                <div class="col-md-6 col-xl-4">
                    <article class="post">
                        <div class="article-v2">
                            <figure class="article-thumb">
                                <a href="#">
                                    <img src="../assets/img/blog3.jpg" alt="blog image" style="width:310px" />
                                </a>
                            </figure>
                            <!-- /.article-thumb -->
                            <div class="article-content-main">
                                <div class="article-header">
                                    <h2 class="entry-title text-justify"><a href="#">¿Sabias que aceptar pagos con tarjeta aumenta tus ventas, genera más eficiencia en tu negocio u generas más confianza?</a></h2>
                                    <div class="entry-meta">
                                        <div class="entry-date">4 de agosto 2021</div>
                                        <!-- /.entry-date -->
                                        <div class="entry-cat">
                                            <a href="#">Abraham Ayala Padilla</a>
                                        </div>
                                        <!--  /.entry-cat -->
                                    </div>
                                    <!-- /.entry-meta -->
                                </div>
                                <!-- /.article-header -->
                                <div class="article-content text-justify">
                                    <p>¡En ARPAN podemos ayudarte a dar el siguiente paso y evolucionar las finanzas de tu negocio!</p>
                                </div>
                                <!--  /.article-content -->
                                <div class="article-footer">
                                    <div class="row">
                                        <div class="col-6 text-left footer-link">
                                            <a href="#" class="more-link">Read More</a>
                                        </div>
                                        <!--  /.col-6 -->
                                        <div class="col-6 text-right footer-meta">
                                            <a href="#">22 <i class="pe-7s-comment"></i></a>
                                            <a href="#">17 <i class="pe-7s-share"></i></a>
                                        </div>
                                        <!--  /.col-6 -->
                                    </div>
                                    <!--  /.row -->
                                </div>
                                <!--  /.article-footer -->
                            </div>
                            <!--  /.article-content-main -->
                        </div>
                        <!--  /.article-v2 -->
                    </article>
                    <!--  /.post -->
                </div>
                <!--  /.col-md-6 -->
            </div>
            <!--  /.blog-carousel -->
        </div>
        <!--  /.col-12 -->
    </div>
    <!--  /.row -->
</div>
            
          
             <div class="clearfix"></div>  

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