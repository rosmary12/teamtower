<?php
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
	//Revisar si el nickname no está repetido en la base de datos
	//Revisar si la cedula es real
	//Revisar si la contraseña cumple requisitos:
	//si el email es válido y está confirmado por el usuario
	//recuperar las variables solo si los campos están llenos:
	if(isset($_POST['nombre']) && !empty($_POST['nombre']) AND isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['nickname']) && !empty($_POST['nickname']) AND isset($_POST['apellido']) && !empty($_POST['apellido']) AND isset($_POST['nacionalidad']) && !empty($_POST['nacionalidad']) AND isset($_POST['cedula']) && !empty($_POST['cedula']) AND isset($_POST['telefono']) && !empty($_POST['telefono'])){
 	$nickname= $_POST['nickname'];
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$nacionalidad= $_POST['nacionalidad'];
	$cedula= $_POST['cedula'];
	$email = $_POST['email'];
	$telefono= $_POST['telefono'];
	// Verificacion de publicacion en variables locales
	}else{
		echo "Faltan Rellenar Campos";
	}	
	// CODIGO ACTIVACION Generate random 32 character hash and assign it to a local variable.
	// Example output: f4552671f8909587cf485ea990207f3
	$activacion= md5(rand(0,1000)); 
	//GEneracion de Contraseña
	$contra=rand(1000,5000);
	//Sentencia de sql, protección de variables en la base de datos:
	$sql= "INSERT INTO registro(nickname, nombre, apellido, nacionalidad, cedula, email, telefono, contra, activacion)  VALUES ('$nickname','$nombre','$apellido','$nacionalidad','$cedula','".mysqli_escape_string($email)."','$telefono','".mysqli_escape_string($contra)."','".mysqli_escape_string($activacion)."')"; 
	//ejecución la sentencia de sql
	$ejecutar=mysqli_query($conectar,$sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo "Hubo algun error";
	}else{
		echo "Datos enviados exitosamente. Usted, debe validar su Correo antes de acceder a su Cuenta<br><a href=www.google.com> Continuar </a>";
	}
	// Envio de correo a nuestro usuario
	$from="test@hostinger-tutorials.com";
	$to= $email;
	$subject ='Registro|Verificación GlobalTower'; // objetivo del mensaje 
	$message ='Bienvenido, gracias por registrarse a GlobalTower!
	Su cuenta ha sido creada con éxito, puede ahora acceder a su cuenta con la siguiente clave después de activarla.	------------------------
	Usuario: '.$nickname.'
	Clave: '.$contra.'
	------------------------
 	Pulse en el siguente enlace para activar su cuenta:
	http://localhost/globaltower/ValidarCuenta.php?email='.$email.'$activacion='.$activacion.'';
	$headers = "From:" .$from; // Set from headers
	mail($to,$subject,$message,$headers);
	// Send our email
?>