<?php

?>

<html>
    <head>
    </head>
    <body>
        <h1>Registro de empleados</h1>
        <form action="controlador/registrarEmpleado.php" method="POST">
            RUT: <input type="text" name="rutEmpleado">
            Nombre: <input type="text" name="nombreEmpleado">
            Contraseña: <input type="password" name="claveEmpleado">
            <select nane="tipoEmpleado">
                <option value="A">Administrador</option>
                <option value="R">Recepcionista de muestras</option>
                <option value="T">Técnico de laboratorio</option>
            </select>
            <input type="submit" value="Registrar empleado">
        </form>
    </body>
</html>