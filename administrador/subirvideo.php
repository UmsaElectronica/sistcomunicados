<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
    header("Location:/sistcomunicados/index.php");
}elseif ($_SESSION['categoria']=='usuario') {
    header("Location:/sistcomunicados/usuarios.php");
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
            <li><a href="admin.php">Administrador de Usuarios</a></li>
            <li><a href="../admusuarios.php">Registro de Comunicados</a></li>
            <li><a href="aulas.php">Actualizar Aulas</a></li>
            <li><a href="fondo.php">Temas de Fondo</a></li>
            <li><a href="subirvideo.php">Videos</a></li>
        </ul>
        <ul class="nav pull-right">
        <li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
              <li><a href="desconectar.php"> Cerrar Sesión </a></li>             
        </ul>
  </div>
</div>
<div class="container">
      <div class="starter-template">      
      <h1 style="color: #000000;">Lista de Videos</h1>
      <form action="subirvideo.php" method="POST"  enctype="multipart/form-data">
    <h3 style="color: #000000;">Subir Video</h3>
    <input type="file" name="video" style="background-color: #ccffff;"><br>
    <input type="Submit" class="btn btn-primary" style="background-color: #ccffff;" value="Subir" name="subirvideo">
    </form>
      <form action="" method="POST" name="actuvideo" id="actuvideo"> 
    <input type="Submit" class="btn btn-success" href="subirvideo.php" value="Actualizar"></input>
    </form>
      <?php
        require("admconexion.php");
                $sql=("SELECT * FROM videos ORDER BY idvideo ASC");
                $query=mysqli_query($con,$sql);  
                    echo "<table border='1'; class='table table-hover';>";
                    echo "<tr class='warning'>";
                    echo "<td>Id</td>";
                    echo "<td>Archivo</td>";
                    echo "<td>Autor</td>";
                    echo "<td>Estado</td>";
                    echo "<td>Eliminar</td>";
                    echo "</tr>";
      ?>
      <?php 

         while($arreglo=mysqli_fetch_array($query)){
              echo "<tr class='success'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td><a href='subirvideo.php?id=$arreglo[0]&idborrar=2'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
              echo "</tr>";
              }
              echo "</table>";
              extract($_GET);
              if(@$idborrar==2){
                 $sqlborrar="DELETE FROM videos WHERE idvideo=$id";
                 $resborrar=mysqli_query($con,$sqlborrar);
                 echo '<script>alert("VIDEO ELIMINADO")</script> ';
                 echo "<script>location.href='subirvideo.php'</script>";
              }
      ?>
      </div>
    </div>
      <?php 
          Include("admconexion.php");
          if (isset($_POST['subirvideo'])){
          $autor= $_SESSION ['usuario'];
          $video = $_FILES['video']['name'];
          $ruta = $_FILES['video']['tmp_name'];
          $tipo = $_FILES['video']['type'];
          $destino = "../comunicados/" . $video;
          
          if (($_FILES['video']['type'])=="video/mp4") {
            move_uploaded_file($ruta, $destino);
          $sql1 = "INSERT INTO videos(nombre,autor,estado)";
          $sql1.="VALUES('$video','$autor','1')";
          $res= mysqli_query($con,$sql1) or die(mysqli_connect_error());
          echo '<script>alert("Video Guardado Correctamente")</script> ';
          }
           else {
            echo '<script>alert("Seleccione un formato de Video compatible con el navegador (.mp4)")</script>';}
        }
          mysqli_close($con);
      ?>
    
</html>