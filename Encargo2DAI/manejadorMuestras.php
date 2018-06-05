<?php 
session_start();
include_once 'modelo/Muestra.php';
?>

<!-- La siguiente rutina de PHP imprime un buscador de muestras por particular o empresa -->
<!-- (Solamente en el caso de que la sesión sea de tipo "empleado"). -->
<?php 
if($_SESSION["tipo_sesion"] == "empleado"){
    echo "<b>Para comenzar, busque muestras por empresa o particular<br>";
    echo "Posteriormente, seleccione la muestra a analizar.";
    echo "</b>";
    echo "<hr>";
    echo "Buscar muestras por empresa:";
    echo "<form action='manejadorMuestras.php' method='get'>";
    echo "ID: <input type='text' name='idEmpresa'><input type='submit' value='buscar'>";
    echo "</form>";
    echo "<hr>";
    echo "Buscar muestras por empresa:";
    echo "<form action='manejadorMuestras.php' method='get'>";
    echo "ID: <input type='text' name='idParticular'><input type='submit' value='buscar'>";
    echo "</form>";    
    echo "<hr>";
    echo "<a href='registroMuestra.php'>Registrar una nueva muestra</a>";
}
?>
<!-- Esta rutina PHP imprime una tabla con todas las muestras de un particular o una empresa -->
<?php
    //Imprimir elementos de una tabla.
    if(isset($_GET["idEmpresa"])){
        $muestra = new Muestra(0, '', 0, 0, 0, 0, 0);
        $lista_muestras = $muestra->obtenerMuestrasPorIdEmpresa($_GET["idEmpresa"]); 
        echo "<b>Estas son las muestras enviadas por la empresa de ID ".$_GET["idEmpresa"]."</b>";
        echo "<table>";
        echo "<th>Id.</th><th>Fecha</th><th>Temperatura</th><th>Cantidad</th><th>Id. Empresa</th><th>RUT del empleado receptor</th><th>Acción</th>";
        foreach ($lista_muestras as $elemento) {
            echo "<tr>";
            echo "<td>". $elemento->id ."</td>";
            echo "<td>". $elemento->fecha ."</td>";
            echo "<td>". $elemento->temperatura ."</td>";
            echo "<td>". $elemento->cantidad ."</td>";
            echo "<td>". $elemento->id_empresa ."</td>";
            echo "<td>". $elemento->rut_empleado_recibe ."</td>";
            echo "<td><a href='revisarMuestra.php?idMuestra=". $elemento->id ."'>Revisar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    
    if(isset($_GET["idParticular"])){
        $muestra = new Muestra(0, '', 0, 0, 0, 0, 0);
        $lista_muestras = $muestra->obtenerMuestrasPorIdParticular($_GET["idParticular"]);
        echo "<b>Estas son las muestras enviadas por el particular de ID ".$_GET["idParticular"]."</b>";
        echo "<table>";
        echo "<th>Id.</th><th>Fecha</th><th>Temperatura</th><th>Cantidad</th><th>Id. Particular</th><th>RUT del empleado receptor</th>";
        foreach ($lista_muestras as $elemento) {
            echo "<tr>";
            echo "<td>". $elemento->id ."</td>";
            echo "<td>". $elemento->fecha ."</td>";
            echo "<td>". $elemento->temperatura ."</td>";
            echo "<td>". $elemento->cantidad ."</td>";
            echo "<td>". $elemento->id_empresa ."</td>";
            echo "<td>". $elemento->rut_empleado_recibe ."</td>";
            echo "<td><a href='revisarMuestra.php?idMuestra=". $elemento->id ."'>Revisar</a></td>";
            echo "</tr>";
        } 
        echo "</table>";        
    }
?>