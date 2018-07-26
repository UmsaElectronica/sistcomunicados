<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:/sistcomunicados/index.php");
}elseif ($_SESSION['categoria']=='usuario') {
	header("Location:/sistcomunicados/usuarios.php");
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Comunicados Ingenieria Electronica</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
  </head>
<body data-offset="40" background="../images/ingenieriaetn7.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<header class="header">
<div class="row">
<h1 class="span" style="color:#000000;">Página de Administrador</h1>
</div>
</header>
<div class="navbar">
  <div class="navbar-inner">
		<ul class="nav">
			<li class="" ><a href="admin.php">Administrador de Usuarios</a></li>
			<li class=""><a href="../admusuarios.php">Registro de Comunicados</a></li>
			<li class=""><a href="aulas.php">Actualizar Aulas</a></li>
			<li class=""><a href="fondo.php">Temas de Fondo</a></li>
			<li class=""><a href="subirvideo.php">Videos</a></li>			 
		</ul>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong></a></li>
		<li><a href="desconectar.php"> Cerrar Sesión </a></li>			 
		</ul>
  </div>
</div>
<div class="row">
	<div class="span12">
		<div class="caption">
		<div class="well well-small">
		<h2 > Administración de usuarios registrados</h2>	
		<h4> Tabla de Usuarios</h4>
		<div class="container">
			<?php
				require("admconexion.php");
				$sql=("SELECT * FROM login");
				$query=mysqli_query($con,$sql);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Id</td>";
						echo "<td>Usuario</td>";
						echo "<td>Contraseña</td>";
						echo "<td>Email</td>";
						echo "<td>Categoria</td>";
						echo "<td>Estado</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";
			?>  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    		if($arreglo[5]==1){
				    				echo "<td>Habilitado</td>";}
				    		else{	echo "<td>Inhabilitado</td>";}
				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='../images/actualiza.png' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='../images/elimina.png' class='img-rounded'/></a></td>";
					echo "</tr>";
				}
					echo "</table>";
					extract($_GET);
					if(@$idborrar==2){
						$sqlborrar="DELETE FROM login WHERE iduser=$id";
						$resborrar=mysqli_query($con,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						echo "<script>location.href='admin.php'</script>";
					}
			?>		
		</div>	
		<br/>	
		</div>
	</div>
	</div>
</div>
</div>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>