<?php

class Puntaje {

    private $username;
    private $puntos;

    public function __construct($usuario, $puntos) {
        $this->username = $usuario->username;
        $this->puntos = $puntos;
    }

    public function cambiarPuntaje($puntos) {
        $this->puntos = $puntos;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

}
?>