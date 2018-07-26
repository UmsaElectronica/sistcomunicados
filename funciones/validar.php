<?php
session_start();
	include("conexion.php");
	$username=$_POST['mail'];
	$pass=$_POST['pass'];
	$sql=mysqli_query($con,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_array($sql)){
		if($pass==$f['contras']){
			if($f['categoria']=="administrador"){
					$_SESSION['iduser']=$f['iduser'];
					$_SESSION['usuario']=$f['usuario'];
					$_SESSION['categoria']=$f['categoria'];
					echo "<script>location.href='../administrador/admin.php'</script>";
				}
				else{
					if($f['estado']=='1'){
				  	$_SESSION['iduser']=$f['iduser'];
					$_SESSION['usuario']=$f['usuario'];
					$_SESSION['categoria']=$f['categoria'];	
				   	echo "<script>location.href='../usuarios.php'</script>";
					}
					echo '<script>alert("USUARIO NO HABILITADO")</script> ';
		
					echo "<script>location.href='../index.php'</script>"; // Direcciona pagina de inicio
		}
		}else{
				echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
				echo "<script>location.href='../index.php'</script>"; // Direcciona pagina de inicio
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../index.php'</script>";	

	}
?>