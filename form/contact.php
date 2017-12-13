<?php
####
## Form adaptado para foundation zurb
####
//inicia sesion
session_start();
// Require the class
require('formkey_class.php');
// Start the class
$formKey = new formKey();
$error = False;
// Is request?
if($_SERVER['REQUEST_METHOD'] == 'post')
{
	// Validate the form key
	if(!isset($_POST['form_key']) || !$formKey->validate())
	{
		// Form key is invalid, show an error
		$error = True;
	}
}

?>
<script src="https://www.google.com/recaptcha/api.js?hl=es"></script>

<!-- Formulario  -->
<form id="mbiForm" method="POST" action="" class="form-horizontal contact-form" data-abide novalidate>
	<!--  -->
	<?php $formKey->outputKey(); ?>
	<!--  -->
	<label class="white">Nombre *</label>
	<input type="text" placeholder="Nombre completo" name="name" aria-describedby="" id="inputName" required>
	<!--  -->
	<label class="white">Correo *</label>
	<input type="email" placeholder="ejecutivo@empresa.com" name="email" id="inputEmail" required>

	<label class="white">Asunto *</label>
	<input id="selectSubject" name="type" type="text" placeholder="Asunto" required>

<label class="white">Mensaje *</label>
<textarea placeholder="Ingrese su mensaje" name="message" id="inputMessage" class="mb1" required></textarea>
<!-- recaptcha v2  -->
<div class="g-recaptcha" data-sitekey="6LdH0x0TAAAAAH3ZejIgppovJ-Uf9siidME__gF_"></div>
<!-- <div id="captcha"></div> <!-- captcha explicit load-->
<!--  -->
<fieldset class="large-12 columns mt1 pl0">
	<button id="boton_form" class="fondo_inputs m1 p3 white bold" type="submit" value="Send">Contáctanos</button>
</fieldset>
<!-- respuesta al enviar -->
<p id="formResponse" class="success pt1"><?php #if($error) { echo($error); } ?></p>
<p id="mensaje_res" class="success pt1 small_font color_gris" style="display: none;"><i class="fa fa-success"></i></p>
<div data-abide-error class="alert callout" style="display: none;">
	<p class="warning small_font"><i class="fa fa-alert"></i> Hay algunos errores, faltan campos obligatorios.</p>
</div>
</form>
