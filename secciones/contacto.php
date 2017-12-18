<section id="descripcion" class="grid-x expanded h-a p-t-3 p-b-3 text-center color-secundario-5-bg color-blanco">

  <div class="grid-container">

    <h1 class="titulo-contacto cell text-center upper m-b-3">Want to say
      <strong> &nbsp;Hello?</strong></h1>

    <!--  -->


    <?php

    // session_start();
    require('form/formkey_class.php');
    $formKey = new formKey();
    $error = False;
    if($_SERVER['REQUEST_METHOD'] == 'post')
    {
      // Validata
      if(!isset($_POST['form_key']) || !$formKey->validate())
      {
        $error = True;
      }
    }

    ?>
    <!-- <script src="https://www.google.com/recaptcha/api.js?hl=es"></script> -->
    <form id="hello" method="POST" action="" class="cell form-horizontal contact-form text-left color-blanco" data-abide novalidate>
      <!--  -->
      <?php $formKey->outputKey(); ?>
      <!--  -->
      <label class="small-12 upper m-b-1">Mi Nombre es:</label>
      <input type="text" placeholder="Nos gusta darte atención personalizada" name="name" aria-describedby="" id="nombre" required>
      <!--  -->
      <label class="small-12 upper m-b-1">Me Gustaría:</label>
      <!-- en vez de email  -->
      <select name="interest" id="interes" required>
        <option value="" hidden>Seleciona una opción sobre tu interés en Maverick</option>
        <option value="uno">Opción 1</option>
        <option value="dos">Opción 2</option>
        <option value="tres">Opción 3</option>
        <option value="cuatro">Opción 4</option>
      </select>
      <!--  -->
      <div class="seleccion-form cell">
        <label for="" class="small-12 upper m-b-1">Quiero que me contacten por:</label>
        <div class="boton_input cell m-b-2">
          <a href="#" class="color-secundario-3-bd color-blanco-bg">Teléfono</a><a href="#" class="color-secundario-3-bd">Email</a>
        </div>
        <!--  -->
        <label class="small-12 upper m-t-1">
          <input type="tel" name="telephone" id="tel" placeholder="Ingresa tu número de teléfono a 10 dígitos" class="input-email" required>
        </label>
        <!-- opcion dos escondida -->
        <label class="small-12 upper m-t-1 hidden">
          <input type="email"  name="email" id="inputEmail" placeholder="Ingresa tu correo electrónico" class="input-email" required>
        </label>

      </div>
      <!--  -->
      <!-- recaptcha v2  -->
      <!-- <div class="g-recaptcha" data-sitekey="6LdH0x0TAAAAAH3ZejIgppovJ-Uf9siidME__gF_"></div> -->
      <!--  -->
      <fieldset class="grid-x align-center m-t-3">
        <button id="boton_form" class="boton-form rounded upper text-center p-l-6 p-r-6 p-t-1 p-b-1" type="submit" value="">Contact <br> Us</button>
      </fieldset>


      <!-- respuesta -->
      <p id="formResponse" class="success pt1"><?php #if($error) { echo($error); } ?></p>
      <p id="mensaje_res" class="success pt1 small_font color_gris" style="display: none;"><i class="fa fa-success"></i></p>
      <div data-abide-error class="alert callout" style="display: none;">
        <p class="warning small_font"><i class="fa fa-alert"></i> Hay algunos errores, faltan campos obligatorios.</p>
      </div>
    </form>


    <!--  -->
  </div>


</section>
