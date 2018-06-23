<?php
session_start();
include_once 'modelo/Empresa.php';
?>
<html>
    <head>
    </head>
    <body>
        <h1>Manejador de empresas</h1>
        <a href="index.php">Volver</a>
        <!-- Nota para ustedes: el manejador de empresas no se permitirá registro. -->
        Bienvenido, acá puedes administrar cuentas de empresas y cambiar su estado.
        <h2>Lista de empleados</h2>
        <?php
        echo '<table>';
        echo '<th>Rut</th><th>Nombre</th><th>Categoria</th><th>Estado</th><th>Acciones</th>';
        $empresa = new Empresa(0, '', '', '', '', 0);
        $lista_empresas = $empresa->obtenerListaEmpresas();
        foreach ($lista_empresas as $elemento) {
            echo "<tr>";
            echo "<td>". $elemento->rut ."</td>";
            echo "<td>". $elemento->nombre ."</td>";
            echo "<td>". $elemento->direccion ."</td>";
            echo "<td>". $elemento->estado ."</td>";
            echo "<td><a href='controlador/estadoCuenta.php?tipo=empresa&estado=0&rut=". $elemento->rut ."'>Dar de baja</a>&nbsp;<a href='controlador/estadoCuenta.php?tipo=empresa&estado=1&rut=". $elemento->rut ."'>Levantar</a></td>";
            echo "</tr>";
        }        
        echo '</table>';
        ?>
    </body>
</html>