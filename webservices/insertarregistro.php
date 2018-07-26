<?php
	Include("../funciones/conexion.php");
	      $realname = $_REQUEST["realname"];
            $nick = $_REQUEST['nick'];
            $pass = $_REQUEST['pass'];
            $rpass = $_REQUEST['rpass'];
            $checkemail=mysqli_query($con,"SELECT * FROM login WHERE email='$nick'");
            $check_mail=mysqli_num_rows($checkemail);
                  if ($check_mail>0) {
                        echo "Usuario ya Existe";}
      	      else{
                  $sql = "INSERT INTO login(usuario,contras,email,categoria,estado)";
                  $sql.="VALUES('$realname','$pass','$nick','usuario','0')";
                  $res= mysqli_query($con,$sql) or die(mysqli_connect_error());
                  echo "Usuario Registrado";
                  }	
            
?>