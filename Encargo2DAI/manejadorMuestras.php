<?php 
session_start();
include_once 'modelo/Muestra.php';
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
    
    <header role="banner">
      <?php include 'barraNavegacion.php' ?>
    </header>
    <!-- END header -->
    
    <div class="jumbotron">
        <div class="container">  
          <h1>Manejador de Muestras </h1>
        </div>
    </div>

    
    <section class="section">
      <div class="container" >
        <div class="row">
          <div class="col-md-6 mb-5 element-animate">
            <?php 
            if($_SESSION["tipo_sesion"] == "empleado"){
                echo "<b>Para comenzar, busque muestras por empresa o particular<br>";
                echo "Posteriormente, seleccione la muestra a analizar.";
                echo "</b>";
                echo "<hr>";
                echo "Buscar muestras por empresa:";
                echo "<form action='manejadorMuestras.php' method='get'>";
                echo "ID: <input type='text' name='idEmpresa'><input type='submit' value='buscar'>";
                echo "</form>";
                echo "<hr>";
                echo "Buscar muestras por particular:";
                echo "<form action='manejadorMuestras.php' method='get'>";
                echo "ID: <input type='text' name='idParticular'><input type='submit' value='buscar' >";
                echo "</form>";    
                echo "<hr>";
                if(isset($_SESSION["categoria"]) &&  ($_SESSION["categoria"] == 'R')){
                    echo "<a href='registroMuestra.php'>Registrar una nueva muestra</a>";
                }
            }
            ?>
          </div>           
        </div>
          
          
          <!-- La siguiente rutina de PHP imprime un buscador de muestras por particular o empresa -->
<!-- (Solamente en el caso de que la sesión sea de tipo "empleado"). -->

<!-- Esta rutina PHP imprime una tabla con todas las muestras de un particular o una empresa -->
<?php
    //Imprimir elementos de una tabla.
    if(isset($_GET["idEmpresa"])){
        $muestra = new Muestra(0, '', 0, 0, 0, 0, 0);
        $lista_muestras = $muestra->obtenerMuestrasPorIdEmpresa($_GET["idEmpresa"]); 
        echo "<b>Estas son las muestras enviadas por la empresa de ID ".$_GET["idEmpresa"]."</b>";
        echo "<table class='table table-hover' id='tblPacientes'>";
        echo "<th>Id.</th><th>Fecha</th><th>Temperatura</th><th>Cantidad</th><th>Id. Empresa</th><th>RUT del empleado receptor</th><th>Acción</th>";
        foreach ($lista_muestras as $elemento) {
            echo "<tr>";
            echo "<td>". $elemento->id ."</td>";
            echo "<td>". $elemento->fecha ."</td>";
            echo "<td>". $elemento->temperatura ."</td>";
            echo "<td>". $elemento->cantidad ."</td>";
            echo "<td>". $elemento->id_empresa ."</td>";
            echo "<td>". $elemento->rut_empleado_recibe ."</td>";
            echo "<td><a href='revisarMuestra.php?idMuestra=". $elemento->id ."'>Revisar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    
    if(isset($_GET["idParticular"])){
        $muestra = new Muestra(0, '', 0, 0, 0, 0, 0);
        $lista_muestras = $muestra->obtenerMuestrasPorIdParticular($_GET["idParticular"]);
        echo "<b>Estas son las muestras enviadas por el particular de ID ".$_GET["idParticular"]."</b>";
        echo "<table class='table table-hover' id='tblMuestras'>";
        echo "          
           <thead>
            <tr>
              <th scope='col'>Id</th>
              <th scope='col'>Fecha</th>
              <th scope='col'>Temperatura</th>
              <th scope='col'>Cantidad</th>
              <th scope='col'>Id. Particular</th>
              <th scope='col'>RUT del empleado receptor</th>
            </tr>
          </thead>";
        
        foreach ($lista_muestras as $elemento) {
            echo"<tbody>";            
            echo "<tr>";
            echo "<th scope='row'>". $elemento->id ."</th>";
            echo "<td>". $elemento->fecha ."</td>";
            echo "<td>". $elemento->temperatura ."</td>";
            echo "<td>". $elemento->cantidad ."</td>";
            echo "<td>". $elemento->id_empresa ."</td>";
            echo "<td>". $elemento->rut_empleado_recibe ."</td>";
            echo "<td><a href='revisarMuestra.php?idMuestra=". $elemento->id ."'>Revisar</a></td>";
            echo "</tr>";
            echo"</tbody>";
        } 
        echo "</table>";
    }
?>
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