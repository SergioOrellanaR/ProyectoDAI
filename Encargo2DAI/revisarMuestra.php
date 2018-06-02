<!doctype html>
<html lang="en">
  <head>
    <title>Colorlib Medi+</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
        <header role="banner">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.html">Medi<span>+</span>  </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link " href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Quienes Somos</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="verInformacion.php">Ver Información</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registrarMuestra.php">Registar Muestra</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="revisarMuestra.php">Revisar Muestra</a>
              </li>              
              <li class="nav-item">
                <a class="nav-link" href="login.php">Iniciar Sesion/Registro</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    
    <div class="jumbotron">
        <div class="container">  
          <h1>Registro de Muestra</h1>
        </div>
    </div>

    <section class="section">
      <div class="container" >
        <div class="row">
          <div class="col-md-8 mb-5 element-animate">
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-5 form-group">
                  <label for="txtID">ID Muestra</label>
                  <input type="text" class="form-control form-control-lg" id="txtID" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="slcTipo">Tipo de Análisis</label>
                <select id="slcTipo" class="form-control form-control-lg">
                    <option value="slcMicotoxinas">Detección de micotoxinas</option>
                    <option value="slcBacterias">Detección de bacterias nocivas</option>
                </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5 form-group">
                  <label for="txtPPM">PPM</label>
                  <input type="text" id="txtPPM" class="form-control form-control-lg" required>
                </div>
              </div> 
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="slcEstado">Estado</label>
                <select id="slcTipo" class="form-control form-control-lg">
                    <option value="slc1">Estado1</option>
                    <option value="slc2">Estado2</option>
                </select>
                </div>
              </div>                
              <div class="row">
                <div class="col-md-3 form-group">
                  <input type="button" value="Ingresar" ID="btnSend" class="btn btn-primary btn-lg btn-block">
                </div>
                <div class="col-md-3 form-group">
                  <input type="button" value="Volver" ID="btnBack" class="btn btn-primary btn-lg btn-block">
                </div>                  
              </div>                
            </form>                  
          </div>
        </div>
      </div>
    </section>
    
    <footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5 element-animate">
          <div class="col-md-3 mb-5">
            <h3>Services</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="#">Find a doctor</a></li>
              <li><a href="#">Urgent Care</a></li>
              <li><a href="#">Emergency Care</a></li>
              <li><a href="#">Procedures &amp; Treatments</a></li>
              <li><a href="#">Online Services</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Latest News</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="#">News &amp; Press Releases</a></li>
              <li><a href="#">Health Care Professional News</a></li>
              <li><a href="#">Events &amp; Conferences</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>About</h3>
            <ul class="footer-link list-unstyled">
              <li><a href="#">About The Hospital</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Accreditations &amp; Awards</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Feedback</a></li>
            </ul>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Location &amp; Contact</h3>
            <p class="mb-5">134 Street Name, City Name Here, United States</p>

            <h4 class="text-uppercase mb-3 h6 text-white">Email</h5>
            <p class="mb-5"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>
            
            <h4 class="text-uppercase mb-3 h6 text-white">Phone</h5>
            <p>+1 24 435 3533</p>

          </div>
        </div>

        <div class="row pt-md-3 element-animate">
          <div class="col-md-12">
            <hr class="border-t">
          </div>
          <div class="col-md-6 col-sm-12 copyright">
            <p></p>
          </div>
          <div class="col-md-6 col-sm-12 text-md-right text-sm-left">
            <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
            <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
            <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->


    <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              

              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="txtArea" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>