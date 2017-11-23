<?php

require_once 'class_contenedor.php';
$clavePub = (int) filter_input(INPUT_POST, 'pub');
$inicio = new Inicio();
$publicaciones = array_reverse($inicio->arrayPublicaciones);
$_POST['k'] = $clavePub;

echo '<div class="container">';
if ($publicaciones[$clavePub]->flag === '1') {
    echo '<h2>Publicado por: ' . $publicaciones[$clavePub]->username . ' (SOLUCIONADO)</h2>';
} else {
    echo '<h2>Publicado por: ' . $publicaciones[$clavePub]->username . '</h2>';
}
echo '<h3>Lenguaje: ' . $publicaciones[$clavePub]->etiquetaLenguaje . '</h3>';
echo '<h3>Descripcion: ' . $publicaciones[$clavePub]->descPub . '</h3>';
echo '<div class="pub"><pre>' . htmlspecialchars($publicaciones[$clavePub]->codPub) . '</pre></div>';
if (Sesion::getValor('usuario') === $publicaciones[$clavePub]->username && $publicaciones[$clavePub]->flag === '0') {
    echo '<form  class="float" action="procesocambiarflag.php" method="post"><select name="flag" id="flag" style="visibility:hidden">' . "<option>$clavePub</option>" . '</select><button type="submit" class="button">INDICAR QUE EL PROBLEMA YA FUE SOLUCIONADO</button> </form>';
}
if (Sesion::getValor('usuario') === $publicaciones[$clavePub]->username) {
    echo '<form  class="float" action="procesoborrarpublicacion.php" method="post"><select name="borrar" id="borrar" style="visibility:hidden">' . "<option>$clavePub</option>" . '</select><button type="submit" class="button">BORRAR PUBLICACION</button> </form>';
}
echo '</div>';
echo '<div class="container">
                <form action="procesocomentarpublicacion.php" class="form-horizontal" method="post">    
                        <h2 class="text-center header">¡HAZ UN COMENTARIO!</h2>

                        <div class="form-group">
                                <textarea class="text" id="asunto" name="asunto" placeholder="Describe tu solucion o mejora aqui." rows="1"></textarea>
                        </div>
                        
                        <div class="form-group">
                                <textarea class="code" id="codigo" name="codigo" placeholder="Tu solucion o mejora al codigo aqui." rows="5"></textarea>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="button">COMENTAR</button>
                        </div>
                </form>
            </div>';
foreach (array_reverse($publicaciones[$clavePub]->comentarios) as $comentario) {

    echo '<div class="container">';


    echo '<h2>Comentario por: ' . $comentario->username . '</h2>';

   
    echo '<h3>Descripcion: ' . $comentario->descPub . '</h3>';
    echo '<div class="pub"><pre>' . htmlspecialchars($comentario->codPub) . '</pre></div>';
    
    
    echo '</div>';
 
}
?>

