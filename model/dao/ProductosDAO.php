<?php
// Autor : ACOSTA MINUCHE JESUS 
require_once 'config/Conexion.php';

class ProductosDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function selectAll($parametro) {
        // sql de la sentencia
      $sql = "SELECT * FROM Producto,Tipo_Producto WHERE Producto.Tipo = Id_Tipo_producto and prod_nombre like :b1";
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

  public function Ventas($parametro) {
    // sql de la sentencia
  $sql = "SELECT * FROM Producto,Tipo_Producto WHERE Producto.Tipo = Id_Tipo_producto and prod_nombre like :b1 and stock > 0";
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


  public function selectOne($id) { // buscar un producto por su id
    $sql = "select * from Producto where "."id_producto =:id";
    // preparar la sentencia
    $stmt = $this->con->prepare($sql);
    $data = ['id' => $id];
    // ejecutar la sentencia
    $stmt->execute($data);
    // recuperar los datos (en caso de select)
    $producto = $stmt->fetch(PDO::FETCH_ASSOC);// fetch retorna el primer registro
    // retornar resultados
    return $producto;
    }

    public function insert($prod){
 
    try{
    //prepare
    $sql = "INSERT INTO Producto (cod_producto,prod_nombre,Tipo,stock,prod_precio,prod_descripcion,prod_fechaCreacion,prod_fechaActualizacion,prod_usuarioActualizacion) VALUES (:cod,:nom ,:tip,:st, :prec, :desc, :fechC, :fechA, 1)";
    $sentencia = $this->con->prepare($sql);
    $data = [
        'cod' =>  $prod->getcod_producto(),
        'nom' =>  $prod->getprod_nombre(),
        'st' =>  $prod->getstock(),
        'prec' =>  $prod->getprod_precio(),
        'tip' =>   $prod-> gettipo_producto(),
        'desc' =>  $prod->getprod_descripcion(),
        'fechC' =>  $prod->getprod_fechaCreacion(),
        'fechA' =>  $prod->getprod_fechaActualizacion()
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

    public function update($prod){

        try{
            //prepare
            $sql = "UPDATE Producto SET cod_producto=:cod, prod_nombre=:nom ,Tipo=:tip, stock=:st, prod_precio=:prec,prod_descripcion=:desc,prod_fechaCreacion=:fechC,prod_fechaActualizacion=:fechA,prod_usuarioActualizacion=1 where `id_producto`=:id";
           //bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = [
                'id' => $prod->getid_producto(),
                'cod' =>  $prod->getcod_producto(),
                'nom' =>  $prod->getprod_nombre(),
                'st' =>  $prod->getstock(),
                'prec' =>  $prod->getprod_precio(),
                'tip' =>   $prod-> gettipo_producto(),
                'desc' =>  $prod->getprod_descripcion(),
                'fechC' =>  $prod->getprod_fechaCreacion(),
                'fechA' =>  $prod->getprod_fechaActualizacion()
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

   public function delete($id){
        //prepare
        $sql = "DELETE FROM Producto WHERE `Producto`.`id_producto` = :id";
        //bind parameters

        $sentencia = $this->con->prepare($sql);
        $data = ['id' =>  $id];
        //execute
        $sentencia->execute($data);
        //retornar resultados, 
        if ($sentencia->rowCount() <= 0) {// verificar si se inserto 
        //rowCount permite obtner el numero de filas afectadas
        return false;
        }
        return true;
    
}

}