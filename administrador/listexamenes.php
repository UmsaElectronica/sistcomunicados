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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
    
  </head>
<body data-offset="40" background="../images/ingenieriaetn7.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<header class="header">
<div class="row">
<h1 class="span"></h1>
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
        <?php
        require("admconexion.php");
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
        ?>        
     <h2 style="color: #ff3333;">Examenes</h2>
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
           echo "<td>Autor</td>";
           echo "<td>Imagen</td>";
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
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
              echo "<td>$arreglo[7]</td>";
              echo "<td><img src='../comunicados/".$arreglo[8]."' width='100' heigth='100'></td>";
              echo "<td><a href='listexamenes.php?id=$arreglo[0]&idborrar=2'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
              echo "</tr>";
        }
              echo "</table>";
              extract($_GET);
            if(@$idborrar==2){
            $sqlborrar="DELETE FROM examenes WHERE idExam=$id";
            $resborrar=mysqli_query($con,$sqlborrar);
            echo '<script>alert("ACTIVIDAD ELIMINADA")</script> ';
            echo "<script>location.href='admelimAct.php'</script>";
          }
       ?>
      </div>   
    </div>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
