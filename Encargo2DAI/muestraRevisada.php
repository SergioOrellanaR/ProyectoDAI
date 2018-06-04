<?php
session_start();
include_once 'modelo/ResultadoAnalisis.php';

$resultadoAnalisis = new ResultadoAnalisis(0, $_GET["idMuestra"], '', 0, 0, 0, 0);
$resultadoAnalisis->obtenerResultadoPorIdMuestra();
?>

<b>Datos de la muestra revisada</b>
<table>
    <tr><th>Datos</th><th>resultado</th></tr>
    <tr><td>ID de la muestra</td><td><?php echo $resultadoAnalisis->id_analisis_muestra ?></td></tr>
    <tr><td>Tipo de análisis </td><td><?php echo $resultadoAnalisis->id_tipo ?></td></tr>
    <tr><td>Fecha de registro</td><td><?php echo $resultadoAnalisis->fecha_registro ?></td></tr>
    <tr><td>PPM</td><td><?php echo $resultadoAnalisis->ppm ?></td></tr>
    <tr><td>Estado</td><td><?php echo $resultadoAnalisis->estado ?></td></tr>
    <tr><td>Rut del empleado analista</td><td><?php echo $resultadoAnalisis->rut_empleado_analista ?></td></tr>
</table>