<?php
Include("conexion.php");
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
  ?>