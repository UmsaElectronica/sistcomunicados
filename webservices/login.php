<?php
session_start();
	require("../funciones/conexion.php");
	$username=$_REQUEST['mail'];
	$pass=$_REQUEST['pass'];
	$sql=mysqli_query($con,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_array($sql)){
		if($pass==$f['contras']){
				  	if($f['estado']=='1'){
				  	$_SESSION['iduser']=$f['iduser'];
					$_SESSION['usuario']=$f['usuario'];
					$_SESSION['categoria']=$f['categoria'];	
				   	echo"";
					}
					else{
					echo"usuario no habilitado";
					session_destroy();		
					}
					
		}else{
				echo"contraseña incorrecta";
				session_destroy();
		}
	}else{
		
		echo"usuario no registrado";
		session_destroy();	
    }
?>