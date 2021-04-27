<?php 
$nombre = $_POST['name'];
$asunto = "Mensaje enviado desde página Happy Happy";
$correo = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];

if(!empty($nombre) || !empty($correo) || !empty($correo) || !empty($telefono) || !empty($mensaje)){

	$validateEmail = filter_var($correo, FILTER_VALIDATE_EMAIL);
	if(!$validateEmail){
		$mensajeError = "Formato Correo Inválido";
		include("MensajeErrorValidacionEmail.php");
		die();
	}

	$nombre = filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS);
	$asunto = filter_var($asunto, FILTER_SANITIZE_SPECIAL_CHARS);
	$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
	$telefono = filter_var($telefono, FILTER_SANITIZE_NUMBER_INT);
	$mensaje = filter_var($mensaje, FILTER_SANITIZE_SPECIAL_CHARS);

	$mensaje="$mensaje"."\r\n";
	$mensaje.="Numero de telefono: ".$telefono."\r\n";
	$mensaje.="Correo: ".$correo;
	$mail = mail("someone@example.com", $asunto, $mensaje);
	if($mail){
		header("Location: Surcursales.php");
	} else{
		echo "<p>Mensaje no se pudo enviar</p>";
	}
} else{
	echo "Se deben llenar todos los datos";
}
?>