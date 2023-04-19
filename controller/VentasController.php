<?php
//Autor: Acosta Jesus 
require_once 'model/dao/ProductosDAO.php';
require_once 'model/dao/TipoProductDAO.php';
require_once 'model/dto/Producto.php';
require_once 'model/dao/ClienteDAO.php';
require_once 'model/dao/CarritoDAO.php';
require_once 'model/dto/Carrito.php';
class VentasController {
    private $model;
    private $cmodel;
    private $carritomodel;
    
    public function __construct() {// constructor
        $this->model = new ProductosDAO();
        $this->cmodel = new ClienteDAO();
        $this->carritomodel = new CarritoDAO();
    
    }
   
// muestra al vendedor la lista de clientes para seleccionar 
    public function index() {
      require_once VLISTCLIENTE.'list.php';
    }

// muestra productos para agg al carrito despues de que vendedor selecciona un cliente 
    public function next() {
        if(!empty($_POST["listac"])){
            $_SESSION['idp']=$_POST["listac"];
        //Trae los productos con stock 
        $resultados = $this->model->Ventas("");
       // require_once HEADERADICIONAL;
        require_once VVENTAS.'list.php';
        }else{
            header('Location:index.php?c=Ventas&f=index');
        }
    }

//muestra lista de productos para añadir mas al carrito 
    public function indext() {        
        $resultados = $this->model->Ventas("");
        require_once VVENTAS.'list.php';
    }

// muestra los productos en una pagina estatica 
    public function indexP() {
        //Trae los productos con stock 
        $resultados = $this->model->Ventas("");
       // require_once HEADERADICIONAL;
        require_once VESTATICPRODUC.'php';
      }

    // buscar con ajax los Clientes para que el vendedor pueda seleccionar uno 
    public function searchAjax() {
        //lectura de parametros
        $parametro = (!empty($_GET["b"]))?htmlentities($_GET["b"]):"";
        //llamar al modelo
        $resultados =  $this->cmodel->ClientesList($parametro); 
        echo json_encode($resultados);
    }



  
  //añade productos al carrito 
  public function add(){
    if(!isset($_SESSION)){ session_start();};
if(!empty($_POST["idcliente"])){
        $prod=$_POST["id_producto"];
        $cliente=$_POST["idcliente"];
        $_SESSION["idc"]=$_POST["idcliente"];
        $nombreprod= $_POST["nombre"];
        $carro = new Carrito();
        // lectura de parametros
        $carro->setcliente( intval($cliente));
        $carro->setproducto(intval($prod));
        
       $exito= $this->carritomodel->insert($carro);
        if($exito){
         $msj = $nombreprod.'  Se agrego al carrito';
         
         }else{
            $msj = 'No se pudo agregar al carrito';
         }$_SESSION['mensaje'] = $msj; 
header('Location:index.php?c=Ventas&f=indext');

}else{
    $_SESSION['mensaje']= "Seleccione un Cliente primero";
    header('Location:index.php?c=Ventas&f=indext');
}
     }

// añade productos al carrito pagina estatica 
     public function addEstatic(){
    if(!empty($_POST["id"])){
        $prod=$_POST["id_producto"];
            $cliente=$_POST["id"];
            $_SESSION["idcl"]=$_POST["id"];
            $nombreprod= $_POST["nombre"];
            $carro = new Carrito();
            // lectura de parametros
            $carro->setcliente(intval($cliente));
            $carro->setproducto(intval($prod));
           // var_dump ($_POST);
         $exito= $this->carritomodel->insert($carro);
    
            if($exito){
                echo "si ";
                //var_dump ($_POST);
             $msj = $nombreprod.'  Se agrego al carrito';
            header('Location:index.php?c=Ventas&f=indexP');
             }else{
                echo "no";
                var_dump ($_POST);
                $msj = 'No se pudo agregar al carrito';
             }$_SESSION['mensaje'] = $msj; 
    }else{
        $_SESSION['mensaje']= "Seleccione un Cliente primero";
        header('Location:index.php?c=index&f=index&p=login&l=f');
    }
         }




// muestra carrito al vendedor de la caja  con el cliente y el valor a pagar
   
function viewShop(){
    if(!empty($_POST["idcarrito"])){
    $cliente=$_POST["idcarrito"];
        $productosC= $this->carritomodel->GetProductosCarrito($cliente);
        $clienteS=$this->cmodel->selectOne($cliente);
        if($productosC && $clienteS !=false ){
            
            require_once VSHOP.'list.php';
        }else{
                
           header('Location:index.php?c=Ventas&f=next');
        }
        
}else{
    echo "vacio"; 
        
    header('Location:index.php?c=Ventas&f=index');
}
}


  // muestra carrito al cliente 
function viewShopP(){
    if(!empty($_GET["id"])){
    $cliente=$_GET["id"];
        $productosC= $this->carritomodel->GetProductosCarrito($cliente);
        $clienteS=$this->cmodel->selectOne($cliente);
        if($productosC && $clienteS !=false ){
            require_once VSHOPF.'list.php';
        }else{
         header('Location:index.php?c=Ventas&f=indexP');
        }
        
}else{
    header('Location:index.php?c=Ventas&f=indexP');
}
}




}// cierre de clase 