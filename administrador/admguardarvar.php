<?php
     Include 'class.img.php';
    $font_file1="fuentes/CARLISLI.ttf";
    $font_file2="fuentes/stocky.ttf";
    $font_file3="fuentes/CARLISL.ttf";
    $font_file4="fuentes/TIMEI___.ttf";
    $font_file5="fuentes/BRSFLSHE.ttf";
    $font_file6="fuentes/Abel-Regular.ttf";
    $font_size="32";
    $path="fondos/flip.png";
    $img_obj=new IMG_PROCESS($font_file1,$font_file2,$font_file3,$font_file4,$font_file5,$font_file6,$font_size,$font_size_watermark,$path);

     $titulo=$_POST['titulo'];
     $asunto = $_POST['asunto'];
     $fecha = $_POST['fecha'];
     $hora = $_POST['hora'];
     $lugar=$_POST['lugar'];
     $remitente=$_POST['remitente'];
     $autor= $_SESSION ['usuario'];

          require ("conexion.php");
      
        $sql=("SELECT * FROM materias");
        $query=mysqli_query($con,$sql);
        while ($arreglo=mysqli_fetch_array($query)) {
          if ($arreglo['sigla']==$sigla) {
                $materia=$arreglo['asignatura'];
                $semestre=$arreglo['semestre']
          }
        }
     $asuntoimp=wordwrap($asunto,37,"\n",true);
     $num=strlen($asunto);
     $size_arr=array("width"=>"500","height"=>"500");
     $savepath="my_image_test.png";
     $rgb=array("0","0","0");
     $img_obj->generate_imgv($titulo,$asuntoimp,"","Hora: ".$hora,"Lugar: ".$lugar,$autor,$savepath,$size_arr,$rgb); 
     imagedestroy($img_obj);    
   

     $nombre=mktime().".png";
    $origen = "my_image_test.png";
 
    $destino = '../comunicados/';

     copy($origen, $destino.$nombre);

    $sql = "INSERT INTO varios(titulo,sigla,cuerpo,lugar,fecha,hora,imagen,remitente,autor,semestre)";
    $sql.="VALUES('$titulo','$sigla'$asunto','$lugar','$fecha','$hora','$nombre','$remitente','$autor','$semestre')";
    $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
    echo '<script>alert("Actividad Registrada correctamente")</script> ';
    
    
?>