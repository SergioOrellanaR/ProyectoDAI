<?php
    include '../modelo/Empresa.php';
    include '../modelo/Contacto.php';
    $rutEmpresa       = $_POST["rutEmpresa"];
    $nombreEmpresa    = $_POST["nombreEmpresa"];
    $claveEmpresa     = $_POST["claveEmpresa"];
    $direccionEmpresa = $_POST["direccionEmpresa"];
    $rutContacto      = $_POST["rutContacto"];
    $nombreContacto   = $_POST["nombreContacto"];;
    $emailContacto    = $_POST["emailContacto"];;
    $telefonoContacto = $_POST["telefonoContacto"];;
    $empresa          = new Empresa(0, $rutEmpresa, $nombreEmpresa, $claveEmpresa, $direccionEmpresa);
    $empresa->ingresarEmpresaSinID();
    $idParticular = $empresa->ultimoIdRegistrado();
    $contacto = new Contacto($rutContacto, $nombreContacto, $emailContacto, $telefonoContacto, $idParticular);
    $contacto->ingresarContacto();
    header("location: ../registroExitoso.php?tipoRegistro=empresa");
?>