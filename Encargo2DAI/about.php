<?php
session_start();
?>
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

    <!-- END header -->

    <header role="banner">
      <?php include 'barraNavegacion.php' ?>
    </header>
    <section class="home-slider inner-page owl-carousel">
      <div class="slider-item" style="background-image: url('img/slider-2.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1>Acerca de Nosotros</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi unde impedit, necessitatibus, soluta sit quam minima expedita atque corrupti reiciendis.</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- END slider -->


    <section class="section bg-light custom-tabs">
      <div class="container">
        <div class="row">

          <div class="col-md-4 border-right element-animate" data-animate-effect="fadeInLeft">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span>01</span> Comodidades</a>
              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span>02</span> Servicios Medicos</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span>03</span> Servicios para Pacientes</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><span>04</span> Doctores Expertos</a>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7 element-animate" data-animate-effect="fadeInLeft">
            
            <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <span class="icon flaticon-hospital"></span>
                <h2 class="text-primary">Comodidades</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <span class="icon flaticon-first-aid-kit"></span>
                <h2 class="text-primary">Servicios Medicos</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <span class="icon flaticon-hospital-bed"></span>
                <h2 class="text-primary">Servicios para Pacientes</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
              </div>
              <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                <span class="icon flaticon-doctor"></span>
                <h2 class="text-primary">Doctores Expertos</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 element-animate">
            <img src="img/img_1.jpg" class="img-fluid mb-4" alt="Image placeholder">
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 element-animate">
            <h2 class="text-uppercase mb-4">Historia del Hospital</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
            <p class="mb-5">Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- END section -->

    <!-- END cta-link -->

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
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
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