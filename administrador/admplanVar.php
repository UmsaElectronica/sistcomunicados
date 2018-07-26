<?php 
Include("admconexion.php");
   if (isset($_POST['guardar'])){
     include("admguardarvar.php");
     }
    mysqli_close($con);
?>
<?php
include 'class.img.php';
if(isset($_POST['varios'])){
$font_file1="fuentes/CARLISLI.ttf";
    $font_file2="fuentes/stocky.ttf";
    $font_file3="fuentes/CARLISL.ttf";
    $font_file4="fuentes/TIMEI___.ttf";
    $font_file5="fuentes/BRSFLSHE.ttf";
    $font_file6="fuentes/Abel-Regular.ttf";
    $font_size="32";
    $font_size_watermark="";
$path="fondos/flip.png";
$img_obj=new IMG_PROCESS($font_file1,$font_file2,$font_file3,$font_file4,$font_file5,$font_file6,$font_size,$font_size_watermark,$path);
     $titulo=$_POST['titulo'];
     $asunto = $_POST['asunto'];
     $fecha = $_POST['fecha'];
     $hora = $_POST['hora'];
     $lugar=$_POST['lugar'];
     $remitente=$_POST['remitente'];
     $autor= $_SESSION ['usuario'];
     $asuntoimp=wordwrap($asunto,37,"\n",true);
     $num=strlen($asunto);
  $size_arr=array("width"=>"500","height"=>"500");
  $savepath="my_image_test.png";
  $rgb=array("0","0","0");
  $img_obj->generate_imgv($titulo,$asuntoimp,"","Hora: ".$hora,"Lugar: ".$lugar,$remitente,$savepath,$size_arr,$rgb); 
   
  }
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8">
    <script> 
contenido_textarea = "" 
num_caracteres_permitidos = 250 

function valida_longitud(){ 
   num_caracteres = document.forms[0].asunto.value.length 

   if (num_caracteres > num_caracteres_permitidos){ 
      document.forms[0].asunto.value = contenido_textarea 
   }else{ 
      contenido_textarea = document.forms[0].asunto.value 
   } 

   if (num_caracteres >= num_caracteres_permitidos){ 
      document.forms[0].caracteres.style.color="#ff0000"; 
   }else{ 
      document.forms[0].caracteres.style.color="#000000"; 
   } 

   cuenta() 
} 
function cuenta(){ 
   document.forms[0].caracteres.value=document.forms[0].asunto.value.length 
} 
</script>
</head>
  </form>
  <h3 style="color: #FFcc00">Complete los Espacios</h3>
  <form action="" method="POST" name="varios" id="varios">
  <div class="nuevo1">
    <label style="font-size: 16pt; color: #ffff00">Titulo:</label><input class="span2" type="text" name="titulo" required="on" value="<?php if (isset($_POST['titulo']))echo $_POST['titulo']?>" style="background-color:#ffffcc" placeholder="Título de Comunicado"><br>

     <label style="font-size: 16pt; color: #0033cc;">Sigla:</label>
   
    <?php 
      require ("conexion.php");
      $materia="SELECT * FROM materias ORDER BY id ASC";
      $qery=mysqli_query($con,$materia);
    ?>
    <select class="span2" required="on" name="sigla" style="background-color: #ccffff" value="<?=$_POST['sigla'] ?>">
    <option value="<?php if (isset($_POST['sigla']))echo $_POST['sigla']?>"><?php if (isset($_POST['sigla']))echo $_POST['sigla']?></option>
    <?php
     while($areglo=mysqli_fetch_array($qery))
    {
      ?>
    <option value="<?php echo $areglo['sigla'];?>">
    <?php echo $areglo['sigla']; ?>
    </option>
    <?php  } ?>
    </select>
    

    <label style="font-size: 16pt; color: #ffff00" id="cuerpo">Asunto:</label><p>
  <tr>
  <td rowspan="3"><textarea class="span2" name="asunto" required="on" cols="50" rows="4" onKeyDown="valida_longitud()" onKeyUp="valida_longitud()" id="asunto" style="background-color:#fFffcc" placeholder="Máximo 250 caracteres"><?php if (isset($_POST['asunto']))echo $_POST['asunto']?></textarea></td>
  </tr>
  <tr>
    <label style="font-size: 16pt; color: #ffff00">Fecha Fin de Publicación:</label>
    <input class="span2" type="date" name="fecha" required="on" value="<?php if (isset($_POST['fecha']))echo $_POST['fecha']?>" step="1" style="background-color:#fFffcc" placeholder="Ej. 2017-08-21">
    <label style="font-size: 16pt; color: #ffff00">Hora:</label>
    <input class="span2" type="time" name="hora" value="<?php if (isset($_POST['hora']))echo $_POST['hora']?>"  max="20:00" min="07:30" step="1" style="background-color:#ffffcc" placeholder="Ej. 10:30">
    <label style="font-size: 16pt; color: #ffff00">Lugar:</label><input class="span2" type="text" name="lugar"  value="<?php if (isset($_POST['lugar']))echo $_POST['lugar']?>" style="background-color:#ffffcc"><br>
    <label style="font-size: 16pt; color: #ffff00">Remitente:</label><input class="span2" type="text" name="remitente" required="on" value="<?php if (isset($_POST['remitente']))echo $_POST['remitente']?>" style="background-color:#ffffcc"><br>    
  
<input type="Submit" name="varios" class="btn btn-warning" value="Vista Previa" style="font-size: 15pt; background-color:#ff7a33; color:#ffffff;">
</div>
<div class="nuevo1">
<?php
if(isset($_POST['varios'])){
  ?>
  <br><img src="my_image_test.png">
  <?php

  }
  ?>
<input style=" font-size: 15pt; background-color: #ff7a33; color:#ffffff;" type="Submit" value="Guardar" class="btn btn-warning" name="guardar" id="guardar">
</div>
</form>
</body>
</html>

