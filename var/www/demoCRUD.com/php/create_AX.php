<?php
	include("configBD.php");
	include("getPosts.php");
	
	$sqlIns = "INSERT INTO estudiantes VALUES('$boleta','$nombre','$primerApe','$segundoApe','$sexo','$correo')";
	$resIns = mysqli_query($conexion, $sqlIns);
	$infIns = mysqli_affected_rows($conexion);
	if($infIns == 1){
		echo 1; //OK. Se realizó el registro del estudiante
	}else{
		echo 0; //ERROR. No se pudo realizar el registro del estudiante
	}
?>