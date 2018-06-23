<?php
session_start();
include_once 'modelo/Particular.php';
?>
<html>
    <head>
    </head>
    <body>
        <h1>Manejador de particulares</h1>
        <!-- Nota para ustedes: el manejador de particulares no permitirá registro. -->
        Bienvenido, acá puedes administrar las cuentas de particulares y cambiar su estado.
        <a href="index.php">Volver</a>
        <h2>Lista de particulares</h2>
        <?php
        echo '<table>';
        echo '<th>Rut</th><th>Nombre</th><th>Categoria</th><th>Estado</th><th>Acciones</th>';
        $particular = new Particular(0, '', '', '', '', '', 0);
        $lista_particulares = $particular->obtenerListaParticulares();
        foreach ($lista_particulares as $elemento) {
            echo "<tr>";
            echo "<td>". $elemento->rut ."</td>";
            echo "<td>". $elemento->nombre ."</td>";
            echo "<td>". $elemento->direccion ."</td>";
            echo "<td>". $elemento->estado ."</td>";
            echo "<td><a href='controlador/estadoCuenta.php?tipo=particular&estado=0&rut=". $elemento->rut ."'>Dar de baja</a>&nbsp;<a href='controlador/estadoCuenta.php?tipo=particular&estado=1&rut=". $elemento->rut ."'>Levantar</a></td>";
            echo "</tr>";
        }        
        echo '</table>';
        ?>
    </body>
</html>