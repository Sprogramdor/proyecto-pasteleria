<?php
// autor: ACOSTA MINUCHE JESUS
class Producto {
    //properties
    private $id_producto, 
    $cod_producto,$prod_nombre, $prod_precio
    , $prod_descripcion	,$prod_fechaCreacion,$stock, 
    $tipo_producto, $prod_fechaActualizacion	
    , $prod_usuarioActualizacion;

    function __construct() {
        
    }

   function getid_producto() {
        return $this->id_producto;
    }

    function getcod_producto() {
        return $this->cod_producto;
    }

    function getprod_nombre() {
        return $this->prod_nombre;
    }
    function getprod_precio() {
        return $this->prod_precio;
    }

    function getstock() {
        return $this->stock;
    }


    function getprod_descripcion() {
        return $this->prod_descripcion;
    }
    function getprod_fechaCreacion() {
        return $this->prod_fechaCreacion;
    }
    function gettipo_producto() {
        return $this->tipo_producto;
    }
    function getprod_fechaActualizacion() {
        return $this->prod_fechaActualizacion;
    }
    function getprod_usuarioActualizacion() {
        return $this->prod_usuarioActualizacion;
    }



    function setid_producto($id_producto) {
        return $this->id_producto =$id_producto;
    }

    function setcod_producto($cod_producto) {
        return $this->cod_producto =$cod_producto;
    }

    function setprod_nombre($prod_nombre) {
        return $this->prod_nombre =$prod_nombre;
    }
    function setprod_precio($prod_precio) {
        return $this->prod_precio =$prod_precio;
    }

    function setstock($stock) {
        return $this->stock =$stock;
    }


    function setprod_descripcion($prod_descripcion) {
        return $this->prod_descripcion =$prod_descripcion;
    }
    function setprod_fechaCreacion($prod_fechaCreacion) {
        return $this->prod_fechaCreacion =$prod_fechaCreacion;
    }
    function settipo_producto($tipo_producto) {
        return $this->tipo_producto =$tipo_producto;
    }
    function setprod_fechaActualizacion($prod_fechaActualizacion) {
        return $this->prod_fechaActualizacion =$prod_fechaActualizacion;
    }
    function setprod_usuarioActualizacion($prod_usuarioActualizacion) {
        return $this->prod_usuarioActualizacion =$prod_usuarioActualizacion;
    }

    
    /*
    // Methods get y set parametrizados
    public function __set($marca, $valor) {
        // Verifica que la propiedad exista
        if (property_exists('Celular', $marca)) {
            $this->$marca = $valor;
        } else {
            echo $marca . " No existe.";
        }
    }

    public function __get($marca) {
      // Verifica que exista la propiedad
        if (property_exists('Celular', $marca)) {
            return $this->$marca;
        }
// Retorna null si no existe
        return NULL;
    }

    */
    
}
