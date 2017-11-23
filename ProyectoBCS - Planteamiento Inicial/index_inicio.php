<!DOCTYPE html>
<?php
    require_once 'class_contenedor.php';
    Sesion::crearSesion();
    Sesion::setId();  
?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<style>
body {
    margin:0;
    background: #c1bdba;
    font-family: 'Titillium Web', sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: rgba(19, 35, 47, 0.9);
}

.topnav a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  font-size: 17px;
  font-family: 'Titillium Web', sans-serif;
}

.topnav a:hover {
  background: #179b77;
  color: #ffffff;
}

.topnav a.active {
    background-color: #179b77; 
    color: white;
}
.container {
  background: rgba(19, 35, 47, 0.9);
  padding: 10px;
  max-width: 95%;
  margin: 40px auto;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  font-family: 'Titillium Web', sans-serif;
}
.button{
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 5px 10px;
  font-size: 15px;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.1s ease;
  -webkit-appearance: none;
  display: block;
  width: 100%;
  font-family: 'Titillium Web', sans-serif;
  margin: 0 0 10px;
}
.button:hover, .button:focus {
  background: #179b77;
}
.radio, .select{
   margin: 0 0 10px; 
   color: white;
   font-size: 15px;
}

.pub{
   margin: 0 0 10px; 
   color: black;
   font-size: 15px;
   background: white;
}
.float{
   margin-right: 10px;
   display: inline-table
 }
 .desc{
     color: white;
     font-family: 'Titillium Web', sans-serif;
     font-weight: 300;
     text-align: justify;
 }

textArea{
  margin: 0 0 10px;
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 5px 10px;
  font-size: 12px;
  letter-spacing: .1em;
  background: #ffffff;
  color: black;
  -webkit-transition: all 0.5s ease;
  transition: all 0.1s ease;
  -webkit-appearance: none;
  width: 98.5%;
  font-family: 'Titillium Web', sans-serif;
}
 .code{
     font-family:Consolas;
 }

h1 {
  text-align: left;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 10px;
  font-family: 'Titillium Web', sans-serif;
}
h2 {
  text-align: left;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 10px;
  font-family: 'Titillium Web', sans-serif;
  
}
h3 {
   text-align: left;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 10px;
  font-family: 'Titillium Web', sans-serif;
}

</style>
</head>
<body>
<!-- bcs verde #179b77 -->
<div class="topnav">
  <a class="active" href="?pag=inicio">BCS</a>
  <a href="?pag=perfil">
    <?php 
        echo strtoupper(Sesion::getValor('usuario'));
    ?>
  </a>
  <a href="?pag=configuracion">CONFIGURACIÓN</a>
  <a href="?pag=salir">SALIR</a>
</div>

<!DOCTYPE html>
<?php
        if (isset($_GET['pag'])) {
            $pag = $_GET['pag'];

            if ($pag === "inicio"){
                include 'inicioForm.php';
            }
                
            else if ($pag === "perfil"){
                include 'perfilForm.php';
            }
                
            else if ($pag === "configuracion"){
                include 'configuracionForm.php';
            }
            else if ($pag === "salir"){
                include 'salirForm.php';
            }
            else if ($pag === "pub"){
                include 'publicacionForm.php';
            }
                
            else{//recien logueado
                include 'descpForm.php';
            }      
        }
        else {
            include 'descpForm.php';
        }
    ?>
</body>
</html>