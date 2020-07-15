<!DOCTYPE html>
<Html lang="es">
	<head>
		<title>Mensajeria</title>
		<link rel= "stylesheet" type= "text/css" href="css/mensajeria.css">
		<meta charset= "UFT-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
	</head>
<body>
	<form method=post>
			<input type="text" maxlength="100" size="80" name="nombre" placeholder="Nombre" required> <br>
			<input type="email" maxlength="100" size="80" name="correo" placeholder="Correo" required> <br>
			<input type="text" maxlength="1000" size="80" name="asunto" placeholder="Asunto" required> <br>
			<textarea name="mensaje" placeholder= "Mensaje" > </textarea>
			<input type="submit" size="20px" class="boton" name="enviar" value="Enviar"> <br>
	</form>
<?php
	include("mensajeria.php");
?>
</body>
</html>