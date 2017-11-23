<!DOCTYPE html>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>BCS Sign-Up/Login</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/style.css">


</head>
<body>


  <div class="form">
      <h1>BUGGED CODE SOLUTIONS</h1>
      <?php 
            if (isset($_GET['error'])) {
                switch ($_GET['error']) {
                    case '1':
                        echo '<h3>¡¡El usuario no existe o su contraseña es incorrecta!!</h3>';
                        break;
                     case '2':
                        echo '<h3>¡¡El usuario que está tratando de crear ya existe!!</h3>';
                        break;
                    case '3':
                        echo '<h3>¡¡Asegurese de repetir la contraseña correctamente!!</h3>';
                        break;
                    case '4':
                        echo '<h3>¡¡Acceso restringido!!</h3>';
                        break;
                    default:
                        break;
                }                
            }
          ?>

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Crea una cuenta</a></li>
        <li class="tab"><a href="#login">Inicia sesión</a></li>
      </ul>
      
      


      <div class="tab-content">
        <div id="signup">   
          <h2>¡Registraté en BCS!</h2>

          <form action="procesoregistro.php" method="post">
          
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input type="text" name= "nombre" id="nombre" required autocomplete="off" />
            </div>
          <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
            <input type="user" name="user" id="user" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="password" id="password" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Repita contraseña<span class="req">*</span>
            </label>
            <input name="repass" id="repass" type="password" class="repass" />
          </div>

          <div class="field-wrap">
            <span id="default_message_overlay"> Género</span>
            <select name="my_select" id="my_select">
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
          </div>
          
          <button type="submit" class="button button-block"/>¡Listo!</button>
          
          </form>

        </div>
        




        <div id="login">   
          <h2>¡Bienvenido de vuelta a BCS!</h2>
          
          <form action="procesologin.php" method="post">
          
            <div class="field-wrap">
            <label>
              Usuario<span class="req">*</span>
            </label>
            <input type="user" name="user" id="user" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input type="password" name="password" id="password" required autocomplete="off"/>
          </div>
          
          <button class="button button-block"/>¡Entrar!</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>