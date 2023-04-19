<?php
// Autor: ACOSTA MINUCHE JESUS
require_once 'config/Conexion.php';

class TipoProductDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }
     public function Tipos() {
        // sql de la sentencia
        $sql = "select * from Tipo_Producto";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $resultados;
    }
    

}
