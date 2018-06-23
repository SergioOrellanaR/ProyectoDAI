<?php

class Conexion {
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "encargo2";

    public function verificarConexion(){
        $con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
            return 0;
        }else{
            Echo "La conexión fue exitosa.";
            $con->close();
            return 1;
        }
    }      
}