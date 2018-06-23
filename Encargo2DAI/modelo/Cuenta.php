<?php
include_once 'Conexion.php';
class Cuenta {
    public function cambiarEstado($nombre_tabla, $estado, $rut){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "UPDATE ". $nombre_tabla ." SET estado = ". $estado ." WHERE rut = ". $rut;
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
        } 
        if ($con->query($sql) === TRUE) {
            echo "Actualización de estado correcto: ". "UPDATE ". $nombre_tabla ." SET estado = ". $estado ." WHERE rut = '". $rut."'";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }
}
?>
