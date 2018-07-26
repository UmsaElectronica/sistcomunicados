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
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
</head>
<body data-offset="40" background="../images/ingenieriaetn7.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<header class="header">
<div class="row">

</div>
</header>
  <?php Include ("admmenu.php");?>  
      <div class="container">
      <div class="starter-template">
      <h1 style="color: #cc0033;">Eliminar Actividades</h1>
        <a href="listexamenes.php" style="color: #0066cc; font-size: 20pt;">Examenes</a>
        <a href="listclases.php" style="color: #009900; font-size: 20pt;">Clases</a>
        <a href="listvarios.php" style="color: #ff9900; font-size: 20pt;">Varios</a>
        <a href="listarchivos.php" style="color:#EB2fff; font-size: 20pt;">Archivos</a>
      </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
