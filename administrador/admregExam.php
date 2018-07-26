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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Actividades</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
  </head>
<body data-offset="40" background="../images/ingenieriaetn7.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<header class="header">
<div class="row">
<h1 class="span"></h1>
</div>
</header>  
    <?php Include("admmenu.php");?>
    <div class="container">   
      <div class="starter-template">
        <h1 style="color: #000099;">Plantilla de Examenes</h1>
        <p class="lead">
          <?php Include("admplanExam.php"); ?>
        </p>
      </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
