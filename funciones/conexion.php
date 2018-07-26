<?php
	$con=mysqli_connect('localhost','root','p455w0rd','registrodeact');
	if (!$con) {
		die("No es posible conectar con la base".mysqli_connect_error());
	}
	mysqli_query($con,"SET NAMES 'utf8'");
?>  