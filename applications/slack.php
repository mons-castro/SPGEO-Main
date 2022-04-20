
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
                

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<div class="container">
<h3 class=" text-center"></h3>
<div class="messaging">
  <div class="inbox_msg">
    <div class="inbox_people">
      <div class="headind_srch">
        <div class="recent_heading">
          <h4>Recent</h4>
        </div>
        <div class="srch_bar">
          <div class="stylish-input-group">
            <input type="text" class="search-bar"  placeholder="Search" >
            <span class="input-group-addon">
            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
            </span> </div>
        </div>
      </div>
      <div class="inbox_chat">
        <div class="chat_list active_chat">
          <div class="chat_people">
            <div class="chat_img"> <img src="../assets/img/abraham.jpg" alt="sunil"> </div>
            <div class="chat_ib">
              <h5>Abraham Ayala <span class="chat_date">Oct 25</span></h5>
              <p>Test, which is a new approach to have all solutions 
                astrology under one roof.</p>
            </div>
          </div>
        </div>
        <div class="chat_list">
          <div class="chat_people">
            <div class="chat_img"> <img src="../assets/img/sergio.jpg" alt="sunil"> </div>
            <div class="chat_ib">
              <h5>Sergio Regalado <span class="chat_date">Oct 15</span></h5>
              <p>Test, which is a new approach to have all solutions 
                astrology under one roof.</p>
            </div>
          </div>
        </div>
        <div class="chat_list">
          <div class="chat_people">
            <div class="chat_img"> <img src="../assets/img/monse.jpg" alt="sunil"> </div>
            <div class="chat_ib">
              <h5>Monserrat A. Castro <span class="chat_date">Dec 25</span></h5>
              <p>Test, which is a new approach to have all solutions 
                astrology under one roof.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mesgs">
      <div class="msg_history">
        <div class="incoming_msg">
          <div class="incoming_msg_img"> <img src="../assets/img/carlos.jpg" alt="sunil"> </div>
          <div class="received_msg">
            <div class="received_withd_msg">
              <p>Test which is a new approach to have all
                solutions</p>
              <span class="time_date"> 11:01 AM    |    June 9</span></div>
          </div>
        </div>
        <div class="outgoing_msg">
          <div class="sent_msg">
            <p>Test which is a new approach to have all
              solutions</p>
            <span class="time_date"> 11:01 AM    |    June 9</span> </div>
        </div>
        <div class="incoming_msg">
          <div class="incoming_msg_img"> <img src="../assets/img/carlos.jpg" alt="sunil"> </div>
          <div class="received_msg">
            <div class="received_withd_msg">
              <p>Test, which is a new approach to have</p>
              <span class="time_date"> 11:01 AM    |    Yesterday</span></div>
          </div>
        </div>
        <div class="outgoing_msg">
          <div class="sent_msg">
            <p>Apollo University, Delhi, India Test</p>
            <span class="time_date"> 11:01 AM    |    Today</span> </div>
        </div>
        <div class="incoming_msg">
          <div class="incoming_msg_img"> <img src="../assets/img/carlos.jpg" alt="sunil"> </div>
          <div class="received_msg">
            <div class="received_withd_msg">
              <p>We work directly with our designers and suppliers,
                and sell direct to you, which means quality, exclusive
                products, at a price anyone can afford.</p>
              <span class="time_date"> 11:01 AM    |    Today</span></div>
          </div>
        </div>
      </div>
      <div class="type_msg">
        <div class="input_msg_write">
          <input type="text" class="write_msg" placeholder="Type a message" />
          <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
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