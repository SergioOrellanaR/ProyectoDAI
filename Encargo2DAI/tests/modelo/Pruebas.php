<?php

class Pruebas extends PHPUnit_Framework_TestCase {   
    
    //1. Prueba de verificación de conexión.
    public function testConexion(){
        include_once '../modelo/Empresa.php';
        echo "*** 1. Prueba de conexion ***\n";
        echo "Descripcion: .\n";        
        include_once '../modelo/Contacto.php';
        $conexion = new Conexion;
        $conexion->verificarConexion();
        echo "\n";
        echo "---------------------\n";    
    }
    
    //2. Registro de datos en una tabla.
    public function testRegistroDatos()
    {
        include_once '../modelo/Empresa.php';
        echo "*** 2. Prueba de registro de datos ***\n";
        echo "Descripcion: Se ingresara una empresa de prueba en la BD.\n";
        $empresa = new Empresa(0, '000EPRUEBA-0', 'EMPRESA PRUEBA', '0000','CALLE PRUEBA 000', 1);
        $empresa->ingresarEmpresaSinID();
        echo "\n";
        echo "---------------------\n";
    }
    
    //3. Registro de datos usando transacciones (más de una tabla).
    public function testRegistroTransacciones(){
        include_once '../modelo/Contacto.php';
        include_once '../modelo/Empresa.php';
        echo "*** 3. Prueba de registro de datos en tabla relacionada ***\n";
        echo "Descripcion: Se ingresara un contacto de prueba en la BD.\n";
        echo "(El contacto estará asociado a la empresa anterior)\n";
        $empresa = new Empresa(0, '', '', '','', 1);
        $ultimo_id_empresa = $empresa->ultimoIdRegistrado();
        $contacto = new Contacto('000CPRUEBA-0', 'CONTACTO PRUEBA', 'prueba@prueba.pr', '000000PRU', $ultimo_id_empresa);
        $contacto->ingresarContacto();
        echo "\n";
        echo "ID del contacto ingresado: ". $contacto->id_empresa;
        echo "\n---------------------\n";
    }
    
    //4. Eliminación de datos en una tabla relacionada con otra.
    public function testEliminacionDatos(){
        include_once '../modelo/Contacto.php';
        include_once '../modelo/Empresa.php';        
        echo "*** 4. Prueba de eliminacion de datos en una tabla relacionada con otra. ***\n";
        echo "Descripcion: Se eliminara el contacto de prueba en la BD.\n";
        $empresa = new Empresa(0, '', '', '','', 1);
        $ultimoIdEmpresa = $empresa->ultimoIdRegistrado();
        $contacto = new Contacto('000CPRUEBA-0', '', '', '', $ultimoIdEmpresa);
        $contacto->eliminarContacto();
        echo "\n";
        echo "---------------------\n";
    }
    
    //Busqueda de datos por parámetros
    public function testObtenerEmpresa(){
        include_once '../modelo/Empresa.php';  
        echo "*** 6.1. Prueba de busqueda de datos por parameros. ***\n";
        echo "Descripcion: Se buscara la empresa con RUT 000EPRUEBA-0.\n";
        $empresa = new Empresa(0, '000EPRUEBA-0', '', '','', 1);
        $empresa->obtenerEmpresaPorRut();
        echo "La empresa encontrada tiene nombre ". $empresa->nombre;
        echo "\n";
        echo "---------------------\n";        
    }
    
    //Busqueda de datos sin parámetros
    public function testObtenerUltimoIdEmpresa(){
        include_once '../modelo/Empresa.php';  
        echo "*** 6.2. Prueba de busqueda de datos sin parametros. ***\n";
        echo "Descripcion: Se buscara el último ID de empresa registrada.\n";
        $empresa = new Empresa(0, '', '', '','', 1);
        $ultimo_id = $empresa->ultimoIdRegistrado();
        echo "Se obtuvo el ultimo ID de empresa registrada: ". $ultimo_id;
        echo "\n";
        echo "---------------------\n";        
    }    
}
