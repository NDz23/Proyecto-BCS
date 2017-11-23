<?php
        require_once 'class_contenedor.php';
    
        Sesion::crearSesion();
        Sesion::setId(); 

    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php?error=4');
    }
    else{

        $serial= new Serializacion();
        $inicio = $serial->obtener("serial_data");
        $clavePub = (int) filter_input(INPUT_POST, 'borrar'); 
        $publicaciones = array_reverse($inicio->arrayPublicaciones);
        unset($publicaciones[$clavePub]);
        $inicio->arrayPublicaciones = array_reverse($publicaciones);
        $serial->guardar('serial_data', $serial->serializar($inicio));
        header('Location: index_inicio.php?pag=perfil');
    }
?>

