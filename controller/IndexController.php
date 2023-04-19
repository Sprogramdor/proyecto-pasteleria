<?php
// Autor: Acosta Jesus 
class IndexController {
    
    public function index(){ 
        
        
        if(!empty($_GET['p'])){    
            $page =  $_GET['p'];
            require_once 'view/estaticas/'.$page.'.php';
        }
        else{
          require_once 'view/indexPasteleria.php'; //mostrando la vista de home de la aplicacion
        }
    }

    public function v(){
        
            require_once 'sesion/validar.php';
        
    }
  
}
