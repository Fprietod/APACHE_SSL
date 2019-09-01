<?php
	include("configBD.php");
	
	$boleta = $_POST["boleta"];
	$sqlVer = "SELECT * FROM estudiantes WHERE boleta = '$boleta'";
	$resVer = mysqli_query($conexion, $sqlVer);
	
	$estudiante = mysqli_fetch_assoc($resVer);
	
	$json = json_encode($estudiante);
 
 	echo $json;
?>