<?php
// AUTOR: ACOSTA MINUCHE JESUS 
class Carrito{
    private $id, $cliente, $producto;

    function __construct() {
        
    }

   function getId() {
        return $this->id;
    }

    function getcliente() {
        return $this->cliente;
    }

    function getproducto() {
        return $this->producto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setcliente($cliente) {
        $this->cliente = $cliente;
    }

    function setproducto($producto) {
        $this->producto = $producto;
    }



}