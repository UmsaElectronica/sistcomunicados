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
<h1 class="span"></h1>
</div>
</header>
  <?php Include("menu.php");?>
    <div class="container">
      <div class="starter-template">
      <h1 style="color: #cc0033">Eliminar Actividades</h1>
      <h2 style="color: #ff3333;">Examenes</h2>
      <?php
        require("conexion.php");
                $sql=("SELECT * FROM examenes");
                $sql1=("SELECT * FROM clases");
                $sql2=("SELECT * FROM varios");
                $sql4=("SELECT * FROM documentos");
                $sql3=mysqli_query($con,"SELECT * FROM login");
                $query=mysqli_query($con,$sql);
                $query1=mysqli_query($con,$sql1);        
                $query2=mysqli_query($con,$sql2);
                $query3=mysqli_fetch_array($sql3);
                $query4=mysqli_query($con,$sql4);
            echo "<table border='1'; class='table table-hover';>";
            echo "<tr class='warning'>";
            echo "<td>Id</td>";
            echo "<td>Materia</td>";
            echo "<td>Sigla</td>";
            echo "<td>Tipo</td>";
            echo "<td>Aula</td>";
            echo "<td>Fecha</td>";
            echo "<td>Hora</td>";
            echo "<td>Imagen</td>";
            echo "<td>Eliminar</td>";
            echo "</tr>";
          ?>
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
          
          if($arreglo['autor']==$_SESSION['usuario']){
              echo "<tr class='success'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
              echo "<td><img src='../comunicados/".$arreglo[8]."' width='100' heigth='100'></td>";
              echo "<td><a href='elimAct.php?id=$arreglo[0]&idborrar=2'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
          }
              echo "</tr>";
        }
              echo "</table>";
              extract($_GET);
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM examenes WHERE idExam=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='elimAct.php'</script>";
          }
      ?>
            <h2 style="color: #ff3333;">Clases</h2>
        <?php
            echo "<table border='1'; class='table table-hover';>";
            echo "<tr class='warning'>";
            echo "<td>Id</td>";
            echo "<td>Materia</td>";
            echo "<td>Sigla</td>";
            echo "<td>Tipo</td>";
            echo "<td>Aula</td>";
            echo "<td>Fecha</td>";
            echo "<td>Hora</td>";
            echo "<td>Imagen</td>";
            echo "<td>Eliminar</td>";
            echo "</tr>";
                 ?>
      <?php 
      
         while($arreglo1=mysqli_fetch_array($query1)){
            if($arreglo1['autor']==$_SESSION['usuario']){
              echo "<tr class='success'>";
              echo "<td>$arreglo1[0]</td>";
              echo "<td>$arreglo1[1]</td>";
              echo "<td>$arreglo1[2]</td>";
              echo "<td>$arreglo1[3]</td>";
              echo "<td>$arreglo1[4]</td>";
              echo "<td>$arreglo1[5]</td>";
              echo "<td>$arreglo1[6]</td>";
              echo "<td><img src='../comunicados/".$arreglo1[8]."' width='100' heigth='100'></td>";
              echo "<td><a href='elimAct.php?id=$arreglo1[0]&idborrar=2'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
            }
              echo "</tr>";
        }
              echo "</table>";
              extract($_GET);
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM clases WHERE idClas=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='elimAct.php'</script>";
          }
      ?>
         <h2 style="color: #ff3333;">Varios</h2>
      <?php
            echo "<table border='1'; class='table table-hover';>";
            echo "<tr class='warning'>";
            echo "<td>Id</td>";
            echo "<td>Titulo</td>";
            echo "<td>Detalle</td>";
            echo "<td>Lugar</td>";
            echo "<td>Fecha</td>";
            echo "<td>Hora</td>";
            echo "<td>Imagen</td>";
            echo "<td>Eliminar</td>";        
            echo "</tr>";          
      ?>
      <?php 
         while($arreglo2=mysqli_fetch_array($query2)){
        if($arreglo2['autor']==$_SESSION['usuario']){
              echo "<tr class='success'>";
              echo "<td>$arreglo2[0]</td>";
              echo "<td>$arreglo2[1]</td>";
              echo "<td>$arreglo2[2]</td>";
              echo "<td>$arreglo2[3]</td>";
              echo "<td>$arreglo2[4]</td>";
              echo "<td>$arreglo2[5]</td>";
              echo "<td><img src='../comunicados/".$arreglo2[8]."' width='100' heigth='100'></td>";
              echo "<td><a href='elimAct.php?id=$arreglo2[0]&idborrar=2'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
          }
            echo "</tr>";
        }
            echo "</table>";
            extract($_GET);
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM varios WHERE idcategoria=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='elimAct.php'</script>";
          }
      ?>
<h2 style="color: #ff3333;">Archivos</h2>
<?php
            echo "<table border='1'; class='table table-hover';>";
            echo "<tr class='warning'>";
            echo "<td>Id</td>";
            echo "<td>Titulo</td>";
            echo "<td>Sigla</td>";
            echo "<td>Fecha Fin de Publicación</td>";
            echo "<td>Tipo</td>";
            echo "<td>Archivo</td>";
            echo "<td>Eliminar</td>";
            echo "</tr>";          
      ?>
      <?php   
         while($arreglo3=mysqli_fetch_array($query4)){
              if($arreglo3['autor']==$_SESSION['usuario']){
              echo "<tr class='success'>";
              echo "<td>$arreglo3[0]</td>";
              echo "<td>$arreglo3[1]</td>";
              echo "<td>$arreglo3[2]</td>";
              echo "<td>$arreglo3[3]</td>";
              echo "<td>$arreglo3[5]</td>";
                  if($arreglo3[5]=="application/pdf"){
                    echo "<td><a href='../comunicados/".$arreglo3[6]."'>$arreglo3[6]</a></td>";
                  }
                  else{
              echo "<td><img src='../comunicados/".$arreglo3[6]."' width='100' heigth='100'></td>";}
              
              echo "<td><a href='elimAct.php?id=$arreglo3[0]&idborrar=2'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
                }
              echo "</tr>";
        }
          echo "</table>";
          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM documentos WHERE idarchivo=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='elimAct.php'</script>";
          }
      ?>
    </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
