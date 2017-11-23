<div class="container">
    <form>    
        <h2 class="text-center header">PERFIL DEL USUARIO</h2>
        <div class="select">
            <?php
            
            ?>
            <label for="nombre">Nombre: </label>
            <?php
            echo mb_convert_case(Sesion::getValor('nombre'), MB_CASE_TITLE, 'UTF-8');
            ?>
            <br>
            <label for="usuario">Usuario: </label>
            <?php
            echo Sesion::getValor('usuario');
            ?>
            <br>
            <label for="genero">Genero: </label>
            <?php
                    if (Sesion::getValor('genero') === 'M') {
                        echo 'Masculino';
                    }
                    if (Sesion::getValor('genero') === 'F') {
                        echo 'Femenino';
                    }
            
            ?>
            <br>
            <label for="puntaje">Puntaje promedio de comentarios: </label><br>
            <a href="index_inicio.php?pag=configuracion" class="desc">¡Modificar tus datos!</a>
        </div>
    </form>
</div>
<div class="container">
    <form action="procesopublicacionperfil.php" class="form-horizontal" method="post">    
            <h2 class="text-center header">¡HAZ UNA PUBLICACION!</h2>
            
            <div class="form-group">
                    <textarea class="text" id="asunto" name="asunto" placeholder="Describe lo que el codigo debería realizar." rows="1"></textarea>
            </div>
            
            <div class="radio">
                <label for="nofuncional">El codigo NO funciona</label>
                <input type="radio" name="funcion" value="0" id="nofuncional" checked>
                <label for="funcional">El codigo SI funciona</label>
                <input type="radio" name="funcion" value="1" id="funcional">
            </div>
            
            <div class="select">
                <label for="lenguaje">Lenguaje de programacion</label>
                <select name="lenguaje" id="lenguaje">
                    <optgroup label="A-D">
                        <option>C</option>
                        <option>C++</option>
                        <option>C#</option>                        
                        
                    <optgroup label="E-H">
                        <option>Groovy</option>
                        
                        
                    <optgroup label="I-L">
                        <option>Java</option>
                        <option>JavaScript</option>
                        
                    <optgroup label="M-P">
                        <option>Pascal</option>
                        <option>Perl</option>
                        <option>PHP</option>
                        <option>Python</option>

                    <optgroup label="Q-T">
                        <option>Ruby</option>
                        
                    <optgroup label="U-X">
                        <option>Ubercode</option>
                        
                    <optgroup label="Y-Z">
                        <option>ZPL</option>
                        
                    <optgroup label="Otro">
                        <option>Otro</option>
                        
                </select>
            </div>
                
            <div class="form-group">
                    <textarea class="code" id="codigo" name="codigo" placeholder="Escribe parte de tu código aquí." rows="5"></textarea>
            </div>

            <div class="form-group">
                    <button type="submit" class="button">PUBLICAR</button>
            </div>
    </form>
</div>
<?php
    include 'procesoimpresionpublicacionesperfil.php';
?>

