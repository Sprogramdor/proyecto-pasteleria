<?php
// autor: Acosta Jesus
require_once 'model/dao/UsuariosDAO.php';
require_once 'model/dao/ClienteDAO.php';
require_once 'model/dto/Usuario.php';

class UsuariosController {
    private $model;
    
    public function __construct() {// constructor
        $this->model = new UsuariosDAO();
        $this->modelc = new ClienteDAO();
    }

    // funciones del controlador
    public function index() {
      $resultados = $this->model->Usuarios();
      require_once VUSER.'list.php';      
    }

    public function indexc() {
        $resultados = $this->modelc->ClientesListValidar();
        require_once VCLIENTES.'list.php';      
      }
    

    
}
