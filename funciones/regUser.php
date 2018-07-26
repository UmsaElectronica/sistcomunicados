<?php 
Include("conexion.php");
   if (isset($_POST['realname']) or isset($_POST['nick']) or isset($_POST['pass']) or isset($_POST['rpass'])){
      $realname = $_POST["realname"];
      $nick = $_POST['nick'];
      $pass = $_POST['pass'];
      $rpass = $_POST['rpass'];
      $checkemail=mysqli_query($con,"SELECT * FROM login WHERE email='$nick'");
      $check_mail=mysqli_num_rows($checkemail);
      if($pass==$rpass){
        if($check_mail>0){
          echo ' <script language="javascript">alert("Atencion, ya existe el email designado para un usuario, verifique sus datos");</script> ';
        }else{
           $sql = "INSERT INTO login(usuario,contras,email,categoria,estado)";
           $sql.="VALUES('$realname','$pass','$nick','usuario','0')";
           $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
           echo '<script>alert("USUARIO REGISTRADO")</script> ';
        }
      }
      else{
      echo ' <script language="javascript">alert("Las contraseñas deben ser iguales");</script> ';
      }
          
    mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
    <title>Comunicados Ingenieria Electronica</title>
</head>
<body data-offset="1" background="../images/ingenieriaetn7.jpg" style="background-color: #0c30c1; background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
  <center><div class="tit"><h2 style="color: #000066;">Formulario de Registro</h2>
  <table border="0" align="center" valign="middle">
    <tr>
    <td rowspan=2>
    <form method="post" action="">
    <legend  style="font-size: 18pt; color: #000099;"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu correo</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa tu correo"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresar contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repetir contraseña" />
    </div>
    </div>
    <input  class="btn btn-success" type="submit" name="submit" value="Registrar"/>
    <a class="btn btn-primary" href="/sistcomunicados/">Iniciar Sesión </a></li>    
    </form>
</div>
<br>
    </td>
    </tr>
    </table>
    </div></center></div></center>
</body>
</html>


