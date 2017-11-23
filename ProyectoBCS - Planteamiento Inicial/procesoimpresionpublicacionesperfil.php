<?php
    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php?error=4');
    }
    else{
        require_once 'class_contenedor.php';
        $serial= new Serializacion();
        $inicio = $serial->obtener('serial_data');
        $contador = count($inicio->arrayPublicaciones) - 1;
        foreach (array_reverse($inicio->arrayPublicaciones) as $publicacion) {
            if (Sesion::getValor('usuario') === $publicacion->username) {
                echo '<div class="container">';
                if ($publicacion->flag === '1') {
                    echo '<h2>Publicado por: '.$publicacion->username.' (SOLUCIONADO)</h2>';
                }
                else{
                    echo '<h2>Publicado por: '.$publicacion->username.'</h2>';
                }
                        echo '<h3>Lenguaje: '.$publicacion->etiquetaLenguaje.'</h3>';
                        echo '<h3>Descripcion: '.$publicacion->descPub.'</h3>';
                        echo '<div class="pub"><pre>'.htmlspecialchars($publicacion->codPub).'</pre></div>';
                        echo '<form class="float" action="http://localhost:8000/index_inicio.php?pag=pub" method="post"><select name="" id="" style="visibility:hidden"><option>1</option></select> <button type="submit" class="button">VER O AGREGAR COMENTARIOS</button> </form>';
                        if (Sesion::getValor('usuario') === $publicacion->username && $publicacion->flag === '0') {
                            echo '<form  class="float" action="procesocambiarflagperfil.php" method="post"><select name="flag" id="flag" style="visibility:hidden">'."<option>$contador</option>".'</select><button type="submit" class="button">INDICAR QUE EL PROBLEMA YA FUE SOLUCIONADO</button> </form>';
                        }
                        if (Sesion::getValor('usuario') === $publicacion->username) {
                            echo '<form  class="float" action="procesoborrarpublicacionperfil.php" method="post"><select name="borrar" id="borrar" style="visibility:hidden">'."<option>$contador</option>".'</select><button type="submit" class="button">BORRAR PUBLICACION</button> </form>';
                        }
                echo '</div>';
                $contador--; 
            }
            
        }
    }
    
?>