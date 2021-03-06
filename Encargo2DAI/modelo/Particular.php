<?php
include_once 'Conexion.php';
class Particular {
    public $id;
    public $rut;
    public $nombre;
    public $password;
    public $direccion;
    public $email;
    public $estado;
    
    public function __construct($id, $rut, $nombre, $password, $direccion, $email, $estado) {
       $this->id        = $id;
       $this->rut       = $rut;
       $this->nombre    = $nombre;
       $this->password  = $password;
       $this->direccion = $direccion;
       $this->email     = $email;
       $this->estado    = $estado;
    }

    //Función que se utiliza, por ejemplo, para validar login.
    public function validarSesion(){
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT COUNT(particular.id) FROM particular WHERE particular.rut = '".$this->rut."' and particular.password = '".$this->password."' and particular.estado = 1";
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

    public function ingresarParticularSinID(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO particular (rut, nombre, password, direccion, email, estado) VALUES ('". $this->rut ."','". $this->nombre ."','". $this->password ."','". $this->direccion ."','".$this->email."', 1)";
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
        } 
        if ($con->query($sql) === TRUE) {
            echo "Particular ingresado correctamente.";
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
        $sql = "SELECT MAX(particular.id) FROM particular";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $contador = $row[0];
            }
        } else {
            return $contador;
        }
        $con->close();
        return $contador;        
    }   
    
    public function obtenerParticularPorRut(){
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT id, rut, password, nombre, direccion, email, estado FROM particular WHERE rut = '". $this->rut."'";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $this->id = $row[0];
                $this->rut = $row[1];
                $this->password = $row[2];
                $this->nombre = $row[3];
                $this->direccion = $row[4];
                $this->email = $row[5];
                $this->estado = $row[6];
            }
        } else {
            return 0;
        }
        $con->close();      
    }

    public function obtenerListaParticulares(){
        //Lista que guardará objetos.
        $listaParticulares = [];
        //Contador de bucle
        $contador = 0;
        //Query
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT id, rut, nombre, password, direccion, email, estado FROM particular";
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $listaParticulares[$contador] = new Particular($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
                $contador++;
            }
        } else {
            return $listaParticulares;
        }
        $con->close();
        return $listaParticulares;        
    }    
}
?>