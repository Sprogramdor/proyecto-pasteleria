<?php
// autor Ramos Mesias Mauro Fabrizio
require_once 'config/Conexion.php';

class PublicacionesDAO {
    private $con;

    public function __construct() {
        $this->con = Conexion::getConexion();
    }

    public function selectAll($parametro) {
        // sql de la sentencia
      $sql = "SELECT * FROM publicacion   where  publi_titulo like :b1 or num_publicacion like :b2";
      $stmt = $this->con->prepare($sql);
      // preparar la sentencia
      $conlike = '%' . $parametro . '%';
      $data = array('b1' => $conlike, 'b2' => $conlike);
      // ejecutar la sentencia
      $stmt->execute($data);
      //recuperar  resultados
      $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
      //retornar resultados
      return $resultados;
  }

  public function selectOne($id) { // buscar un producto por su id
        $sql = "select * from publicacion where "."id_publicacion=:id";
        $stmt = $this->con->prepare($sql);
        $data = ['id' => $id];
        $stmt->execute($data);
        $publicacion = $stmt->fetch(PDO::FETCH_ASSOC);
        return $publicacion;
    }



    public function insert($publicaciones){
        try{
        //sentencia sql
        $sql = "INSERT INTO `Publicacion` (`num_publicacion`, `publi_titulo`, `publi_categoria`, `publi_detalle`, `publi_usuarioActualizacion`, `publi_fechaActualizacion`, `fechapublicacion`)
        VALUES(:num, :titulo, :categoria, :detalle, :usuario, :fechaA, :fecha)";

        //bind parameters
        $sentencia = $this->con->prepare($sql);
        $data = [
            'num' =>  $publicaciones->getnum(),
            'titulo' =>  $publicaciones->getTitulo(),
            'categoria' =>  $publicaciones->getCategoria(),
            'detalle' =>  $publicaciones->getDetalle(),
            'usuario' =>  $publicaciones->getUActualizacion(),
            'fechaA' =>  $publicaciones->getFActualizacion(),
            'fecha' =>  $publicaciones->getfechapublicacion()
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

    public function update($publicaciones){

        try{
            //prepare
            $sql = "UPDATE Publicacion SET num_publicacion=:num, publi_titulo=:titulo, publi_categoria=:categoria, publi_detalle=:detalle, publi_usuarioActualizacion=:usuario, publi_fechaActualizacion=:fechaA, fechapublicacion=:fecha where id_publicacion=:id";
           //bind parameters
            $sentencia = $this->con->prepare($sql);
            $data = [
                'num' =>  $publicaciones->getnum(),
                'titulo' =>  $publicaciones->getTitulo(),
                'categoria' =>  $publicaciones->getCategoria(),
                'detalle' =>  $publicaciones->getDetalle(),
                'usuario' =>  $publicaciones->getUActualizacion(),
                'fechaA' =>  $publicaciones->getFActualizacion(),
                'id' =>  $publicaciones->getId(),
                'fecha' =>  $publicaciones->getfechapublicacion()
                ];


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

   public function delete($publicaciones){
       try{
        //prepare
        $sql = " DELETE FROM PUBLICACION WHERE id_publicacion=:id";
        $sentencia = $this->con->prepare($sql);
        $data = [
        'id' =>  $publicaciones];
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
    
}
