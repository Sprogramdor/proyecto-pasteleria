<?php
// autor:Acosta Jesus  
require_once 'model/dao/PublicacionesDAO.php';
require_once 'model/dao/CategoriasPubliDAO.php';
require_once 'model/dto/Publicaciones.php';

class PublicacionesController {
    private $model;
    
    public function __construct() {// constructor
        $this->model = new PublicacionesDAO();
    }

    // funciones del controlador
    public function index() {
      $resultados = $this->model->selectAll("");
      require_once VPUBLICACIONES.'list.php';      
    }

    public function search(){
      // lectura de parametros enviados
      $parametro = (!empty($_POST["b"]))?htmlentities($_POST["b"]):"";
      $resultados = $this->model->selectAll($parametro);
     require_once VPUBLICACIONES.'list.php';
    }


    // buscar con ajax
    public function searchAjax() {
        //lectura de parametros
        $parametro = (!empty($_GET["b"]))?htmlentities($_GET["b"]):"";
        //llamar al modelo
        $resultados =  $this->model->selectAll($parametro);
        echo json_encode($resultados);
    }

    // muestra el formulario de nuevo producto
    public function view_new(){
    $modeloCat = new CategoriasPubliDAO();
    $cate = $modeloCat->selectAll();
    require_once VPUBLICACIONES.'new.php';
    }

    public function new() {
      //cuando la solicitud es por post
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {// insertar el producto
          // considerar verificaciones
          //if(!isset($_POST['codigo'])){ header('');}
          $publi = new Publicaciones();
          // lectura de parametros
          $publi->setnum(htmlentities($_POST['nump']));
          $publi->setTitulo(htmlentities($_POST['titulo']));
          $publi->setCategoria(htmlentities($_POST['cate']));
          $publi->setDetalle(htmlentities($_POST['cont']));
          $publi->setUActualizacion(1);
          $publi->setfechapublicacion(htmlentities($_POST['fecha']));
          $fechaActual = new DateTime('NOW');
          $publi->setFActualizacion($fechaActual->format('Y-m-d H:i:s'));
        
          //comunicar con el modelo
          $exito = $this->model->insert($publi);

          if (!isset($_SESSION)) {
              session_start();
          };
         
          
          header('Location:index.php?c=Publicaciones&f=index');
      } else{
        header('Location:index.php?c=Publicaciones&f=index');
      }
  }
  
  public function delete(){
      //leeer parametros
     
     $id=($_REQUEST['id']);
         $exito = $this->model->delete($id);
        $msj = 'Producto eliminado exitosamente';
            $color = 'primary';
            if (!$exito) {
                $msj = "No se pudo eliminar la actualizacion";
                $color = "danger";
            }
             if(!isset($_SESSION)){ session_start();};
            $_SESSION['mensaje'] = $msj;
            $_SESSION['color'] = $color;
        //llamar a la vista
        header('Location:index.php?c=Publicaciones&f=index');

    }


   // muestra el formulario de editar producto
   public function view_edit(){
     //leer parametro
     $id= $_REQUEST['id']; // verificar, limpiar
     //comunicarse con el modelo de productos
    $publicacion= $this->model->selectOne($id);
    //comunicarse con el modelo de CategoriasPubli
    $modeloCat = new CategoriasPubliDAO();
    $cate = $modeloCat->selectAll();
    require_once VPUBLICACIONES.'edit.php';

  }

   // lee datos del formulario de editar producto y lo actualiza en la bdd (llamando al modelo)
   public function edit(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
      // verificaciones
             //if(!isset($_POST['codigo'])){ header('');}
          // leer parametros
          $publi = new Publicaciones();
         
          // lectura de parametros
          $publi->setId(htmlentities($_POST['id']));
          $publi->setnum(htmlentities($_POST['nump']));
          $publi->setTitulo(htmlentities($_POST['titulo']));
          $publi->setCategoria(htmlentities($_POST['cate']));
          $publi->setDetalle(htmlentities($_POST['cont']));
          $publi->setUActualizacion(1);
          $publi->setfechapublicacion(htmlentities($_POST['fecha']));
          $fechaActual = new DateTime('NOW');
          $publi->setFActualizacion($fechaActual->format('Y-m-d H:i:s'));
        
          //comunicar con el modelo
          $exito = $this->model->update($publi);
          

           if(!isset($_SESSION)){ session_start();};
          $_SESSION['mensaje'] = $msj;
          $_SESSION['color'] = $color;
      //llamar a la vista
       header('Location:index.php?c=publicaciones&f=index');
         
      } 
   }
}
