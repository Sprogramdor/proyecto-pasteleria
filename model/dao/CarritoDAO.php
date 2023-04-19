<?php
// Autor : ACOSTA MINUCHE JESUS 
require_once 'config/Conexion.php';

class CarritoDAO {
     private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }


  public function insert($prod){
 
    try{
    //prepare
    $sql = "INSERT INTO carrito (id_clienteC,id_productoC) VALUES (:idc,:idp)";
    $sentencia = $this->con->prepare($sql);
    $data = [
        'idc' =>  $prod->getcliente(),
        'idp' =>  $prod->getproducto()
        ];
    //execute
    $sentencia->execute($data);
    //retornar resultados, 
    if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
        //rowCount permite obtner el numero de filas afectadas
        return false;
    }
}catch(Exception $e){
  echo $e->getMessage();
    return false;
}
    return true;        

}




function GetProductosCarrito($parametro){
    try{
    //prepare
        $sql = "SELECT id_producto,prod_nombre,Tipo,prod_precio
         FROM Producto
         INNER JOIN Carrito
         ON id_producto = Carrito.id_productoC
         WHERE Carrito.id_clienteC =:idc";
         $stmt = $this->con->prepare($sql);
         $data = [
                'idc' => $parametro // id de usuario 
                ];
            //execute
            $stmt->execute($data);
            $productosC = $stmt->fetchAll();// fetch retorna el primer registro
    // retornar resultado
            return $productosC;
    }catch(Exception $e){
       // echo $e->getMessage();
          return false;
        }
          return true; 
}




}