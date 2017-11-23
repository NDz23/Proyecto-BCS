<?php
    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php?error=4');
    }
    else{
        require_once 'class_contenedor.php';
        $serial= new Serializacion();
        $inicio = $serial->obtener('serial_data');
        
    }
    
?>