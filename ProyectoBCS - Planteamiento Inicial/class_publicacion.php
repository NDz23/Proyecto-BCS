<?php

class Publicacion extends Post {

    private $flag;
    private $comentarios;
    private $username;

    public function __construct($descPub, $etiquetaLenguaje, $codPub, $flag, $username) {
        parent::__construct($descPub, $etiquetaLenguaje, $codPub);
        $this->flag = $flag;
        $this->comentarios = [];
        $this->username = $username;
    }

    public function __get($atributo) {
        if ($atributo === 'descPub' || $atributo === 'codPub' || $atributo === 'etiquetaLenguaje') {
            return parent::__get($atributo);
        }
        else{
            return $this->$atributo;
        }
    }

    public function __set($atributo, $dato) {
        if ($atributo === 'descPub' || $atributo === 'codPub' || $atributo === 'etiquetaLenguaje') {
            parent::__set($atributo);
        }
        else{
        $this->$atributo = $dato;
        }
    }

    public function comentar($comentario) {
        $this->comentarios[] = $comentario;
    }

}
?>