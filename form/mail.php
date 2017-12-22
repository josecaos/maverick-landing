<?php


if($_SERVER["REQUEST_METHOD"] === "POST") {
	if(isset($_POST['contactFormSubmitted'])) {
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

			$formcontent="Te estan contactando desde tu sitio \n\nDe: $name\n\nInterés: $interest\n\nTeléfono: $phone\n\nCorreo: $email\n\n";
			$message = wordwrap($formcontent, 70, "\r\n");
			$recipient = " mario@maverick.com.mx";
			$subject = "$name para $interest";
			$mailheader = "De: $email \r\n";
			mail($recipient, $subject, $message, $mailheader) or die("Algo ha salido mal, intente nuevamente.");
			echo "<script>$('#formResponse').html('Gracias! tu correo se ha enviado exitosamente.'); </script>";
		}


}
