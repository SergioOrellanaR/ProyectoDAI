<?php
    session_start();
    include_once '../modelo/Muestra.php';
    $fecha               = date('Y-m-d');
    $temperatura         = $_POST["temperatura"];
    $cantidad            = $_POST["cantidad"];
    $id_empresa          = $_POST["codigoEmisor"];
    $id_particular       = $_POST["codigoEmisor"];
    $rut_empleado_recibe = $_POST["rutReceptor"];
    $tipoIngreso         = $_POST["tipoIngreso"];
    $muestra = new Muestra(0, $fecha, $temperatura, $cantidad, $id_empresa, $id_particular, $rut_empleado_recibe);
    
    switch($tipoIngreso){
        case "particular":
            $muestra->ingresarMuestraParticular();
            header("location: ../manejadorMuestras.php?idParticular=" . $id_particular);          
            break;
        case "empresa":
            $muestra->ingresarMuestraEmpresa();
            header("location: ../manejadorMuestras.php?idEmpresa=" . $id_empresa);               
            break;
    }
    
?>