<?php
    session_start();
    include_once '../modelo/ResultadoAnalisis.php';
    $id_analisis_muestra    = $_POST["idMuestra"];
    $tipo_analisis          = $_POST["tipoAnalisis"];
    $ppm                    = $_POST["ppm"];
    $estado                 = 0;
    $fecha_registro         = date('Y-m-d');
    $rut_empleado_analista  = $_POST["rutAnalista"];
    $resultadoAnalisis = new ResultadoAnalisis($tipo_analisis, $id_analisis_muestra, $fecha_registro, $ppm, $estado, $rut_empleado_analista);
    $resultadoAnalisis->ingresarAnalisis();
    header("location: ../resultadoRegistrado.php");
?>

