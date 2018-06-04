<?php
include_once 'Conexion.php';
class Empleado {
    public $rut;
    public $nombre;
    public $password;
    public $categoria;
    
    public function __construct($rut, $nombre, $password, $categoria){
        $this->rut       = $rut;
        $this->nombre    = $nombre;
        $this->password  = $password;
        $this->categoria = $categoria;
    }
    
    //Función que se utiliza, por ejemplo, para validar login.
    public function validarSesion(){
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT COUNT(empleado.rut) FROM empleado WHERE empleado.rut = '".$this->rut."' and empleado.password = '".$this->password."'";
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
        $sql = "SELECT rut, password, nombre, categoria FROM empleado WHERE rut = ". $this->rut;
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $this->id = $row[0];
                $this->rut = $row[1];
                $this->password = $row[2];
                $this->nombre = $row[3];
                $this->direccion = $row[4];
            }
        } else {
            return 0;
        }
        $con->close();      
    }    
}
