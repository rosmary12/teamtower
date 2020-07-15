<?php
	$nickname = $_POST['nickname2'];
	$contra = $_POST['contra2'];
	$conectar= mysqli_connect("localhost", "root","", "globaltower");
	$consulta= "SELECT * FROM registro WHERE nickname = '$nickname' and contra = '$contra' and active = '1'";
	$resultado = mysqli_query($conectar, $consulta);
	$filas = mysqli_num_rows($resultado);
	if($filas>0) {
			header ("location: Sala.php");
	}
	else{ 
			echo "Error en la autentificación";
	}
	mysqli_free_result($resultado);
	mysqli_close($conectar);
	session_start();
	$_SESSION['nickname'] = $_POST['nickname2'];
	$varsession= $_SESSION['nickname'];
	if($varsession== null || $varsession=''){ 
		echo 'Usted no tiene autorizacion';
		die();
	}
	//codificado por: Rosmary Nereida Linarez Perdomo.
?>