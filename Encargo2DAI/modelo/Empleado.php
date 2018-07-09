<?php
include_once 'Conexion.php';
class Empleado {
    public $rut;
    public $nombre;
    public $password;
    public $categoria;
    public $estado;
    
    public function __construct($rut, $nombre, $password, $categoria, $estado){
        $this->rut       = $rut;
        $this->nombre    = $nombre;
        $this->password  = $password;
        $this->categoria = $categoria;
        $this->estado    = $estado;
    }
    
    //Función que se utiliza, por ejemplo, para validar login.
    public function validarSesion(){
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT COUNT(empleado.rut) FROM empleado WHERE empleado.rut = '".$this->rut."' and empleado.password = '".$this->password."' and empleado.estado = 1";
        $resultado = $con->query($sql);
        $contador  = -1;
        if ($resultado->num_rows > 0) {
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
 
    //Esta función entrega el último id registrado. Si se le suma 1, obtenemos el Id que actualmente se registra.
    //Si devuelve -1, es porque hubo un fallo de conexión con la base de datos.
    public function ultimoIdRegistrado(){
        $identificador  = -1;
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT MAX(empleado.id) FROM empleado";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $contador = $row[0];
            }
        } else {
            return $contador;
        }
        $con->close();
        echo "Resultado: ".$contador;
        return $contador;        
    }

    public function obtenerEmpleadoPorRut(){
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT rut, password, nombre, categoria, estado FROM empleado WHERE rut = '". $this->rut."'";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $this->rut = $row[0];
                $this->password = $row[1];
                $this->nombre = $row[2];
                $this->categoria = $row[3];
                $this->estado = $row[4];
            }
        } else {
            return 0;
        }
        $con->close();      
    }    
    
    //Función que obtiene lista de empleados.
    public function obtenerListaEmpleados(){
        //Lista que guardará objetos.
        $listaEmpleados = [];
        //Contador de bucle
        $contador = 0;
        //Query
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT rut, nombre, password, categoria, estado FROM empleado";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $listaEmpleados[$contador] = new Empleado($row[0], $row[1], $row[2], $row[3], $row[4]);
                $contador++;
            }
        } else {
            return $listaEmpleados;
        }
        $con->close();
        return $listaEmpleados;        
    }

    //Esta rutina ingresa un objeto empresa creado, ignorando el ID (que es autoincremental o autogenerado).
    public function ingresarEmpleadoSinID(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO empleado (rut, nombre, password, categoria, estado ) VALUES ('".$this->rut."', '".$this->nombre."','".$this->password."', '".$this->categoria."', 1)";
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
        } 
        if ($con->query($sql) === TRUE) {
            echo "Empleado ingresada correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }     
}
