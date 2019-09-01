<?php
	$servBD = "localhost";
	$usrBD = "root";
	$passBD = "";
	$nombreBD = "sem20181";
	
	$conexion = mysqli_connect($servBD, $usrBD, $passBD, $nombreBD);
	mysqli_set_charset($conexion, "utf8");
?>