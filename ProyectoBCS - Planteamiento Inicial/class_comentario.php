<?php

class Comentario extends Post {

    private $puntuacionProm;
    private $puntajesDados;
    private $username;

    public function __construct($descPub, $etiquetaLenguaje, $codPub, $user) {
        parent::__construct($descPub, $etiquetaLenguaje, $codPub);
        $this->username = $user;
        $this->puntuacionProm = 0;
        $this->puntajesDados = [];
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

    public function puntuar($puntaje) {
        $this->puntajesDados[] = $puntaje;
        $puntosTmp = 0;
        foreach ($this->puntajesDados as $puntaje) {
            $puntosTmp += $puntaje->puntos;
        }
        $tamañoTmp = count($this->puntajesDados);
        $this->puntuacionProm = $puntosTmp / $tamañoTmp;
    }

}
?>