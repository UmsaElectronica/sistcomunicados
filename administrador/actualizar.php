<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['usuario']) {
	header("Location:/sistcomunicados/index.php");
}
?>		
<html>
  <head>
    <meta charset="utf-8">
    <title>Comunicados Ingeniería Electrónica</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.css">
  </head>
<body data-offset="40" background="../images/ingenieriaetn7.jpg" style="background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<header class="header">
<div class="row">
<h1 class="span">Página de Administrador</h1>
</div>
</header>
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">Administrador de Usuarios</a></li>
			<li class=""><a href="../admusuarios.php">Registro de Comunicados</a></li>
			<li class=""><a href="aulas.php">Actualizar Aulas</a></li>
			<li class=""><a href="fondo.php">Temas de Fondo</a></li>
			<li class=""><a href="subirvideo.php">Videos</a></li>
		</ul>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['usuario'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Sesión </a></li>			 
		</ul>
	  </div>
	</div>
  </div>
</div>
<div class="row">
	<div class="span12">
		<div class="caption">
		<h2> Administración de Usuarios</h2>	
		<div class="well well-small">
		<h4>Edición de usuarios</h4>
		<div class="row-fluid">
		<?php
		extract($_GET);
		require("admconexion.php");
		$sql="SELECT * FROM login WHERE iduser=$id";
		$ressql=mysqli_query($con,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$user=$row[1];
		    	$pass=$row[2];
		    	$email=$row[3];
		    	$categoria=$row[4];
		    	$estado=$row[5];
		    }
		?>
		<form action="ejecutaactualizar.php" method="post">
				Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" name="user" value="<?php echo $user?>"><br>
				Contraseña<br> <input type="text" name="pass" value="<?php echo $pass?>"><br>
				Correo usuario<br> <input type="text" name="email" value="<?php echo $email?>"><br>
				Categoria <select name="categoria">		<option value="usuario">Seleccionar...</option>";
														<option value="usuario">Usuario</option>";
														<option value="administrador">Administrador</option>";<br></select>
				<br>Estado<select name="estado">		<option value="0">Seleccioar...</option>";
														<option value="1">Habilitado</option>";
														<option value="0">Inhabilitado</option>";
				<br></select>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
			</form>
		</div>	
		<br/>
		</div>
		</div>
</div>
</div>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>


