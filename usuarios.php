<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
  header("Location:/sistcomunicados/index.php");
}
?>
<html>
    <head>
    <meta charset="utf-8">
    <title>Registro de Actividades</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
</head>
<body data-offset="40" background="images/ingenieriaetn7.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<header class="header">
<div class="row">
<h1 class="span"></h1>
</div>
</header>


  <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
           <div class="navbar-collapse">
              <ul class="nav">
                 
              <li><a href="funciones/regExam.php" style="background-color: #0066cc; font-size: 12pt; color:#ffffff;">Plantilla de Examenes</a></li>
              <li><a href="funciones/regClas.php" style="background-color: #009900; font-size: 12pt; color:#ffffff;">Plantilla de Clases</a></li>
              <li><a href="funciones/regVar.php" style="background-color: #ff9900; font-size: 12pt; color:#ffffff;">Plantilla Otras Actividades</a></li>
              <li><a href="funciones/elimAct.php" style="background-color: #ff3333; font-size: 12pt; color:#ffffff;">Eliminar Actividades</a></li>
              <li><a href="funciones/subirarchivos.php" style="background-color:#EB039E;"><img src="images/upload.png" width='20' height='20'></a></li>
              </ul>          
               
              <ul class="nav pull-right">
              <li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
              <li><a href="funciones/desconectar.php"> Cerrar Sesión </a></li>       
              </ul>
            
              <form action="#" class="navbar-search form-inline" style="margin-top:6px"></form>
            </div><!--/.nav-collapse -->
          </div>
        </div>
      </div>
    <div class="container">
    <br>
    <br>
      <div style="background-color: #4a708d;">
        <h2 style="color: #ffffff;">Registro de Actividades</h2>
         <br><br><p style="color:#fff;font-size: 16pt;">Seleccione en el menú la plantilla para la actividad que desee crear.<br><br> Complete los espacios predeterminados y al finalizar presione el botón "Vista Previa".<br><br>Compruebe que la imagen generada tenga los datos correctos y presione "Guardar".<br><br><br><br>Espera la notificacion  de registro correcto.</p>
      </div>
      
    </div>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
