<?php
//AUTOR : ACOSTA MINUCHE JESUS
require_once 'config/Conexion.php';

class ClienteDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }


    public function ClientesList($parametro) {
        // sql de la sentencia
      $sql = "select * from Cliente WHERE cliente_nombre like :b1";
      $stmt = $this->con->prepare($sql);
      // preparar la sentencia
      $conlike = '%' . $parametro . '%';
      $data = array('b1' => $conlike);
      // ejecutar la sentencia
      $stmt->execute($data);
      //recuperar  resultados
      $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
      //retornar resultados
      return $resultados;
  }

  public function ClientesListValidar() {
    // sql de la sentencia
  $sql = "select * from Cliente";
  $stmt = $this->con->prepare($sql);
  // preparar la sentencia
  // ejecutar la sentencia
  $stmt->execute();
  //recuperar  resultados
  $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
  //retornar resultados
  return $resultados;
}
  public function selectOne($id) {
    
    try{// buscar un producto por su id
    $sql = "select * from Cliente where "."id_cliente =:id";
    // preparar la sentencia
    $stmt = $this->con->prepare($sql);
    $data = ['id' => $id];
    // ejecutar la sentencia
    $stmt->execute($data);
    // recuperar los datos (en caso de select)
    $clienteS = $stmt->fetch(PDO::FETCH_OBJ);
    // retornar resultados
    return $clienteS;
    }catch(Exception $e){
   //echo $e->getMessage();
      return false;
    }
      return true; 
}      
   


}
