<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
  header("Location:/sistcomunicados/index.php");
}
Include("admconexion.php");
   if (isset($_POST['guardar'])){
      $tema=$_POST['tema'];
      $sentencia="update fondos set fondo='$tema' ";
      $resent=mysqli_query($con,$sentencia);
  if ($resent==null) {
    echo "Error de procesamieno no se han actuaizado los datos";
    echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
    header("location: admin.php");
    echo "<script>location.href='admin.php'</script>";
  }else {
    echo '<script>alert("TEMA REGISTRADO")</script> ';
    echo "<script>location.href='admin.php'</script>";    
  }
     }
    mysqli_close($con);
    ?>
    <?php
if (isset($_POST['subir'])) {
    $nombre = "nuevo.jpg";
    $tipo = $_FILES['imagen']['type'];
    $tamanio = $_FILES['imagen']['size'];
    $ruta = $_FILES['imagen']['tmp_name'];
    $destino = "../fondodepantalla/imagenes/" . $nombre;
     
        if (copy($ruta, $destino)) {
    
            copy($ruta, $destino);
            echo '<script>alert("Imagen Guardada Correctamente")</script> ';
              
    }
}

?> 
<html>
  <head>
    <meta charset="utf-8">
    <title>Comunicados Ingeniería Electrónica</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">      
  </head>
<body data-offset="40" background="../images/ingenieriaetn7.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<header class="header">
<div class="row">
<h1 class="span" style="color:#000000;">Página de Administrador</h1>
</div>
</header>
<div class="navbar">
  <div class="navbar-inner">
      <ul class="nav">
            <li class="" ><a href="admin.php">Administrador de Usuarios</a></li>
            <li class=""><a href="../admusuarios.php">Registro de Comunicados</a></li>
            <li class=""><a href="aulas.php">Actualizar Aulas</a></li>
            <li class=""><a href="fondo.php">Temas de Fondo</a></li>
            <li class=""><a href="subirvideo.php">Videos</a></li>
        </ul>
        <ul class="nav pull-right">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
        <li><a href="desconectar.php"> Cerrar Sesión </a></li>             
        </ul>
  </div>
</div>
    <div class="container">
    <br>
    <br>
     <?php 
        $sql="SELECT * FROM fondos";
        $ressql=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
          $id=$row[0];
          $tema=$row[1];
          }
     ?>
    <form action="" method="post" enctype="multipart/form-data"><h2>Elegir Tema</h2><br>
      <div class="nuevo">
      <input type="radio" name="tema" value="electronica"/>
      <img class="temas" src="../fondodepantalla/imagenes/electronica.png" width="200" height="200"/>
      </div>
      <div class="nuevo">
      <input type="radio" name="tema" value="invierno"/>
      <img class="temas" src="../fondodepantalla/imagenes/invierno.png" width="200" height="200"/>
      </div>
      <div class="nuevo"><input type="radio" name="tema" value="primavera">
      <img class="temas" src="../fondodepantalla/imagenes/primavera.png" width="200" height="200"></input>
      </div>
      <div class="nuevo"><input type="radio" name="tema" value="telecomunicacion">
      <img class="temas" src="../fondodepantalla/imagenes/telecomunicaciones.png" width="200" height="200"></input>
      </div>
      <div class="nuevo"><input type="radio" name="tema" value="redes">
      <img class="temas" src="../fondodepantalla/imagenes/redes.png" width="200" height="200"></input>
      </div>
      <div class="nuevo"><input type="radio" name="tema" value="web">
      <img class="temas" src="../fondodepantalla/imagenes/Web1.png" width="200" height="200"></input>
      </div>
      <div class="nuevo"><input type="radio" name="tema" value="nuevo">Subir Imagen de Fondo</input>
      <input type="file" name="imagen"></input>
      <input class="btn btn-success" type="submit" value="SUBIR" name="subir"></input>
      </div>
      <input type="submit" value="Guardar" id="guardar" name="guardar" class="btn btn-success btn-primary"></input>
    </form>
    </div>
</html>