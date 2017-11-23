<?php

class Usuario {

    private $nombre;
    private $contraseña;
    private $genero;
    private $username;
    private $publicaciones;
    private $comentarios;

    // Constructor de usuario
    public function __construct($nombre, $contraseña, $genero, $username) {
        $this->nombre = $nombre;
        $this->contraseña = $contraseña;
        $this->genero = $genero;
        $this->username = $username;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $dato) {
        $this->$atributo = $dato;
    }

    public function compararContraseña($contraseña) {
        return ($this->contraseña === $contraseña);
    }

    public function agregarPublicacion($publicacion) {
        $this->publicaciones[] = $publicacion;
    }

    public function agregarComentario($comentario) {
        $this->comentarios[] = $comentario;
    }

}

?>
