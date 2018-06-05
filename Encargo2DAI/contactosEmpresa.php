<b>Tu lista de contactos:</b>

<?php
    session_start();
    include_once 'modelo/Contacto.php';
    if(isset($_SESSION["empresa_sesion_id"])){
        $contacto = new Contacto('', '', '', '', $_SESSION["empresa_sesion_id"]);
        $lista_contactos = $contacto->obtenerContactosPorIdEmpresa();
        echo "<table>"; 
        echo "<th>Rut</th><th>Nombre</th><th>Email</th><th>Telefono</th><th>Id. Empresa</th><th>Acción</th>";
        foreach ($lista_contactos as $elemento) {
            echo "<tr>";
            echo "<td>". $elemento->rut ."</td>";
            echo "<td>". $elemento->nombre ."</td>";
            echo "<td>". $elemento->email ."</td>";
            echo "<td>". $elemento->telefono ."</td>";
            echo "<td>". $elemento->id_empresa ."</td>";
            echo "<td><a href='controlador/eliminarContacto.php?rutContacto=".$elemento->rut."&idEmpresa=".$elemento->id_empresa."'>Eliminar</a></td>";
            echo "</tr>";
        } 
        echo "</table>";
    }
?>
</br>
<b>Registrar un nuevo contacto</b>
<form action="controlador/registrarContacto.php" method="post">
    Rut empresa: <input tyte="text" name="rutContacto" required ><br>
    Nombre contacto: <input tyte="text" name="nombreContacto" required ><br>
    Email: <input tyte="text" name="emailContacto" required ><br>
    Teléfono: <input tyte="text" name="telefonoContacto" required ><br>
    Id empresa: <input tyte="text" name="idEmpresa" value="<?php echo $_SESSION["empresa_sesion_id"] ?>" required readonly><br>
    <input type="submit" value="Registrar nuevo contacto">
</form>