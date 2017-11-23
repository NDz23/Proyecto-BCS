<?php

require 'class_sesion.php';

$location = 'Location: index.php';

//Destruye la sesión actual.
Sesion::crearSesion();
Sesion::destruirSesion();

//Redirige hacia la página de login.
header($location);
?>
