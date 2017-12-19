<?php


if($_SERVER["REQUEST_METHOD"] === "POST") {
	// $secret = "6LdH0x0TAAAAAGj7PZNGgsdrmzJQXg2lH6ac8HAN";
	// $rip = $_SERVER['REMOTE_ADDR'];
	// $captcha = $_POST['captchaResponse']; ##$_POST['g-recaptcha-response'] este era el pedo pff
	// $respuesta  = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");//&remoteip=$rip
	// var_dump($respuesta);
	// $respuesta = json_decode($respuesta,true);
	//booleano para captcha
	// if( $respuesta['success'] === true) {
		// echo "El correo se ha enviado exitosamente, gracias."; //debug
		// echo $respuesta; //debug
		// empieza booleando para enviar mail
		// echo "<script>$('#mensaje_res').html('El correo se ha enviado exitosamente, gracias.'); </script>";
		if(isset($_POST['contactFormSubmitted'])) {
			// Formulario data
			$name = $_POST['name'];
			$interest = $_POST['interest'];
			$email = $_POST['email'];
			$phone = $_POST['telephone'];

			if (strlen($name) < 3) {
				exit("Necesitamos más caracteres en tu nombre."); // exit program, return message
			} else if (! strlen($phone) == 0) {
				if (strlen($phone) < 10) {
					exit("Necesitamos más números en tu teléfono."); // exit program, return message
				}
			}

			$formcontent="Te estan contactando desde tu sitio\n\nDe: $name\n\nInterés: $interest\n\nTeléfono: $phone\n\nCorreo: $email\n\n";
			$message = wordwrap($formcontent, 70, "\r\n");
			$recipient = "code@josecaos.xyz, danielafuentesweb@gmail.com";
			$subject = "$name para $interest";
			$mailheader = "De: $email \r\n";
			mail($recipient, $subject, $message, $mailheader) or die("Algo ha salido mal, intente nuevamente.");
			echo "<script>$('#formResponse').html('Gracias! tu correo se ha enviado exitosamente, te contactaremos a la brevedad.'); </script>";
		}


}
