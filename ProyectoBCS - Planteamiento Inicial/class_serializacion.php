<?php

class Serializacion{
    public function serializar($dato) {
        return serialize($dato);
    }
    public function guardar($nombre, $serial) {
        file_put_contents("$nombre", $serial);
    }
    public function obtener($nombre){
        $dato = file_get_contents("$nombre");
        return unserialize($dato);
    }
    
}
?>