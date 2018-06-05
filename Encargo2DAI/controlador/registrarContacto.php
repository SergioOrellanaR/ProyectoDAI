<?php
    session_start();
    include_once '../modelo/Contacto.php';
    $rutContacto      = $_POST["rutContacto"];
    $nombreContacto   = $_POST["nombreContacto"];
    $emailContacto    = $_POST["emailContacto"];
    $telefonoContacto = $_POST["telefonoContacto"];
    $id_empresa       = $_POST["idEmpresa"];
    $contacto = new Contacto($rutContacto, $nombreContacto, $emailContacto, $telefonoContacto, $id_empresa);
    $contacto->ingresarContacto();
    header("location: ../contactosEmpresa.php");
?>