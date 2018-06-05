<?php
    session_start();
    include_once '../modelo/Contacto.php';
    $contacto = new Contacto($_GET["rutContacto"], '', '', '', $_GET["idEmpresa"]);
    $contacto->eliminarContacto();
    header("location: ../contactosEmpresa.php");
?>
