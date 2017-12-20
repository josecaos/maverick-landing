<section id="descripcion" class="grid-x expanded h-a p-t-3 p-b-3 text-center color-secundario-5-bg color-blanco">

  <div class="grid-container">

    <h2 class="titulo-contacto cell text-center upper m-b-3">¿Quieres
      <strong> &nbsp;Contactarnos?</strong></h2>

      <!--  -->


      <?php

      // session_start();
      require('form/formkey_class.php');
      $formKey = new formKey();
      $error = False;
      if($_SERVER['REQUEST_METHOD'] == 'post')
      {
        if(!isset($_POST['form_key']) || !$formKey->validate())
        {
          $error = True;
        }
      }

      ?>
      <form id="hello" method="POST" action="" class="cell form-horizontal contact-form text-left color-blanco" data-abide novalidate>
        <!--  -->
        <?php $formKey->outputKey(); ?>
        <!--  -->
        <label class="small-12 upper m-b-1">Mi Nombre es:</label>
        <input type="text" placeholder="Nos gusta darte atención personalizada" name="name" aria-describedby="" id="nombre" required>
        <!--  -->
        <label class="small-12 upper m-b-1">Me Interesa:</label>
        <!-- en vez de email  -->
        <select name="interest" id="interes" required>
          <option value="" hidden>Cuéntanos tu interés en Maverik</option>
          <option value="uno">Branding</option>
          <option value="dos">Social Media</option>
        </select>
        <!--  -->
        <div class="seleccion-form cell">
          <label for="" class="small-12 upper m-b-1">Quiero que me contacten por:</label>
          <div class="boton_input grid-x m-b-2 h-a text-center">
              <div id="boton-seleccion-1" class="small-5 medium-3 h-a color-secundario-3-bd color-blanco-bg color-primario-0">Teléfono</div>
              <div id="boton-seleccion-2" class="small-5 medium-3 h-a color-secundario-3-bd">Email</div>
          </div>
          <!--  -->
          <label id="seleccionado-1" class="small-12 upper m-t-1">
            <input type="tel" name="telephone" id="tel" placeholder="Ingresa tu número de teléfono a 10 dígitos" class="input-email" value="">
          </label>
          <!-- opcion dos escondida -->
          <label id="seleccionado-2" class="small-12 upper m-t-1 hidden">
            <input type="email"  name="email" id="email" placeholder="Ingresa tu correo electrónico" class="input-email" value="">
          </label>

        </div>

        <fieldset class="grid-x align-center m-t-3">
          <button id="boton_form" class="boton-form rounded upper text-center p-l-6 p-r-6 p-t-1 p-b-1" type="submit" value="">Contáctanos</button>
        </fieldset>


        <!-- respuesta -->
        <p id="formResponse" class="color-primario-0 pt1"><?php //if($error) { echo($error); } ?></p>
        <p id="mensaje_res" class="success color-blanco"><i class="fa fa-success"></i></p>
        <div data-abide-error class="alert callout" style="display: none;">
          <p class="warning small_font"><i class="fa fa-alert"></i> Hay algunos errores, faltan campos obligatorios.</p>
        </div>
      </form>


      <!--  -->
    </div>


  </section>
