<?php

require 'class_contenedor.php';

$serial= new Serializacion();
$inicio = $serial->obtener("serial_data");
var_dump($inicio.$usuarios);

?>