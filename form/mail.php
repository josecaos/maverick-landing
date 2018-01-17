<?php


if($_SERVER["REQUEST_METHOD"] === "POST") {

	if(isset($_POST['contactFormSubmitted'])) {
			$name = $_POST['name'];
			$secondname = $_POST['secondname'];
			$interest = $_POST['interest'];
			$email = $_POST['email'];
			$phone = $_POST['telephone'];

			// if (strlen($name) < 3) {
			// 	exit("Necesitamos más caracteres en tu nombre.");
			// }
			//  else if (strlen($phone) < 10) {
			// 		exit("Necesitamos más números en tu teléfono.");
			// }

			$formcontent="Te estan contactando desde tu sitio \n\nNombre: $name\n\nApellido: $secondname\n\nInterés: $interest\n\nTeléfono: $phone\n\nCorreo: $email\n\n";
			$message = wordwrap($formcontent, 70, "\r\n");
			$recipient = "jazzvoon@gmail.com, danielafuentesweb@gmail.com";//"mario@maverick.com.mx";
			$subject = $name . " " . $secondname . " para $interest";
			$mailheader = "De: $email \r\n";
			mail($recipient, $subject, $message, $mailheader) or die("Algo ha salido mal, intente nuevamente.");
			echo "<script>$('#formResponse').html('Gracias! tu correo se ha enviado exitosamente.'); </script>";
		}

}
