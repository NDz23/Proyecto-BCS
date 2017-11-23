<?php

require 'class_post.php';
require 'class_usuario.php';
require 'class_publicacion.php';
require 'class_comentario.php';
require 'class_puntaje.php';
require 'class_serializacion.php';

//PRUEBA USUARIO
$usuario = new Usuario('Administrador', '12345', 'M', 'admin');
var_dump($usuario);
echo PHP_EOL;

//PRUEBA PUBLICACIÓN
$publicacion = new Publicacion('error', 'php', 'echo "foo bar baz"', FALSE);
var_dump($publicacion);
echo PHP_EOL;

//PRUEBA COMENTARIO
$comentario = new Comentario('sol','php','echo "hola";');
var_dump($comentario);
echo PHP_EOL;

//PRUEBA PUNTAJE
$puntaje = new Puntaje($usuario, 5);
var_dump($puntaje);

//PRUEBA SERIALIZACIÓN
$serial= new Serializacion();
echo "Serial----------------", PHP_EOL;
var_dump($serial->serializar($comentario));
echo "Serial----------------", PHP_EOL;
$serial->guardar("comentario",$serial->serializar($comentario));
var_dump($serial->obtener("comentario"));

?>