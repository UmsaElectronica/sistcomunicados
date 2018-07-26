<?php
include "../funciones/conexion.php";
    $file_path = "../comunicados/";
    $titulo= $_REQUEST['titulo'];
    $materia= $_REQUEST['sigla'];
    $fechafinal= $_REQUEST['fecha'];
    $correo= $_REQUEST ['usuario'];
        require ("../funciones/conexion.php");
        $sql=("SELECT * FROM login");
        $query=mysqli_query($con,$sql);
        while ($arreglo=mysqli_fetch_array($query)) {
          if ($arreglo['3']==$correo) {
                $autor=$arreglo['1'];
          }
        }
        
    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    $archivo=$_FILES['uploaded_file']['name'];
    $proceso=$_FILES['uploaded_file']['tmp_name'];
    $mtipo=exif_imagetype($proceso);
    switch ($mtipo) {
        case '1':
            $tipo="image/gif";
            break;
        case '2':
            $tipo="image/jpeg";
            break;
        case '3':
            $tipo="image/png";
            break;
        default:
            $tipo="application/pdf";
    }

    $tamanio=$_FILES['uploaded_file']['size'];

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path) ){
        $sql = "INSERT INTO documentos(titulo,sigla,fecha,tamanio,tipo,archivo,autor,semestre)";
        $sql.="VALUES('$titulo','$materia','$fechafinal','$tamanio','$tipo','$archivo','$autor','$semestre')";
        $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
        echo "success";
    } else{
        echo "fail";
    }
 ?>