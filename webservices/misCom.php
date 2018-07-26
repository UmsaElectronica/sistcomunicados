<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Registro de Actividades</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
    <link rel="stylesheet" href="../css/tabla.css">
  </head>
<body data-offset="40" background="../images/ingenieriaetn7.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
<div class="container">
    <div class="container">
      <div class="starter-template">
      <h2 style="color: #ff3333;">Examenes</h2>
      <?php
        require("../funciones/conexion.php");
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
                $correo=$_REQUEST['usuario'];
                while ($nombre=mysqli_fetch_array($sql3)) {
                  if($nombre[3]==$correo){
                    $autor=$nombre[1];
                  }
                }
            echo "<table border='1' class='table table-hover'>";
            echo "<thead>";
            echo "<tr class='warning'>";
            echo "<th>N°</th>";
            echo "<th>Materia</th>";
            echo "<th>Sigla</th>";
            echo "<th>Tipo</th>";
            echo "<th>Aula</th>";
            echo "<th>Fecha</th>";
            echo "<th>Hora</th>";
            echo "<th>Imagen</th>";
            echo "<th>Eliminar</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
          ?>
      <?php 
      $examen=0;
         while($arreglo=mysqli_fetch_array($query)){
          if($arreglo['autor']==$autor){
          $examen=$examen+1;
              echo "<tr class='success'>";
              echo "<td style='background:#0066cc; color:#fff;'>$examen</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
              echo "<td><img src='../comunicados/".$arreglo[8]."' width='100' heigth='100'></td>";
              echo "<td><a href='misCom.php?id=$arreglo[0]&idborrar=2&correo=$correo'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
          }
              echo "</tr>";
        }
              echo "</tbody>";
              echo "</table>";
              extract($_GET);
              $a=$_REQUEST['correo'];
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM examenes WHERE idExam=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='misCom.php?usuario=".$a."'</script>";
          }
      ?>
            <h2 style="color: #ff3333;">Clases</h2>
        <?php
            echo "<table border='1' class='table table-hover'>";
            echo "<thead>";
            echo "<tr class='warning'>";
            echo "<th>Id</th>";
            echo "<th>Materia</th>";
            echo "<th>Sigla</th>";
            echo "<th>Tipo</th>";
            echo "<th>Aula</th>";
            echo "<th>Fecha</th>";
            echo "<th>Hora</th>";
            echo "<th>Imagen</th>";
            echo "<th>Eliminar</th>";
            echo "</tr>";
            echo "<tbody>";
                 ?>
      <?php 
          $clase=0;
         while($arreglo1=mysqli_fetch_array($query1)){
          if($arreglo1['autor']==$autor){
              $clase=$clase+1;
              echo "<tr class='success'>";
              echo "<td style='background:#009900; color:#fff;'>$clase</td>";
              echo "<td>$arreglo1[1]</td>";
              echo "<td>$arreglo1[2]</td>";
              echo "<td>$arreglo1[3]</td>";
              echo "<td>$arreglo1[4]</td>";
              echo "<td>$arreglo1[5]</td>";
              echo "<td>$arreglo1[6]</td>";
              echo "<td><img src='../comunicados/".$arreglo1[8]."' width='100' heigth='100'></td>";
              echo "<td><a href='misCom.php?id=$arreglo1[0]&idborrar=2&correo=$correo'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
            }
              echo "</tr>";
        }
              echo "</tbody>";
              echo "</table>";
              extract($_GET);
              $b=$_REQUEST['correo'];
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM clases WHERE idClas=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='misCom.php?usuario=".$b."'</script>";
          }
      ?>
         <h2 style="color: #ff3333;">Varios</h2>
      <?php
            echo "<table border='1' class='table table-hover'>";
            echo "<thead>";
            echo "<tr class='warning'>";
            echo "<th>N°</th>";
            echo "<th>Titulo</th>";
            echo "<th>Detalle</th>";
            echo "<th>Lugar</th>";
            echo "<th>Fecha</th>";
            echo "<th>Hora</th>";
            echo "<th>Imagen</th>";
            echo "<th>Eliminar</th>";        
            echo "</tr>";          
            echo "</thead>";
            echo "<tbody>";
      ?>
      <?php 
      $varios=0;
         while($arreglo2=mysqli_fetch_array($query2)){
        if($arreglo2['autor']==$autor){
          $varios=$varios+1;
              echo "<tr class='success'>";
              echo "<td style='background:#ff9900; color:#fff;'>varios</td>";
              echo "<td>$arreglo2[1]</td>";
              echo "<td>$arreglo2[2]</td>";
              echo "<td>$arreglo2[3]</td>";
              echo "<td>$arreglo2[4]</td>";
              echo "<td>$arreglo2[5]</td>";
              echo "<td><img src='../comunicados/".$arreglo2[8]."' width='100' heigth='100'></td>";
              echo "<td><a href='misCom.php?id=$arreglo2[0]&idborrar=2&correo=$correo'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
          }
            echo "</tr>";
        }
            echo "</tbody>";
            echo "</table>";
            extract($_GET);
            $c=$_REQUEST['correo'];
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM varios WHERE idcategoria=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='misCom.php?usuario=".$c."'</script>";
          }
      ?>
<h2 style="color: #ff3333;">Archivos</h2>
<?php
            echo "<table border='1' class='table table-hover'>";
            echo "<thead>";
            echo "<tr class='warning'>";
            echo "<th>N°</th>";
            echo "<th>Titulo</th>";
            echo "<th>Sigla</th>";
            echo "<th>Fecha Fin de Publicación</td>";
            echo "<th>Tipo</th>";
            echo "<th>Archivo</th>";
            echo "<th>Eliminar</th>";
            echo "</tr>";
            echo "</thead>";
            echo "</tbody>";          
      ?>
      <?php   
          $archivos=0;
         while($arreglo3=mysqli_fetch_array($query4)){
              if($arreglo3['autor']==$autor){
                $archivos=$archivos+1;
              echo "<tr class='success'>";
              echo "<td style='background:#eb039e; color:#fff;'>$archivos</td>";
              echo "<td>$arreglo3[1]</td>";
              echo "<td>$arreglo3[2]</td>";
              echo "<td>$arreglo3[3]</td>";
              echo "<td>$arreglo3[5]</td>";
                  if($arreglo3[5]=="application/pdf"){
                    echo "<td><a href='../comunicados/".$arreglo3[6]."'>$arreglo3[6]</a></td>";
                  }
                  else{
              echo "<td><img src='../comunicados/".$arreglo3[6]."' width='100' heigth='100'></td>";}
              
              echo "<td><a href='misCom.php?id=$arreglo3[0]&idborrar=2&correo=$correo'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
                }
              echo "</tr>";
        }
          echo "</tbody>";
          echo "</table>";
          extract($_GET);
          $d=$_REQUEST['correo'];
          if(@$idborrar==2){
            $sqlborrar="DELETE FROM documentos WHERE idarchivo=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='misCom.php?usuario=".$d."'</script>";
          }
      ?>
      </div>
    </div>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
