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
    <div class="container">
      <div class="nav-collapse">
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
  </div>
</div>
</head>
    <div class="container">
      <div class="starter-template">
      <h1 style="color: #000000;">Lista de Aulas</h1>
      <form action="aulas.php" method="POST" name="aulas" id="aulas">
        <h3 style="color: #000000;">Introducir Aulas</h3>
        <input type="text" name="aula" style="width: 200px; background-color: #ccffff;"><br>
        <input type="Submit" class="btn btn-primary" style="background-color: #ccffff;" value="Registrar" name="aulas" id="aulas">
        </form>
      <form action="" method="POST" name="actuaulas" id="actuaulas"> 
    <input type="Submit" class="btn btn-success" href="aulas.php" value="Actualizar"></input>
    </form>
      <?php
        require("admconexion.php");
                $sql=("SELECT * FROM aulas");
                $query=mysqli_query($con,$sql);       
                  echo "<table border='1'; class='table table-hover';>";
                  echo "<tr class='warning'>";
                  echo "<td>Id</td>";
                  echo "<td>Aula</td>";
                  echo "<td>Eliminar</td>";    
                  echo "</tr>";
      ?>
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
              echo "<tr class='success'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td><a href='aulas.php?id=$arreglo[0]&idborrar=2'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
              echo "</tr>";
        }
              echo "</table>";
          extract($_GET);
          if(@$idborrar==2){ 
            $sqlborrar="DELETE FROM aulas WHERE idaula=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("AULA ELIMINADA")</script> ';
            echo "<script>location.href='aulas.php'</script>";
          }
      ?>
        </div>
        </div>
      <?php 
          Include("admconexion.php");
          if (isset($_POST['aula'])){
          $aula = $_POST["aula"];
          $sql1 = "INSERT INTO aulas(aula)";
          $sql1.="VALUES('$aula')";
          $res= mysqli_query($con,$sql1) or die(mysqli_connect_error());
          echo '<script>alert("Aula Registrada correctamente")</script> ';
          }
          mysqli_close($con);
      ?>
        
  </body>
</html>
      