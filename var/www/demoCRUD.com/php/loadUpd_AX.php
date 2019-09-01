<?php
	include("configBD.php");
	include("getPosts.php");
	
	$boleta = $_POST["boleta"];
	$sqlLoadUpd = "SELECT * FROM estudiantes WHERE boleta = '$boleta'";
	$resLoadUpd = mysqli_query($conexion, $sqlLoadUpd);
	$infBoleta = mysqli_fetch_assoc($resLoadUpd);
	$json = json_encode($infBoleta);
	echo $json;
?>