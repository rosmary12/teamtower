<?php
	$conexion=mysqli_connect('localhost','root','');
	//verificamos la conexion
	if(!$conexion){
		echo "No se pudo conectar con el servidor";
	}else{
		$base=mysqli_select_db($conexion, 'globaltower');
		if(!$base){
			echo "No se encontró la base de datos";
		}
	}
	//Revisar si el nickname no está repetido en la base de datos
	//Revisar si la cedula es real
	//Revisar si la contraseña cumple requisitos:
	//si el email es válido y está confirmado por el usuario
	//recuperar las variables solo si los campos están llenos:
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) AND isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['nickname']) && !empty($_POST['nickname']) AND isset($_POST['apellido']) && !empty($_POST['apellido']) AND isset($_POST['nacionalidad']) && !empty($_POST['nacionalidad']) AND isset($_POST['cedula']) && !empty($_POST['cedula']) AND isset($_POST['contra']) && !empty($_POST['contra'])){
		$nickname= $_POST['nickname'];
		$nombre= $_POST['nombre'];
		$apellido= $_POST['apellido'];
		$nacionalidad= $_POST['nacionalidad'];
		$cedula= $_POST['cedula'];
		$email = $_POST['email'];
		$contra= $_POST['contra'];
	// Verificacion de publicacion en variables locales
	}else{
		echo "Faltan Rellenar Campos";
		die();
	}
	$consultaUs= "SELECT * FROM registro WHERE nickname = '$nickname'";
	$resultadoUs= mysqli_query($conexion, $consultaUs);
	$filasUs= mysqli_num_rows($resultadoUs);
	if($filasUs>0){
		echo "Usuario ya registrado";
		die();
	}	
	$consultacd= "SELECT * FROM registro WHERE cedula = '$cedula'";
	$resultadocd= mysqli_query($conexion, $consultacd);	
	$filascd= mysqli_num_rows($resultadocd);
	if($filascd>0){
		echo "Numero de Cedula ya registrada, intente con otro";	
		die();
	}
	$consultaem= "SELECT * FROM registro WHERE email = '$email'";
	$resultadoem= mysqli_query($conexion, $consultaem);
	$filasem= mysqli_num_rows($resultadoem);
	if($filasem>0){
		echo "Correo electronico ya registrado, intente con otro";
		die();
	}
	// CODIGO ACTIVACION Generate random 32 character hash and assign it to a local variable.
	$activacion= md5(rand(0,1000)); 
	$sql= "INSERT INTO registro(nickname, nombre, apellido, nacionalidad, cedula, email, telefono, contra, activacion)  VALUES ('$nickname','$nombre','$apellido','$nacionalidad','$cedula','$email','$telefono','$contra','$activacion')"; 
	//ejecución la sentencia de sql
	$ejecutar=mysqli_query($conexion,$sql);
	//verificamos la ejecucion
	if(!$ejecutar){
	echo "Hubo algun error";
	}else{
	echo "Datos enviados exitosamente. Usted, debe validar su Correo antes de acceder a su Cuenta<br> <a href=www.google.com> Continuar </a>";
	}
	// Envio de correo a nuestro usuario
	$to= $email;
	$subject ='Registro|Verificación GlobalTower'; // objetivo del mensaje 
	$message ='Bienvenido, gracias por registrarse a GlobalTower!
	Su cuenta ha sido creada con éxito, puede ahora acceder a su cuenta con la siguiente clave después de activarla.	------------------------
	Usuario: '.$nickname.'
	Clave: '.$contra.'
	------------------------
 	Pulse en el siguente enlace para activar su cuenta:
	http://localhost/globaltower/ValidarCuenta.php?email='.$email.'$activacion='.$activacion.'';
	$headers ='From:noreply@teamtower.online' . "\r\n"; // Set from headers
	mail($to,$subject,$message,$headers);
	// Send our email	
?>