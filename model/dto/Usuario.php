<?php
// autor: Acosta Jesus 
class Usuario {
    //properties
    private $id_usuario,$usuario_nombre, $usuario_password
    , $usuario_correo	,$usuario_estado , $usuario_fechaActualizacion,$rol;

    function __construct() {
        
    }

   function getid_usuario() {
        return $this->id_usuario;
    }

    function getnombre() {
        return $this->usuario_nombre;
    }

    function getpassword() {
        return $this->usuario_password;
    }
    function getcorreo() {
        return $this->usuario_correo;
    }

    function getestado() {
        return $this->usuario_estado;
    }


    function getfecha() {
        return $this->usuario_fechaActualizacion;
    }
    function getrol() {
        return $this->rol;
    }
   


    
    
    
}
