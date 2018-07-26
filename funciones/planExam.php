<?php 
Include("conexion.php");
   if (isset($_POST['guardar'])){
     include("guardarex.php");
     }
    mysqli_close($con);
?>
<?php
include 'class.img.php';
if(isset($_POST['examenes'])){
$font_file1="fuentes/CARLISLI.ttf";
$font_file2="fuentes/stocky.ttf";
$font_file3="fuentes/CARLISL.ttf";
$font_file4="fuentes/TIMEI___.ttf";
$font_file5="fuentes/BRSFLSHE.ttf";
$font_size_watermark="fuentes/BRSFLSHE.ttf";
$font_file6="fuentes/Abel-Regular.ttf";
$font_size="32";
$path="fondos/azul.png";
$img_obj=new IMG_PROCESS($font_file1,$font_file2,$font_file3,$font_file4,$font_file5,$font_file6,$font_size,$font_size_watermark,$path);

     $materia=$_POST['materia'];
     $sigla = $_POST['sigla'];
     $tipo = $_POST['tipexam'];
     $aula = $_POST['aula'];
     $fecha = $_POST['fecha'];
     $hora = $_POST['hora'];
     $autor= $_SESSION ['usuario'];
     $size_arr=array("width"=>"500","height"=>"500");
     $savepath="my_image_test.png";
     $rgb=array("0","0","0");
     $img_obj->generate_img($materia,$sigla,$tipo,"Aula: ".$aula,"Fecha: ".$fecha,"Hora: ".$hora,$autor,$savepath,$size_arr,$sigla,$rgb); 
     
    }
?>
  	<h3 style="color: #3366ff">Complete los Espacios</h3>
    <form action="" method="POST" enctype="multipart/form-data">
		<div class="nuevo1">
    <label style="font-size: 16pt; color: #0033cc;">Materia:</label><input class="span2" required="on" type="text" value="<?php if (isset($_POST['materia']))echo $_POST['materia']?>" name="materia" style="background-color: #ccffff;" placeholder="Ej. Electrónica I"><br>
		<label style="font-size: 16pt; color: #0033cc;">Sigla:</label><input class="span2" required="on" type="text" value="<?php if (isset($_POST['sigla']))echo $_POST['sigla']?>" name="sigla" style="background-color: #ccffff;" placeholder="Ej. ETN-503"><br>
		<label style="font-size: 16pt; color: #0033cc;">Tipo de Examen:</label>
		<select class="span2" required="on" name="tipexam" style="background-color: #ccffff" >
        <option value="<?php if (isset($_POST['tipexam']))echo $_POST['tipexam']?>"><?php if (isset($_POST['tipexam']))echo $_POST['tipexam']?></option>
      	<option value="Primer Parcial">Primer Parcial</option>"
    	  <option value="Segundo Parcial">Segundo Parcial</option>
    	  <option value="Tercer Parcial">Tercer Parcial</option>
    	  <option value="Examen Final">Examen Final</option>
    	  <option value="Examen Recuperatorio">Examen Recuperatorio</option>
        <option value="Examen 2T">Examen 2T</option>
        <option value="Examen Suspendido">Examen Suspendido</option>
		</select>
		<br>
		<br>
		<label style="font-size: 16pt; color: #0033cc;">Fecha:</label>
		<input class="span2" required="on" type="date" name="fecha"  step="1" style="background-color: #ccffff;" value="<?php if (isset($_POST['fecha']))echo $_POST['fecha']?>" placeholder="Ej. 2017-05-21">
		<label style="font-size: 16pt; color: #0033cc;">Hora:</label>
    <input class="span2" value="<?php if (isset($_POST['hora']))echo $_POST['hora']?>" type="time" name="hora" value="12:00" max="20:00" min="07:30" step="1" style ="background-color: #ccffff" placeholder="Ej. 10:30">
		<label  style="font-size: 16pt; color: #0033cc;">Aula:</label>
    <?php 
      require ("conexion.php");
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
    </select><br>
<input type="Submit" value="Vista Previa" class="btn btn-primary" name="examenes" id="examenes" style="font-size: 15pt; background-color: #000099; color:#ffffff;">
</div>
<div class="nuevo1">
<?php
if(isset($_POST['examenes'])){
  ?>
  <br><img src="my_image_test.png"><br>
  <?php
}
  ?>
    <input style=" font-size: 15pt;" type="Submit" value="Guardar" class="btn btn-primary" name="guardar" id="guardar" style="font-size: 15pt; background-color: #000099; color:#ffffff;">
</div>
</form>
</body>
</html>