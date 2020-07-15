<?php
//conectamos con el servidor
	$conectar=mysqli_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo "No se pudo conectar con el servidor";
	}else{
		$base=mysqli_select_db($conectar, 'globaltower');
		if(!$base){
			echo "No se encontró la base de datos";
		}
	}
	//recuperar las variables
	$deporte= $_POST['deporte'];
	$musica= $_POST['musica'];
	$escritor= $_POST['escritor'];
	$colegio= $_POST['colegio'];
	$mascota= $_POST['mascota'];
	$mama= $_POST['mama'];
	$representante= $_POST['representante'];
	$permisoespec= $_POST['permisoespec'];
	$aprobado= $_POST['aprobado'];
	//hacemos la sentencia de sql
	$sql= "INSERT INTO seguridad(deporte, musica, escritor, colegio, mascota, mama, representante, permisoespec, revisado)  VALUES ('$deporte','$musica','$escritor','$colegio','$mascota','$mama','$representante','$permisoespec','$aprobado')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysqli_query($conectar,$sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo "Hubo algun error";
	}else{
		echo "Datos Guardados Exitosamente <br><a href='Sala.html'> Continuar </a>";
		}
?>