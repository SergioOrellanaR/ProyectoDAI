<?php
include_once 'Conexion.php';
class Muestra {
    public $id;
    public $fecha;
    public $temperatura;
    public $cantidad;
    public $id_empresa;
    public $id_particular;
    public $rut_empleado_recibe;
    
    public function __construct($id, $fecha, $temperatura, $cantidad, $id_empresa, $id_particular, $rut_empleado_recibe) {
        $this->id                  = $id;
        $this->fecha               = $fecha;
        $this->temperatura         = $temperatura;
        $this->cantidad            = $cantidad;
        $this->id_empresa          = $id_empresa;
        $this->id_particular       = $id_particular;
        $this->rut_empleado_recibe = $rut_empleado_recibe;
    }
    
    public function ingresarMuestraEmpresa(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO analisis_muestra (fecha, temperatura, cantidad, id_empresa, rut_empleado_recibe) VALUES ('". $this->fecha ."',". $this->temperatura .",". $this->cantidad .",". $this->id_empresa .",'".$this->rut_empleado_recibe."')";
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

    public function ingresarMuestraParticular(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO analisis_muestra (fecha, temperatura, cantidad, id_particular, rut_empleado_recibe) VALUES ('". $this->fecha ."',". $this->temperatura .",". $this->cantidad .",". $this->id_particular .",'".$this->rut_empleado_recibe."')";
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
    
    //Función que entregará lista de muestras por id de particular.
    public function obtenerMuestrasPorIdParticular($idBuscar){
        //Lista que guardará objetos.
        $listaMuestras = [];
        //Contador de bucle
        $contador = 0;
        //Query
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT id, fecha, temperatura, cantidad, id_empresa, id_particular, rut_empleado_recibe FROM analisis_muestra WHERE id_particular = " . $idBuscar;
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $listaMuestras[$contador] = new Muestra($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
                $contador++;
            }
        } else {
            return $listaMuestras;
        }
        $con->close();
        return $listaMuestras;    
    }  
    
    //Función que entregará lista de muestras por id de empresa.
    public function obtenerMuestrasPorIdEmpresa($idBuscar){
        //Lista que guardará objetos.
        $listaMuestras = [];
        //Contador de bucle
        $contador = 0;
        //Query
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT id, fecha, temperatura, cantidad, id_empresa, id_empresa, rut_empleado_recibe FROM analisis_muestra WHERE id_empresa = " . $idBuscar;
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $listaMuestras[$contador] = new Muestra($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]);
                $contador++;
            }
        } else {
            return $listaMuestras;
        }
        $con->close();
        return $listaMuestras;        
    }    
}
?>