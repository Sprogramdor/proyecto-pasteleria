<?php
// AUTOR: ACOSTA MINUCHE JESUS 
require_once 'config/Conexion.php';

class UsuariosDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

     public function UsuarioList() {
        // sql de la sentencia
        $sql = "select * from Usuario";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
      
        return $resultados;
    }
    

    public function Usuarios() {
        // sql de la sentencia
        $sql = "select * from Usuario";
        //preparacion de la sentencia
        $stmt = $this->con->prepare($sql);
        //ejecucion de la sentencia
        $stmt->execute();
        //recuperacion de resultados
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
        return $resultados;
    }



}
