<?php
    session_start();
    include '../modelo/Empresa.php';
    include '../modelo/Empleado.php';
    include '../modelo/Particular.php';
    $tipoLogin = $_POST["tipoLogin"];
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    
    switch($tipoLogin){
        case "empresa":
            $empresa = new Empresa(0, $usuario, '', $clave, '');
            if($empresa->validarSesion() == 1){
                echo "Sesión validada";
                $empresa->obtenerEmpresaPorRut();
                $_SESSION["empresa_sesion_id"] = $empresa->id;
                $_SESSION["tipo_sesion"] = "empresa";                
                header("Location: ../index.php");
            }else{
                header("Location: ../login.php?validado=0");
            }            
            break;
        case "particular":
            $particular = new Particular(0, $usuario, '', $clave, '', '');
            if($particular->validarSesion() == 1){
                echo "Sesión validada";
                $particular->obtenerParticularPorRut();
                $_SESSION["particular_sesion_id"] = $particular->id;
                $_SESSION["tipo_sesion"] = "particular";
                header("Location: ../index.php");
            }else{
                header("Location: ../login.php?validado=0");
            }             
            break;
        case "empleado":
            $_SESSION["tipo_sesion"] = "empleado";
            $empleado = new Empleado($usuario, '', $clave, '');
            if($empleado->validarSesion() == 1){
                echo "Sesión validada";
                $empleado->obtenerEmpleadoPorRut();
                $_SESSION["empleado_sesion_rut"] = $usuario;
                $_SESSION["tipo_sesion"] = "empleado";                
                header("Location: ../index.php");
            }else{
                header("Location: ../login.php?validado=0");
            }            
            break;
    }
?>

