<?php
    session_start();
    include_once '../modelo/Cuenta.php';
    $nombre_tabla = $_GET["tipo"];
    $estado = $_GET["estado"];
    $rut = $_GET["rut"];
    $cuenta = new Cuenta();
    $cuenta->cambiarEstado($nombre_tabla, $estado, $rut);
    switch($nombre_tabla){
        case 'particular':
            header("location: ../manejadorParticulares.php");
            break;
        case 'empresa':
            header("location: ../manejadorEmpresas.php");
            break;
        case 'empleado':
            header("location: ../manejadorEmpleados.php");
            break;
    }
?>

