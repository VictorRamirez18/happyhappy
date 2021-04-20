<?php 
	$name = $email = $phone = $message = "";
	$errorName = "";
	if(validacion($errorName) == false){
		return False;
	} else{
		echo "<span>Tus datos se han enviado correctamente</span>";
	}

	function validacion(){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  		$name = $_POST['name'];
	  		$email = $_POST['email'];
	  		$phone = $_POST['phone'];
	  		$message = $_POST['message'];
	  		$list = "";
	  		if(empty($name)){
	  			echo "<span>El nombre no debe estar vacío</span>";
				return False;
			} elseif(strlen($name) > 40){
				echo "<span>El nombre no debe tener mas de 40 caracteres</span>";
				return False;
			}
			if(empty($email)){
				echo "<span>El correo no debe estar vacío</span>";
				return False;
			} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo "<span>El correo no tiene un formato válido</span>";
				return False;
			}
			if(empty($phone)){
				echo "<span>El telefono no debe estar vacío</span>";
				return False;
			}
			if(empty($message)){
				echo "<span>El mensaje no debe estar vacío</span>";
				return False;
			} else{
				return True;
			}
	  	}
	}
?>