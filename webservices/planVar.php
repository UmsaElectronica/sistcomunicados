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
<?php 
Include("../funciones/conexion.php");
   if (isset($_POST['guardar'])){
      include '../funciones/class.img.php';     
      $font_file1="../funciones/fuentes/CARLISLI.ttf";
      $font_file2="../funciones/fuentes/stocky.ttf";
      $font_file3="../funciones/fuentes/CARLISL.ttf";
      $font_file4="../funciones/fuentes/TIMEI___.ttf";
      $font_file5="../funciones/fuentes/BRSFLSHE.ttf";  
      $font_file6="../funciones/fuentes/Abel-Regular.ttf";
      $font_size_watermark="";
      $font_size="32";
      $path="../funciones/fondos/flip.png";
      $img_obj=new IMG_PROCESS($font_file1,$font_file2,$font_file3,$font_file4,$font_file5,$font_file6,$font_size,$font_size_watermark,$path);

     $titulo=$_POST['titulo'];
     $asunto = $_POST['asunto'];
     $fecha = $_POST['fecha'];
     $hora = $_POST['hora'];
     $lugar=$_POST['lugar'];
     $remitente=$_POST['remitente'];
     $correo= $_REQUEST ['usuario'];
        require ("../funciones/conexion.php");
        $sql=("SELECT * FROM login");
        $query=mysqli_query($con,$sql);
        while ($arreglo=mysqli_fetch_array($query)) {
          if ($arreglo['3']==$correo) {
                $autor=$arreglo['1'];
          }
        }    
      $asuntoimp=wordwrap($asunto,37,"\n",true);
      $num=strlen($asunto);
      $size_arr=array("width"=>"500","height"=>"500");
      $savepath="../funciones/my_image_test.png";
      $rgb=array("0","0","0");
      $img_obj->generate_imgv($titulo,$asuntoimp,"","Hora: ".$hora,"Lugar: ".$lugar,$autor,$savepath,$size_arr,$rgb); 
      
   
    $nombre=mktime().".png";
    $origen = "../funciones/my_image_test.png";
    $destino = '../comunicados/';
     copy($origen, $destino.$nombre);
    $sql = "INSERT INTO varios(titulo,sigla,cuerpo,lugar,fecha,hora,imagen,remitente,autor)";
    $sql.="VALUES('$titulo','$sigla','$asunto','$lugar','$fecha','$hora','$nombre','$remitente','$autor')";
    $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
    echo '<script>alert("Actividad Registrada correctamente")</script> ';
    echo "<script>location.href='planVar.php'</script>";
     }
    mysqli_close($con);
?>
<?php   	 
include '../funciones/class.img.php';
if(isset($_POST['varios'])){
$font_file1="../funciones/fuentes/CARLISLI.ttf";
$font_file2="../funciones/fuentes/stocky.ttf";
$font_file3="../funciones/fuentes/CARLISL.ttf";
$font_file4="../funciones/fuentes/TIMEI___.ttf";
$font_file5="../funciones/fuentes/BRSFLSHE.ttf";  
$font_file6="../funciones/fuentes/Abel-Regular.ttf";
$font_size_watermark="";
$font_size="32";
$path="../funciones/fondos/flip.png";
$img_obj=new IMG_PROCESS($font_file1,$font_file2,$font_file3,$font_file4,$font_file5,$font_file6,$font_size,$font_size_watermark,$path);
     $titulo=$_POST['titulo'];
     $asunto = $_POST['asunto'];
     $fecha = $_POST['fecha'];
     $hora = $_POST['hora'];
     $lugar=$_POST['lugar'];
     $correo= $_REQUEST ['usuario'];
        require ("../funciones/conexion.php");
        $sql=("SELECT * FROM login");
        $query=mysqli_query($con,$sql);
        while ($arreglo=mysqli_fetch_array($query)) {
          if ($arreglo['3']==$correo) {
                $autor=$arreglo['1'];
          }
        }
     $asuntoimp=wordwrap($asunto,37,"\n",true);
     $num=strlen($asunto);
  $size_arr=array("width"=>"500","height"=>"500");
  $savepath="../funciones/my_image_test.png";
  $rgb=array("0","0","0");
  $img_obj->generate_imgv($titulo,$asuntoimp,"","Hora: ".$hora,"Lugar: ".$lugar,$autor,$savepath,$size_arr,$rgb); 
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
<h3 style="color: #FFcc00">Complete los Espacios</h3>
	<form action="" method="POST" name="varios" id="varios">
  <div class="nuevo1">
		<label style="font-size: 16pt; color: #ffff00">Titulo:</label><input class="span2" type="text" name="titulo" required="on" value="<?php if (isset($_POST['titulo']))echo $_POST['titulo']?>" style="background-color:#ffffcc" placeholder="Titulo de Comunicado">
		<label style="font-size: 16pt; color: #00ff00;">Sigla:</label>
    <?php 
      require ("../funciones/conexion.php");
      $materia="SELECT * FROM materias ORDER BY id ASC";
      $qery=mysqli_query($con,$materia);
    ?>
    <select class="span2" required="on" name="sigla" style="background-color: #ffffcc" value="<?=$_POST['sigla'] ?>">
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
    <label style="font-size: 16pt; color: #ffff00" id="cuerpo">Asunto:</label>
	<tr>
	<td><textarea class="span2" name="asunto" required="on" cols="50" rows="4" onKeyDown="valida_longitud()" onKeyUp="valida_longitud()" id="asunto" style="background-color:#fFffcc; width:320px;" placeholder="Máximo 250 caracteres"><?php if (isset($_POST['asunto']))echo $_POST['asunto']?></textarea></td>
	</tr>
	<tr>
		<label style="font-size: 16pt; color: #ffff00">Fecha Fin de Publicación:</label>
		<input class="span2" type="date" name="fecha" required="on" value="<?php if (isset($_POST['fecha']))echo $_POST['fecha']?>" step="1" style="background-color:#fFffcc" placeholder="Ej. 2017-08-21">
    <label style="font-size: 16pt; color: #ffff00">Hora:</label>
    <input class="span2" type="time" name="hora" value="<?php if (isset($_POST['hora']))echo $_POST['hora']?>"  max="20:00" min="07:30" step="1" style="background-color:#ffffcc" placeholder="Ej. 10:30">
    <label style="font-size: 16pt; color: #ffff00">Lugar:</label><input class="span2" type="text" name="lugar" required="on" value="<?php if (isset($_POST['lugar']))echo $_POST['lugar']?>" style="background-color:#ffffcc">
		<input type="Submit" name="varios" class="btn btn-warning" value="Vista Previa" style="font-size: 15pt; background-color:#ff7a33; color:#ffffff;"><br><br>
    </tr>
    </div>
<div class="nuevo1">
<?php
if(isset($_POST['varios'])){
 ?>
  <br><img src="../funciones/my_image_test.png" style="height: 350px;"><br>
  <?php
}
?>
<input style=" font-size: 15pt; background-color: #ff7a33; color:#ffffff;" type="Submit" value="Guardar" class="btn btn-warning" name="guardar" id="guardar">
</div>
</form>
</body>
</html>