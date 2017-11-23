<?php
        require_once 'class_contenedor.php';
        Sesion::crearSesion();
        Sesion::setId();
    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php?error=4');
    }
    else{

        $serial= new Serializacion();
        $inicio = new Inicio();
        
        $claveI = (int)filter_input(INPUT_POST, 'k');
        $desc = filter_input(INPUT_POST, 'asunto');
        $cod = filter_input(INPUT_POST, 'codigo');
        
        $publicaciones = array_reverse($inicio->arrayPublicaciones);
        $comentario = new Comentario($desc, '', $cod, Sesion::getValor('usuario'));
        $publicaciones[$claveI]->comentar($comentario);
        $publicaciones = array_reverse($publicaciones);
        
        $inicio->arrayPublicaciones = $publicaciones;
        
        $serial->guardar('serial_data', $serial->serializar($inicio));
        header('Location: index_inicio.php?pag=pub');
    }
    
?>