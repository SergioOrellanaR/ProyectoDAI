<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.html">Medi<span>+</span>  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Quienes Somos</a>
                </li>              
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Contacto</a>
                </li>
                <!-- Pestañas propias de cada tipo de sesión -->
                <?php
                if(isset($_SESSION["tipo_sesion"])){
                    switch($_SESSION["tipo_sesion"]){
                        case "particular":
                            echo "<li class='nav-item'><a class='nav-link' href='manejadorMuestras.php?idParticular=". $_SESSION["particular_sesion_id"] ."'>Ver mis muestras</a></li>";
                            break;
                        case "empresa":
                            echo "<li class='nav-item'><a class='nav-link' href='manejadorMuestras.php?idEmpresa=". $_SESSION["empresa_sesion_id"] ."'>Ver mis muestras</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='contactosEmpresa.php'>Mis contactos</a></li>";
                            break;
                        case "empleado":
                            echo "<li class='nav-item'><a class='nav-link' href='manejadorMuestras.php'>Manejo de muestras</a></li>";
                            break;
                    }
                }
                ?>
                <!-- Pestaña de inicio o cierre de sesión -->
                <li class="nav-item">
                <?php
                if(!isset($_SESSION["tipo_sesion"])){
                  echo "<a class='nav-link' href='login.php'>Iniciar Sesion/Registro</a>";
                }else{
                    echo "<a class='nav-link' href='controlador/cerrarSesion.php'>Cerrar sesión</a>";
                }
                ?>
                </li>
            </ul>
        </div>
    </div>
</nav>