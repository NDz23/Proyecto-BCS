<?php
require 'class_contenedor.php';
    
Sesion::crearSesion();
Sesion::setId(); 
    
$serial= new Serializacion();
$inicio = $serial->obtener("serial_data");

$descPub = filter_input(INPUT_POST, 'asunto');
$codPub = filter_input(INPUT_POST, 'codigo'); 
$etiquetaLenguaje = filter_input(INPUT_POST, 'lenguaje'); 
$flag = filter_input(INPUT_POST, 'funcion'); 
if ($descPub === '' || $codPub === '') {
    header('Location: index_inicio.php?pag=inicio');
    exit();
}
$publicacion = new Publicacion($descPub, $etiquetaLenguaje, $codPub, $flag, Sesion::getValor('usuario'));

$inicio->agregarPublicacion($publicacion);

$serial->guardar('serial_data', $serial->serializar($inicio));
header('Location: index_inicio.php?pag=inicio');

?>

