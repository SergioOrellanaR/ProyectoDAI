<?php
class Empresa {
    public $id;
    public $rut;
    public $nombre;
    public $password;
    public $direccion;
    public $conexion;
    
    public function __construct($id, $rut, $nombre, $password, $direccion) {
       $this->id        = $id;
       $this->rut       = $rut;
       $this->nombre    = $password;
       $this->direccion = $direccion;
    }    
    
    public function validarLogin(){
        $conexion = new Conexion;
        $conn = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT id, firstname, lastname FROM MyGuests";
    }    
    
    public function ingresarEmpresa(){
        $conexion = new Conexion;
        $conn = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO empresa (id, rut, nombre, password, direccion) VALUES (". $this->id .", '". $this->rut ."','". $this->nombre ."','". $this->password ."','". $this->direccion ."')";
        if ($conn->query($sql) === TRUE) {
            echo "Empresa ingresada correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }    
}
?>