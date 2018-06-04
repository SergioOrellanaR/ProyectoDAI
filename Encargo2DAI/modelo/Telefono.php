<?php

class Telefono {
    public $id;
    public $numero;
    public $id_particular;
    
    public function __construct($id, $numero, $id_particular) {
        $this->id = $id;
        $this->numero = $numero;
        $this->id_particular = $id_particular;
    }
    
    public function ingresarTelefonoSinID(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO telefono (numero, id_particular) VALUES ('".$this->numero."',".$this->id_particular.")";
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
        } 
        if ($con->query($sql) === TRUE) {
            echo "Teléfono ingresado correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }    
}

?>