<?php
    session_start();
    include_once '../modelo/Empleado.php';
    $rut_empleado       = $_POST["rutEmpleado"];
    $nombre_empleado    = $_POST["nombreEmpleado"];
    $clave_empleado     = $_POST["emailEmpleado"];
    $categoria_empleado = $_POST["categoriaEmpleado"];
    $empleado = new Empleado($rut_empleado, $nombre_empleado, $clave_empleado, $categoria_empleado, 1);
    $empleado->ingresarEmpleadoSinID();
    header("location: ../manejadorEmpleados.php?registrado=1");
?>