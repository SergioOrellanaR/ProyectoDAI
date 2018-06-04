<?php
    include_once '../modelo/Particular.php';
    include_once '../modelo/Telefono.php';
    $rutParticular       = $_POST["rutParticular"];
    $nombreParticular    = $_POST["nombreParticular"];
    $claveParticular     = $_POST["claveParticular"];
    $direccionParticular = $_POST["direccionParticular"];
    $emailParticular     = $_POST["emailParticular"];
    $telefonoParticular  = $_POST["telefonoParticular"];
    $particular = new Particular(0, $rutParticular, $nombreParticular, $claveParticular, $direccionParticular, $emailParticular);
    $particular->ingresarParticularSinID();
    $idParticular = $particular->ultimoIdRegistrado();
    $telefono = new Telefono(0, $telefonoParticular, $idParticular);
    $telefono->ingresarTelefonoSinID();
    header("location: ../registroExitoso.php?tipoRegistro=particular");
?>