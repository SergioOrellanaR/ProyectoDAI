<?php
include_once 'modelo/Empresa.php';
include_once 'modelo/Particular.php';
session_start();
if(isset($_GET["tipoRegistro"])){
    switch($_GET["tipoRegistro"]){
        case "empresa":
            $empresa = new Empresa(0, '', '', '', '');
            $mensaje = "Su id de empresa es: ". $empresa->ultimoIdRegistrado();
            break;
        case "particular":
            $particular = new Particular(0, '', '', '', '', '');
            $mensaje = "Su id de particular es: ". $particular->ultimoIdRegistrado();
            break;
    }
}
?>
<html>
    <b>El registro de su cuenta ha sido exitoso.</b><br>
    <?php echo $mensaje; ?>
    <a href="index.php">Volver</a>
</html>
