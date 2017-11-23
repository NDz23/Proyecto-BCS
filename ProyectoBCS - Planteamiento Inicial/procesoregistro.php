<?php
if (empty($_POST)) {
    header('Location: index.php?error=4');
    exit();
}

require 'class_contenedor.php';

$nombre = filter_input(INPUT_POST, 'nombre');
$user = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'password');
$repass = filter_input(INPUT_POST, 'repass');
$genero = filter_input(INPUT_POST, 'my_select');

$serial= new Serializacion();
$inicio = $serial->obtener("serial_data");

foreach ($inicio->usuarios as $usuario) {
    if ($usuario->username === $user) {
        header('Location: index.php?error=2');
        exit();
    }
}

if ($password === $repass) {
    $usuarioTemp = new Usuario($nombre, $password, $genero, $user);
    $inicio->agregarUsuario($usuarioTemp);
    $serial->guardar("serial_data",$serial->serializar($inicio));
    Sesion::crearSesion();
    Sesion::setId();
    Sesion::setValor('usuario', $user);
    Sesion::setValor('nombre', $nombre);
    Sesion::setValor('genero', $genero);
    header('Location: index_inicio.php');
}
else{
    header('Location: index.php?error=3');
}



?>
