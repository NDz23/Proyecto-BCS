<?php

class Post {

    private $descPub;
    private $etiquetaLenguaje;
    private $codPub;
    

    public function __construct($descPub, $etiquetaLenguaje, $codPub) {
        $this->descPub = $descPub;
        $this->etiquetaLenguaje = $etiquetaLenguaje;
        $this->codPub = $codPub;
    }

    public function editar($descPub, $codPub) {
        $this->descPub = $descPub;
        $this->codPub = $codPub;
    }
    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $dato) {
        $this->$atributo = $dato;
    }
}
?>