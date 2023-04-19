<?php
// Autor: Acosta Jesus 
require_once 'model/dao/ProductosDAO.php';
require_once 'model/dao/TipoProductDAO.php';
require_once 'model/dto/Producto.php';

class ProductosController {
    private $model;
    
    public function __construct() {// constructor
        $this->model = new ProductosDAO();
    }

    // funciones del controlador
    public function index() {
      //comunica con el modelo (enviar datos o obtener datos)
      $resultados = $this->model->selectAll("");
      // comunicarnos a la vista
     // require_once HEADERADICIONAL;
      require_once VPRODUCTOS.'list.php';
     // require_once FOOTER ;
      
    }

    public function search(){
      // lectura de parametros enviados
      $parametro = (!empty($_POST["b"]))?htmlentities($_POST["b"]):"";
     //comunica con el modelo (enviar datos o obtener datos)
      $resultados = $this->model->selectAll($parametro);
     // comunicarnos a la vista
     require_once VPRODUCTOS.'list.php';
    }
    // buscar con ajax
    public function searchAjax() {
        //lectura de parametros
        $parametro = (!empty($_GET["b"]))?htmlentities($_GET["b"]):"";
        //llamar al modelo
        $resultados =  $this->model->selectAll($parametro);
        //no llama a la vista 
        //    require_once VPRODUCTOS.'list.php';       
        // imprime resultados para que la vista pueda leerlos a traves de js
        echo json_encode($resultados);
    }

    public function AddAjax() {
        //lectura de parametros
        $parametro = (!empty($_GET["b"]))?htmlentities($_GET["b"]):"";
        //llamar al modelo
        $resultados =  $this->model->selectOne($parametro);
        //no llama a la vista 
        //    require_once VPRODUCTOS.'list.php';       
        // imprime resultados para que la vista pueda leerlos a traves de js
        echo json_encode($resultados);
    }




    // muestra el formulario de nuevo producto
    public function view_new(){
          //comunicarse con el modelo
          $modeloTipo = new TipoProductDAO();
          $tipos = $modeloTipo->Tipos();
          require_once VPRODUCTOS.'nuevo.php';

    }




    // lee datos del formulario de nuevo producto y lo inserta en la bdd (llamando al modelo)
    public function new() {
   
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          //  verificacionesn
          $nom= $_POST['nomprod'];
          if(empty($_POST['codiprod']) ||  empty($_POST['nomprod']) || empty($_POST['preprod']))
          { header('Location:index.php?c=Productos&f=view_new');}

          $prod = new Producto();
          // lectura de parametros
          $prod->setcod_producto(htmlentities($_POST['codiprod']));
          $prod->setprod_nombre(htmlentities($_POST['nomprod']));
          $prod->setstock(htmlentities($_POST['stock']));
          $prod->setprod_precio(htmlentities( floatval ($_POST['preprod'])));
          $prod->setprod_descripcion(htmlentities($_POST['descprod']));
          $prod->setprod_fechaCreacion(htmlentities( $_POST['fechaprod']));
          $prod->settipo_producto(htmlentities($_POST['tipoprod']));
          $fechaActual = new DateTime('NOW');
          $prod->setprod_fechaActualizacion($fechaActual->format('Y-m-d H:i:s'));
          $prod->setprod_usuarioActualizacion(1);
        
          //comunicar con el modelo
          $exito = $this->model->insert($prod);

          $msj = 'Producto guardado exitosamente';
          $color = 'primary';
          if (!$exito) {
              $msj = "No se pudo realizar el guardado";
              $color = "danger";
          }
          if (!isset($_SESSION)) {
              session_start();
          };
          $_SESSION['mensaje'] = $msj;
          $_SESSION['color'] = $color;
          //llamar a la vista
          header('Location:index.php?c=Productos&f=index');
      } 
  }
  
  public function delete(){
      //leeer parametros
      $id= $_REQUEST['id'];
            //comunicando con el modelo
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
          header('Location:index.php?c=productos&f=index');
  }


   // muestra el formulario de editar producto
   public function view_edit(){
     //leer parametro
     $id= $_REQUEST['id']; // verificar, limpiar
     //comunicarse con el modelo de productos
    $prod = $this->model->selectOne($id);
    //comunicarse con el modelo de categorias
    $modeloTipo = new TipoProductDAO();
    $tipos = $modeloTipo->Tipos();
    // comunicarse con la vista
    require_once VPRODUCTOS.'edit.php';

  }

   // lee datos del formulario de editar producto y lo actualiza en la bdd (llamando al modelo)
   public function edit(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {// actualizar
      // verificaciones
         
      if(empty($_POST['codiprod']) ||  empty($_POST['nomprod']) || empty($_POST['preprod']))
          { header('Location:index.php?c=Productos&f=view_edit');} 
          $prod = new Producto();
          // lectura de parametros
          $prod->setid_producto(htmlentities($_POST['id']));
          $prod->setcod_producto(htmlentities( $_POST['codiprod']));
          $prod->setprod_nombre(htmlentities($_POST['nomprod']));
          $prod->setstock(htmlentities( intval( $_POST['stock'])));
          $prod->setprod_precio(htmlentities( floatval ($_POST['preprod'])));
          $prod->setprod_descripcion(htmlentities($_POST['descprod']));
          $prod->setprod_fechaCreacion(htmlentities( $_POST['fechaprod']));
          $prod->settipo_producto(htmlentities($_POST['tipoprod']));
          $fechaActual = new DateTime('NOW');
          $prod->setprod_fechaActualizacion($fechaActual->format('Y-m-d H:i:s'));
          $prod->setprod_usuarioActualizacion(1);
        
          //llamar al modelo
          $exito = $this->model->update($prod);
          
          $msj = 'Producto actualizado exitosamente';
          $color = 'primary';
          if (!$exito) {
              $msj = "No se pudo realizar la actualizacion";
              $color = "danger";
          }
           if(!isset($_SESSION)){ session_start();};
          $_SESSION['mensaje'] = $msj;
          $_SESSION['color'] = $color;
      //llamar a la vista
        header('Location:index.php?c=productos&f=index');
          
   }

} // cierre de Edit 





}// cierre de clase 