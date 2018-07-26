<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<title>Comunicados Ingenieria Electronica</title>
</head>
<body background="images/ingenieriaetn7.jpg" style="background-color: #0c30c1; background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
	<br><br><br>
	<div class="container" align="center">
	<h2  style="color: #000066;">Iniciar Sesión</h2>
	<table border="0" valign="middle">
	<tr>
		<td rowspan=2>
			<form action="funciones/validar.php" method="post" >
				<table border="0">
				<tr>
					<td><label style="font-size: 14pt; color: #FFFFFF;"><b>Correo: </b></label></td>
					<td> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td>
				</tr>
				<tr>
					<td><label style="font-size: 14pt; color: #FFFFFF;"><b>Contraseña: </b></label></td>
					<td><input style="border-radius:15px;" type="password" name="pass"></td>
				</tr>
				<tr>
					<td><input class="btn btn-primary" type="submit" value="Aceptar"></td>
				</tr>
				</table>
			</form>
			<a href="funciones/regUser.php" class="btn btn-success">Registrar nuevo usuario</a>
		</td>
	</tr>
	</table>
	</div>
</body>
</html>