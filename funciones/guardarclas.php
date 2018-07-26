<?php
    include 'class.img.php';
    $font_file1="fuentes/CARLISLI.ttf";
    $font_file2="fuentes/stocky.ttf";
    $font_file3="fuentes/CARLISL.ttf";
    $font_file4="fuentes/TIMEI___.ttf";
    $font_file5="fuentes/BRSFLSHE.ttf";
    $font_file6="fuentes/Abel-Regular.ttf";
    $font_size="32";
    $path="fondos/verde.png";
        $img_obj=new IMG_PROCESS($font_file1,$font_file2,$font_file3,$font_file4,$font_file5,$font_file6,$font_size,$font_size_watermark,$path);

     $materia=$_POST['materia'];
     $sigla = $_POST['sigla'];
     $tipo = $_POST['tipclas'];
     $aula = $_POST['aula'];
     $fecha = $_POST['fecha'];
     $hora = $_POST['hora'];
     $autor= $_SESSION ['usuario'];
    $size_arr=array("width"=>"500","height"=>"500");
    $savepath="my_image_test.png";
    $rgb=array("0","0","0");
    $img_obj->generate_img($materia,$sigla,$tipo,"Aula: ".$aula,"Fecha: ".$fecha,"Hora: ".$hora,$autor,$savepath,$size_arr,$sigla,$rgb);
    imagedestroy($img_obj);
    
    $nombre=mktime().".png";
    $origen = "my_image_test.png";
 
    $destino = '../comunicados/';

    copy($origen, $destino.$nombre);

    $sql = "INSERT INTO clases(materia,sigla,tipo,aula,fecha,hora,autor,imagen)";
    $sql.="VALUES('$materia','$sigla','$tipo','$aula','$fecha','$hora','$autor','$nombre')";
    $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
  	echo '<script>alert("Actividad Registrada correctamente")</script> ';
    echo "<script>location.href='regClas.php'</script>";
?>