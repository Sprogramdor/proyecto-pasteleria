<?php
// Autor : Ramos Fabrizio

class Publicaciones{
    private $id_publicacion,$num_publicacion, $publi_titulo, $publi_categoria, $publi_detalle, $publi_usuarioActualizacion, $publi_fechaActualizacion, $fechapublicacion;

    function __construct(){

    }

    function getId(){
        return $this->id_publicacion;
    }

    function setId($id_publicacion){
        $this->id_publicacion = $id_publicacion;
    }

    function getnum(){
        return $this->num_publicacion;
    }

    function setnum($num_publicacion){
        $this->num_publicacion = $num_publicacion;
    }






    function getTitulo(){
        return $this->publi_titulo;
    }

    function setTitulo($publi_titulo){
        $this->publi_titulo = $publi_titulo;
    }

    function getCategoria(){
        return $this->publi_categoria;
    }

    function setCategoria($publi_categoria){
        $this->publi_categoria = $publi_categoria;
    }

    function getDetalle(){
        return $this->publi_detalle;
    }

    function setDetalle($publi_detalle){
        $this->publi_detalle = $publi_detalle;
    }

    function getUActualizacion(){
        return $this->publi_usuarioActualizacion;
    }

    function setUActualizacion($publi_usuarioActualizacion){
        $this->publi_usuarioActualizacion = $publi_usuarioActualizacion;
    }

    function getFActualizacion(){
        return $this->publi_fechaActualizacion;
    }

    function setFActualizacion($publi_fechaActualizacion){
        $this->publi_fechaActualizacion = $publi_fechaActualizacion;
    }
    
    


    function getfechapublicacion(){
        return $this->fechapublicacion;
    }

    function setfechapublicacion($fechapublicacion){
        $this->fechapublicacion = $fechapublicacion;
    }

}