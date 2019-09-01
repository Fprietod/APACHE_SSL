<?php
	session_start();
	include("configBD.php");
	include("getPosts.php");
	
	$sqlAcc = "SELECT * FROM estudiantes WHERE boleta='$usuario' AND correo='$contrasena'";
	$resAcc = mysqli_query($conexion, $sqlAcc);
	$infAcc = mysqli_num_rows($resAcc);	

	if($infAcc == 1){
		$_SESSION["valido"] = "JAOR";
		$_SESSION["valido2"] = "IPN";
		echo 1;
	}else{
		echo 0;
	}

?>