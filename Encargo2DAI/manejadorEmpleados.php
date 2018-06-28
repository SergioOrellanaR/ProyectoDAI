<?php
session_start();
include_once 'modelo/Empleado.php';
?>
<html>
    <head>
    </head>
    <body>
        <h1>Manejador de empleados</h1>
        <a href="registroEmpleado.php">Registrar un empleado</a>
        <a href="index.php">Volver</a><br>
        <!-- A diferencia de otros registros, si el registro de un empleado fue exitoso, el mensaje se muestra acá en el manejador, justo encima de la tabla. -->
        <?php
        if(isset($_GET["registrado"])) echo "<h3>El registro del empleado fue exitoso</h3>";
        ?>
        
        <h2>Lista de empleados</h2>
        <?php
        echo '<table>';
        echo '<th>Rut</th><th>Nombre</th><th>Categoria</th><th>Estado</th><th>Acciones</th>';
        $empleado = new Empleado('', '', '', '', 0);
        $lista_empleados = $empleado->obtenerListaEmpleados();
        foreach ($lista_empleados as $elemento) {
            echo "<tr>";
            echo "<td>". $elemento->rut ."</td>";
            echo "<td>". $elemento->nombre ."</td>";
            echo "<td>". $elemento->categoria ."</td>";
            echo "<td>". $elemento->estado ."</td>";
            echo "<td><a href='controlador/estadoCuenta.php?tipo=empleado&estado=0&rut=". $elemento->rut ."'>Dar de baja</a>&nbsp;<a href='controlador/estadoCuenta.php?tipo=empleado&estado=1&rut=". $elemento->rut ."'>Levantar</a></td>";
            echo "</tr>";
        }        
        echo '</table>';
        ?>
    </body>
</html>