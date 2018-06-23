<?php
include_once 'Conexion.php';
class Empresa {
    public $id;
    public $rut;
    public $nombre;
    public $password;
    public $direccion;
    public $estado;
    
    public function __construct($id, $rut, $nombre, $password, $direccion, $estado) {
       $this->id        = $id;
       $this->rut       = $rut;
       $this->nombre    = $nombre;
       $this->password  = $password;
       $this->direccion = $direccion;
       $this->estado    = $estado;
    }    
    
    //Función que se utiliza, por ejemplo, para validar login.
    public function validarSesion(){
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT COUNT(empresa.id) FROM empresa WHERE empresa.rut = '".$this->rut."' and empresa.password = '".$this->password."' and empresa.estado = 1";
        $resultado = $con->query($sql);
        $contador  = -1;
        if ($resultado->num_rows > 0) {
            // output data of each row
            while($row = $resultado->fetch_array()) {
                $contador = $row[0];
            }
        } else {
            return $contador;
        }
        $con->close();
        echo "Número de coincidencias encontradas: ".$contador;
        return $contador;
    }
    
    //Esta rutina ingresa un objeto empresa creado, ignorando el ID (que es autoincremental o autogenerado).
    public function ingresarEmpresaSinID(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO empresa (rut, nombre, password, direccion, estado) VALUES ('". $this->rut ."','". $this->nombre ."','". $this->password ."','". $this->direccion ."', 1)";
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
        } 
        if ($con->query($sql) === TRUE) {
            echo "Empresa ingresada correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }    
    
    //Esta función entrega el último id registrado. Si se le suma 1, obtenemos el Id que actualmente se registra.
    //Si devuelve -1, es porque hubo un fallo de conexión con la base de datos.
    public function ultimoIdRegistrado(){
        $identificador  = -1;
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT MAX(empresa.id) FROM empresa";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            // output data of each row
            while($row = $resultado->fetch_array()) {
                $contador = $row[0];
            }
        } else {
            return $contador;
        }
        $con->close();
        return $contador;        
    }
    
    public function obtenerEmpresaPorRut(){
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT id, rut, password, nombre, direccion, estado FROM empresa WHERE rut = '". $this->rut."'";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $this->id = $row[0];
                $this->rut = $row[1];
                $this->password = $row[2];
                $this->nombre = $row[3];
                $this->direccion = $row[4];
                $this->estado = $row[5];
            }
        } else {
            return 0;
        }
        $con->close();      
    }    
    
    //Función que obtiene lista de empleados.
    public function obtenerListaEmpresas(){
        //Lista que guardará objetos.
        $listaEmpresas = [];
        //Contador de bucle
        $contador = 0;
        //Query
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT id, rut, nombre, password, direccion, estado FROM empresa";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $listaEmpresas[$contador] = new Empresa($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
                $contador++;
            }
        } else {
            return $listaEmpresas;
        }
        $con->close();
        return $listaEmpresas;        
    }    
}
?>