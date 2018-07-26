<?php
require("conexion.php");

date_default_timezone_set('America/La_Paz');

$fecha=getdate();
$dia=$fecha["mday"];
$mes=$fecha["mon"];
$año=$fecha["year"];
$fecha_actual=$año."/".$mes."/".$dia;
echo $fecha_actual;

                $sql=("DELETE FROM examenes WHERE fecha<'$fecha_actual'");
                $sql1=("DELETE FROM clases WHERE fecha<'$fecha_actual'");
                $sql2=("DELETE FROM varios WHERE fecha<'$fecha_actual'");
                $sql3=("DELETE FROM documentos WHERE fecha<'$fecha_actual'");
                $query=mysqli_query($con,$sql);
                $query1=mysqli_query($con,$sql1);        
                $query2=mysqli_query($con,$sql2);
                $query3=mysqli_query($con,$sql3);
                
?>

