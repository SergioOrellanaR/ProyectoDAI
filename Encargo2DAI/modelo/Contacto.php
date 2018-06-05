<?php
include_once 'Conexion.php';
class Contacto {
    public $rut;
    public $nombre;
    public $email;
    public $telefono;
    public $id_empresa;
    
    public function __construct($rut, $nombre, $email, $telefono, $id_empresa){
        $this->rut        = $rut;
        $this->nombre     = $nombre;
        $this->email      = $email;
        $this->telefono   = $telefono;
        $this->id_empresa = $id_empresa;
    }   
    
    public function ingresarContacto(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO contacto (rut, nombre, email, telefono, id_empresa) VALUES ('". $this->rut ."','". $this->nombre ."','". $this->email."','". $this->telefono ."',".$this->id_empresa.")";
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
        } 
        if ($con->query($sql) === TRUE) {
            echo "Contacto ingresado correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }
    
    public function eliminarContacto(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "DELETE FROM contacto WHERE rut = '".$this->rut."' and id_empresa = ".$this->id_empresa."";
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
        } 
        if ($con->query($sql) === TRUE) {
            echo "Contacto eliminado correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }    

    public function obtenerContactosPorIdEmpresa(){
        //Lista que guardará objetos.
        $listaContactos = [];
        //Contador de bucle
        $contador = 0;
        //Query
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT rut, nombre, email, telefono, id_empresa FROM contacto WHERE id_empresa = " . $this->id_empresa;
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $listaContactos[$contador] = new Contacto($row[0], $row[1], $row[2], $row[3], $row[4]);
                $contador++;
            }
        } else {
            return $listaContactos;
        }
        $con->close();
        return $listaContactos;    
    }    
}
?>