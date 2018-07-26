<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
  header("Location:/sistcomunicados/index.php");
}
?>
<?php
include 'conexion.php';
if (isset($_POST['subirpdf'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../comunicados/" . $nombre;
    $autor= $_SESSION ['usuario'];

      if ($nombre != "") {
        
        if (copy($ruta, $destino)) {
    
            copy($ruta, $destino);
            $titulo= $_POST['titulo'];
            $materia= $_POST['sigla'];
            $fechafinal= $_POST['fecha'];
            $sql = "INSERT INTO documentos(titulo,sigla,fecha,tamanio,tipo,archivo,autor)";
            $sql.="VALUES('$titulo','$materia','$fechafinal','$tamanio','$tipo','$nombre','$autor')";
            
            $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
            echo '<script>alert("Documento Guardado Correctamente")</script> ';
              
    }
}
}
?>
<?php
include 'conexion.php';
if (isset($_POST['subirimagen'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "../comunicados/" . $nombre;
    $autor= $_SESSION ['usuario'];
    
      if ($nombre != "") {
        
        if (copy($ruta, $destino)) {
    
            copy($ruta, $destino);
            $titulo= $_POST['titulo'];
            $materia= $_POST['sigla'];
            $fechafinal= $_POST['fecha'];
            $sql = "INSERT INTO documentos(titulo,sigla,fecha,tamanio,tipo,archivo,autor)";
            $sql.="VALUES('$titulo','$materia','$fechafinal','$tamanio','$tipo','$nombre','$autor')";
            
            $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
            echo '<script>alert("Documento Guardado Correctamente")</script> ';              
    }
}
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
<h1 class="span"></h1>
</div>
</header>
  <?php Include("menu.php");?>
    <div class="container">
      <div class="starter-template">
        <h2 style="color: #036c75;">Subir Archivos</h2>
          <div class="nuevo1">
          <img src="../images/pdf_icon.png" width='200' height='200'></img>
          <?php
          include "subirpdf.php";
            ?>
          </div>
          <div class="nuevo1">
          <img src="../images/imagen_icon.png" width='200' height='200'"></img>
          <?php
          include "subirimagen.php";             
          ?>
      </div>
      </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>