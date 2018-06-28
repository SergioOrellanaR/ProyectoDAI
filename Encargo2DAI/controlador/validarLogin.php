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
            $empresa = new Empresa(0, $usuario, '', $clave, '', 0);
            if($empresa->validarSesion() == 1){
                echo "Sesión validada";
                $empresa->obtenerEmpresaPorRut();
                $_SESSION["tipo_sesion"] = "empresa";        
                $_SESSION["empresa_sesion_id"] = $empresa->id;
                if($empresa->estado == 0)
                    header("Location: ../index.php?validado=2");
                else
                    header("Location: ../index.php");
            }else{
                header("Location: ../login.php?validado=0");
            }            
            break;
        case "particular":
            $particular = new Particular(0, $usuario, '', $clave, '', '', 0);
            if($particular->validarSesion() == 1){
                echo "Sesión validada";
                $particular->obtenerParticularPorRut();
                $_SESSION["particular_sesion_id"] = $particular->id;
                $_SESSION["tipo_sesion"] = "particular";
                if($particular->estado == 0)
                    header("Location: ../index.php?validado=2");
                else
                    header("Location: ../index.php");
            }else{
                header("Location: ../login.php?validado=0");
            }             
            break;
        case "empleado":
            $_SESSION["tipo_sesion"] = "empleado";
            $empleado = new Empleado($usuario, '', $clave, '', 0);
            if($empleado->validarSesion() == 1){
                echo "Sesión validada";
                $empleado->obtenerEmpleadoPorRut();
                $_SESSION["empleado_sesion_rut"] = $usuario;
                $_SESSION["tipo_sesion"] = "empleado"; 
                $_SESSION["categoria"] = $empleado->categoria;
                header("Location: ../index.php");
            }else{
                header("Location: ../login.php?validado=0");
            }            
            break;
    }
?>

