<?php
If(isset($_POST['enviar'])){ 
	If(!empty($_POST['nombre']) && !empty($_POST['correo'])&& !empty($_POST['asunto'])&& !empty($_POST['mensaje'])){
			$nombre = $_POST['nombre'];
			$correo = $_POST['correo'];
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];
			$header = "From: noreply@comunidadtower.com" . "\r\n";
			$header.= "Reply-to:noreply@comunidadtower.com" . "\r\n";
			$header.= "X-Mailer: PHP/" . phpversion();
			$mail= mail( $correo, $asunto, $mensaje, $header);
			if ($mail) { 
				echo '<h4> ¡Correo Enviado exitosamente! </h4>';
			}else{
				echo 'hubo un problema';
			}
	}
}
?>