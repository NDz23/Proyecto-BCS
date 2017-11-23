<?php
if (empty($_POST)) {
    header('Location: index.php?error=4');
    exit();
}

require 'class_contenedor.php';

$serial= new Serializacion();
$inicio = $serial->obtener("serial_data");
$user = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'password'); 

while(TRUE){
    foreach ($inicio->usuarios as $usuario) {
        if ($usuario->username === $user) {
            if ($usuario->compararContraseña($password)) {
                echo 'Log correcto.';
                Sesion::crearSesion();
                Sesion::setId();
                Sesion::setValor('usuario', $user);
                header('Location: index_inicio.php');
                Sesion::setValor('nombre', $usuario->nombre);
                Sesion::setValor('genero', $usuario->genero);
                exit();
            }
            else{//retorna el login porque las contraseñas no coinciden
                echo 'Mala contraseña.';
                header('Location: index.php?error=1');
                exit();
            }
        }
    }
    break;
}
//retorna al login si no encuentra el usuario
echo 'No existe el usuario.';
header('Location: index.php?error=1');
?>

