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
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['activacion']) && !empty($_GET['activacion'])){
    // Verify data
    $email = mysqli_escape_string($_GET['email']); // Set email variable
    $activacion = mysqli_escape_string($_GET['activacion']); // Set hash variable
    $search = mysqli_query("SELECT email, activacion, active FROM registro WHERE email='".$email."' AND activacion='".$activacion."' AND active='0'") or die(mysqli_error()); 
    $match  = mysqli_num_rows($search);       
    if($match > 0){
        // We have a match, activate the account
        mysqli_query("UPDATE registro SET active='1' WHERE email='".$email."' AND activacion='".$activacion."' AND active='0'") or die(mysqli_error());
        echo '<div class="statusmsg">Su cuenta ha sido activada, ahora puedes acceder</div>';
    }else{
        // No match -> invalid url or account has already been activated.
        echo '<div class="statusmsg"> La dirección url es inválida o todavía no has activado tu cuenta.</div>';
    }                 
}else{
    // Invalid approach
    echo '<div class="statusmsg"> Invalid approach, por favor use el enlace enviado a su correo.</div>';
}
?>