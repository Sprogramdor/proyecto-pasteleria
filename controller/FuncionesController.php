<?php
//Autor: Acosta Jesus 
require_once 'model/dao/ProductosDAO.php';
require_once 'model/dao/TipoProductDAO.php';
require_once 'model/dto/Producto.php';
require_once 'model/dao/ClienteDAO.php';
require_once 'model/dao/CarritoDAO.php';

class FuncionesController {
    private $model;
    private $cmodel;
    private $carritomodel;
    
    public function __construct() {// constructor
        $this->model = new ProductosDAO();
        $this->cmodel = new ClienteDAO();
        $this->carritomodel = new CarritoDAO();
    
    }
   
    public function index() {
      //Trae los productos con stock 
    $resultados = $this->model->Ventas("");
      // comunicarnos a la vista
     // require_once HEADERADICIONAL;
     $parametro = (!empty($_GET["b"]))?htmlentities($_GET["b"]):"";
     $clientes =  $this->cmodel->ClientesList($parametro); 
      require_once VVENTAS.'list.php';
      
     // require_once FOOTER ;
    }

   
   
    // buscar con ajax
    public function searchAjax() {
        //lectura de parametros
        $parametro = (!empty($_GET["b"]))?htmlentities($_GET["b"]):"";
        //llamar al modelo
        $resultados =  $this->cmodel->ClientesList($parametro); 
        echo json_encode($resultados);
    }

    

}// cierre de clase 