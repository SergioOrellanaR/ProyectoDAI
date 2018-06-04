<?php
include_once 'Conexion.php';
class ResultadoAnalisis {
    public $id_tipo;
    public $id_analisis_muestra;
    public $fecha_registro;
    public $ppm;
    public $estado;
    public $rut_empleado_analista;
    
    public function __construct($id_tipo, $id_analisis_muestra, $fecha_registro, $ppm, $estado, $rut_empleado_analista) {
        $this->id_tipo               = $id_tipo;
        $this->id_analisis_muestra   = $id_analisis_muestra;
        $this->fecha_registro        = $fecha_registro;
        $this->ppm                   = $ppm;
        $this->estado                = $estado;
        $this->rut_empleado_analista = $rut_empleado_analista;
    }
    
    public function ingresarAnalisis(){
        $conexion = new Conexion;
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "INSERT INTO resultado_analisis (id_tipo, id_analisis_muestra, fecha_registro, ppm, estado, rut_empleado_analista) VALUES (". $this->id_tipo .",". $this->id_analisis_muestra .",'". $this->fecha_registro ."',". $this->ppm .",". $this->estado .",'".$this->rut_empleado_analista."')";
        if ($con->connect_error) {
            die("Conexión fallida: " . $con->connect_error);
        } 
        if ($con->query($sql) === TRUE) {
            echo "Análisis ingresado correctamente.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
        $con->close();
    }

    //Función que sirve para determinar cuántos resultados de un análisis existen.
    public function existeResultado(){
        $contador  = -1;
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT COUNT(id_analisis_muestra) FROM resultado_analisis WHERE id_analisis_muestra = ". $this->id_analisis_muestra;
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

    public function obtenerResultadoPorIdMuestra(){
        $conexion = new Conexion();
        $con = new mysqli($conexion->servername, $conexion->username, $conexion->password, $conexion->dbname);
        $sql = "SELECT id_tipo, id_analisis_muestra, fecha_registro, ppm, estado, rut_empleado_analista FROM resultado_analisis WHERE id_analisis_muestra = ". $this->id_analisis_muestra;
        $resultado = $con->query($sql);
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_array()) {
                $this->id_tipo = $row[0];
                $this->id_analisis_muestra = $row[1];
                $this->fecha_registro = $row[2];
                $this->ppm = $row[3];
                $this->estado = $row[4];
                $this->rut_empleado_analista = $row[5];
            }
        } else {
            return 0;
        }
        $con->close();      
    }    

}
?>