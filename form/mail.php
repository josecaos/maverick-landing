<?php


if($_SERVER["REQUEST_METHOD"] === "POST") // comentado por seguridad descomentar mas tarde
{
	var_dump($_POST); //muestra info sobre una variable

	$secret = "6LdH0x0TAAAAAGj7PZNGgsdrmzJQXg2lH6ac8HAN";
	// $rip = $_SERVER['REMOTE_ADDR'];
	$captcha = $_POST['captchaResponse']; ##$_POST['g-recaptcha-response'] este era el pedo pff
	$respuesta  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");//&remoteip=$rip
	var_dump($respuesta);
	$respuesta = json_decode($respuesta,true);
	//booleano para captcha
	if( $respuesta['success'] === true) {
		// echo "El correo se ha enviado exitosamente, gracias."; //debug
		// echo $respuesta; //debug
		// empieza booleando para enviar mail
		// echo "<script>$('#mensaje_res').html('El correo se ha enviado exitosamente, gracias.'); </script>";
		if(isset($_POST['contactFormSubmitted'])) {
			// Formulario data
			$name = $_POST['name'];
			$email = $_POST['email'];
			// $phone = $_POST['phone'];
			$type = $_POST['type'];
			$message = $_POST['message'];

			// check length of name, email and message
			if (strlen($name) < 3 || strlen($message) < 20) {
				// echo "<script>javascript:Recaptcha.reload();</script>"; // reload the captcha
				exit("Necesitas más caracteres."); // exit program, return message
			}
			// Contenido de correo
			$formcontent="Te estan contactando desde tu sitio\n\nDe: $name\n\nCorreo: $email\n\nAsunto: $type\n\nMensaje: $message";
			// wordwrapped after 70 chracte? Words?
			$message = wordwrap($formcontent, 70, "\r\n");
			// Enter your email address
			$recipient = "info@mbiexecutivesearch.com";
			// Enter a subject, only you will see this so make it useful
			$subject = "$name para $type";
			// 'From' mail header
			$mailheader = "De: $email \r\n";
			// Send email, if something goes wrong, kill programm and return error message
			mail($recipient, $subject, $message, $mailheader) or die("Algo ha salido mal, intente nuevamente.");
			// If all's well, return success message
			echo "<script>$('#formResponse').html('Gracias! tu correo se ha enviado exitosamente, te contactaremos a la brevedad.'); </script>";
		}
		//termina booleano email
	} else {
		echo "<script>$('#formResponse').html('Fuera! eres un robot de spam'); </script>";
		// echo " FueraFuera! eres un robot de spam"; //debug
	}


}
