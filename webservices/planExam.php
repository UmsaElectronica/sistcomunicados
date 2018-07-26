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
          $path="../funciones/fondos/azul.png";
          $img_obj=new IMG_PROCESS($font_file1,$font_file2,$font_file3,$font_file4,$font_file5,$font_file6,$font_size,$font_size_watermark,$path);

        $materia=$_POST['materia'];
        $sigla = $_POST['sigla'];
        $tipo = $_POST['tipexam'];
        $aula = $_POST['aula'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $correo= $_REQUEST ['usuario'];
 
        $sql=("SELECT * FROM login");
        $query=mysqli_query($con,$sql);
        while ($arreglo=mysqli_fetch_array($query)) {
          if ($arreglo['3']==$correo) {
                $autor=$arreglo['1'];
          }
        }
        $size_arr=array("width"=>"500","height"=>"500");
        $savepath="../funciones/my_image_test.png";
        $rgb=array("0","0","0");
        $img_obj->generate_img($materia,$sigla,$tipo,"Aula: ".$aula,"Fecha: ".$fecha,"Hora: ".$hora,$autor,$savepath,$size_arr,$sigla,$rgb);
  
    
      $nombre=mktime().".png";
      $origen = "../funciones/my_image_test.png";
      $destino = '../comunicados/';
      copy($origen, $destino.$nombre);
      $sql = "INSERT INTO examenes(materia,sigla,tipo,aula,fecha,hora,autor,imagen,semestre)";
      $sql.="VALUES('$materia','$sigla','$tipo','$aula','$fecha','$hora','$autor','$nombre','$semestre')";
      $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
      echo '<script>alert("Actividad Registrada correctamente")</script>';
      echo "<script>location.href='planExam.php'</script>";
      }
      mysqli_close($con);
?>
<?php
include '../funciones/class.img.php';
if(isset($_POST['examenes'])){
$font_file1="../funciones/fuentes/CARLISLI.ttf";
$font_file2="../funciones/fuentes/stocky.ttf";
$font_file3="../funciones/fuentes/CARLISL.ttf";
$font_file4="../funciones/fuentes/TIMEI___.ttf";
$font_file5="../funciones/fuentes/BRSFLSHE.ttf";
$font_file6="../funciones/fuentes/Abel-Regular.ttf";
$font_size_watermark="";
$font_size="32";
$path="../funciones/fondos/azul.png";
$img_obj=new IMG_PROCESS($font_file1,$font_file2,$font_file3,$font_file4,$font_file5,$font_file6,$font_size,$font_size_watermark,$path);
     $materia=$_POST['materia'];
     $sigla = $_POST['sigla'];
     $tipo = $_POST['tipexam'];
     $aula = $_POST['aula'];
     $fecha = $_POST['fecha'];
     $hora = $_POST['hora'];
     $correo= $_REQUEST ['usuario'];
        require ("../funciones/conexion.php");
        $sql=("SELECT * FROM login");
        $query=mysqli_query($con,$sql);
        while ($arreglo=mysqli_fetch_array($query)) {
          if ($arreglo['3']==$correo) {
                $autor=$arreglo['1'];
          }
        }
  $size_arr=array("width"=>"500","height"=>"500");
  $savepath="../funciones/my_image_test.png";
  $rgb=array("0","0","0");
  $img_obj->generate_img($materia,$sigla,$tipo,"Aula: ".$aula,"Fecha: ".$fecha,"Hora: ".$hora,$autor,$savepath,$size_arr,$sigla,$rgb); 
  
  }
  ?>

	<h3 style="color: #3366ff">Complete los Espacios</h3>
    <form action="" method="POST" enctype="multipart/form-data">
		<div class="nuevo1">
    <label style="font-size: 16pt; color: #0033cc;">Materia:</label><input class="span2" required="on" type="text" value="<?php if (isset($_POST['materia']))echo $_POST['materia']?>" name="materia" style="background-color: #ccffff;" placeholder="Ej. Electrónica I">
		<label style="font-size: 16pt; color: #0033cc;">Sigla:</label>
    <?php 
      require ("../funciones/conexion.php");
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
		<label style="font-size: 16pt; color: #0033cc;">Tipo de Examen:</label>
		<select class="span2" required="on" name="tipexam" style="background-color: #ccffff" >
        <option value="<?php if (isset($_POST['tipexam']))echo $_POST['tipexam']?>"><?php if (isset($_POST['tipexam']))echo $_POST['tipexam']?></option>
      	<option value="Primer Parcial">Primer Parcial</option>";
    	<option value="Segundo Parcial">Segundo Parcial</option>
    	<option value="Tercer Parcial">Tercer Parcial</option>
    	<option value="Examen Final">Examen Final</option>
    	<option value="Examen Recuperatorio">Examen Recuperatorio</option>
      <option value="Examen 2T">Examen 2T</option>
       <option value="Examen Suspendido">Examen Suspendido</option>
		</select>
		<label style="font-size: 16pt; color: #0033cc;">Fecha:</label>
		<input class="span2" required="on" type="date" name="fecha"  step="1" style="background-color: #ccffff;" value="<?php if (isset($_POST['fecha']))echo $_POST['fecha']?>" placeholder="Ej. 2017-05-21">
		<label style="font-size: 16pt; color: #0033cc;">Hora:</label>
    <input class="span2" value="<?php if (isset($_POST['hora']))echo $_POST['hora']?>" type="time" name="hora" value="12:00" max="20:00" min="07:30" step="1" style="background-color: #ccffff" placeholder="Ej. 10:30">
		<label  style="font-size: 16pt; color: #0033cc;">Aula:</label>
    <?php 
      require ("../funciones/conexion.php");
      $aula="SELECT * FROM aulas";
      $qery=mysqli_query($con,$aula);
    ?>
    <select class="span2" required="on" name="aula" style="background-color: #ccffff" value="<?php if (isset($_POST['aula']))echo $_POST['aula']?>">
    <option value="<?php if (isset($_POST['aula']))echo $_POST['aula']?>"><?php if (isset($_POST['aula']))echo $_POST['aula']?></option>
    <?php
      while($areglo=mysqli_fetch_array($qery))
    {
      ?>
    <option value="<?php echo $areglo['aula'];?>">
    
    <?php echo $areglo['aula']; ?>
    </option>
    <?php  } ?>
    </select>
<input type="Submit" value="Vista Previa" class="btn btn-primary" name="examenes" id="examenes" style="font-size: 15pt; background-color: #000099; color:#ffffff;"><br><br>
</div>
<div class="nuevo1">
<?php
if(isset($_POST['examenes'])){
  ?>
  <br><img src="../funciones/my_image_test.png" style="width: 350px;"><br>
  <?php
}
  ?>
    <input type="Submit" value="Guardar" class="btn btn-primary" name="guardar" id="guardar" style="font-size: 15pt; background-color: #000099; color:#ffffff;">
</div>
</form>
</body>
</html>