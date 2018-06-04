<?php

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
}
?>