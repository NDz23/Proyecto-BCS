<?php

require_once 'class_post.php';
require_once 'class_usuario.php';
require_once 'class_publicacion.php';
require_once 'class_comentario.php';
require_once 'class_puntaje.php';
require_once 'class_serializacion.php';
require_once 'class_sesion.php';

class Inicio {

    private $arrayPublicaciones;
    private $usuarios;
    private $serial;

    public function __construct(){
        $this->serial= new Serializacion();
        $temp = $this->serial->obtener("serial_data");
        $this->arrayPublicaciones = $temp->arrayPublicaciones;
        $this->usuarios = $temp->usuarios;
    }

    public function agregarUsuario($usuario){
        $this->usuarios[] = $usuario;
    }

    public function agregarPublicacion($publicacion){
        $this->arrayPublicaciones[] = $publicacion;
    }
    public function __get($param) {
        return $this->$param;
    }
    public function __set($name, $value) {
        $this->$name = $value;
    }

    /*public function __destruct() {
        $this->serial->guardar("serial_data", $serial->$this);
    }*/

}
//generar archivo
/*$serial= new Serializacion();
$inicio = new Inicio();
$usuario = new Usuario('Administrador', '12345', 'M', 'admin');
$inicio->agregarUsuario($usuario);
echo 'Serial---', PHP_EOL;
var_dump($serial->serializar($inicio));
echo 'Guardar serial---', PHP_EOL;
$serial->guardar("serial_data",$serial->serializar($inicio));
echo 'Obtener serial---', PHP_EOL;
var_dump($serial->obtener("serial_data"));*/

?>