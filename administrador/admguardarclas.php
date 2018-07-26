<?php

    $materia=$_POST['materia'];
     $sigla = $_POST['sigla'];
     $tipo = $_POST['tipclas'];
     $aula = $_POST['aula'];
     $fecha = $_POST['fecha'];
     $hora = $_POST['hora'];
     $autor= $_POST ['autor'];

     $nombre=mktime().".png";
    $origen = "my_image_test.png";
 
    $destino = '../comunicados/';

     copy($origen, $destino.$nombre);

    $sql = "INSERT INTO clases(materia,sigla,tipo,aula,fecha,hora,autor,imagen)";
    $sql.="VALUES('$materia','$sigla','$tipo','$aula','$fecha','$hora','$autor','$nombre')";
    $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
  	echo '<script>alert("Actividad Registrada correctamente")</script> ';
?>