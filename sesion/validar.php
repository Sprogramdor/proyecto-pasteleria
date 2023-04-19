<?php
// autor : Acosta Jesus 
   session_start(); //iniciar una nueva session o reanudar la existente

   require_once 'model/dao/ClienteDAO.php';
   require_once 'model/dao/UsuariosDAO.php';

$user = (!empty($_POST['user'])) ? htmlentities($_POST['user']) : '';
$pass = (isset($_POST['pass'])) ? htmlentities($_POST['pass']) : '';
$pedido = (isset($_POST['pedido'])) ? htmlentities($_POST['pedido']) : "f";

$b1=false;
$b2=false;
// comprobacion de credenciales
// Administradores y vendedor 

$u= new UsuariosDAO();
$usuarios = $u->UsuarioList();

foreach ($usuarios as $ul){
        if ($user == $ul->usuario_nombre && $pass == $ul->usuario_password) {
            $b1=true;
            //almacenar datos en session
            $_SESSION['usuario'] = $user;
            $_SESSION['rol'] = $ul->rol;
            // redireccionar a paginas de administracion de productos,proveedores,usuarios,publicaciones 
            if($_SESSION['rol']==1){
                header('Location:index.php?c=Productos&f=index');
            }else if ($_SESSION['rol']==2){
                header('Location:index.php?c=Ventas&f=index&s=f');
            }
            
        }

    }

// comprobacion de credenciales  Clientes
$c= new ClienteDAO();
$idc;
$clientes = $c->ClientesListValidar();
foreach ($clientes as $cl){
    if ($user == $cl->cliente_nombre && $pass == $cl->password) {
            $_SESSION['id'] = $cl->id_cliente;
            $_SESSION['usuario'] = $user;
            $_SESSION['rol'] = $cl->rol;
        // lleva al formulario para hacer pedidos  en caso de que el usuario este con sesion iniciada
            if ($pedido == "t"){
                    header("Location:index.php?c=index&f=index&p=pedidosproductos");
                    //echo "$pedido"; 
            }else{
                header("Location:index.php?c=Ventas&f=indexP");
            }
            $b2=true;
        }
}


if(!$b1 && !$b2){
  DeleteSesion();
}


function DeleteSesion(){
      
    /*if(isset($_SESSION['usuario'])){
        unset( $_SESSION['usuario']);
    }*/
    // eliminar todas las variables almacenadas en session
    session_unset();
    //$_SESSION['mensaje'] = "Usuario y/o contrasena incorrecta";
    // redireccionamiento
    header("Location:index.php?c=index&f=index&p=login&l=false");
}

//var_dump($_SESSION);



$opcion = (isset($_GET['op']))? htmlentities($_GET['op']):'';
if($opcion =="cerrar"){
    // eliminar todas las variables almacenadas en session
    session_unset();
    // eliminar/ destruir o la saession
    session_destroy();
    //redirijir
    header("Location:index.php?c=index&f=index");
}
