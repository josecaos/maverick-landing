
$( document ).ready(function() {
  init()
  //
  var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
  $("#hello").submit(function() {
    var envio = false
    var nombre = $('#nombre')
    var apellido = $('#apellido')
    var interes = $('#interes')
    var telefono = $('#tel')
    var correo = $('#email')
    if(!nombre.val()) {
      $("#mensaje_res").html('Falta el campo "Nombre"');
      return false;
    } else if (!apellido.val()) {
      $("#mensaje_res").html('Falta el campo "Apellido"');
      return false;
    } else if (!interes.val()) {
      $("#mensaje_res").html('Falta el campo "Interés"');
      return false;
    } else if (!telefono.val() || !correo.val()) {
      if ($("#seleccionado-2").hasClass('hidden')) {
        if (!telefono.val()) {
          $("#mensaje_res").html('Falta el campo "Teléfono"');
          return false;
        } else {envio = true}
      } else if ($("#seleccionado-1").hasClass('hidden')) {
        if (!correo.val() || !expr.test(correo.val())) {
          $("#mensaje_res").html('Falta el campo "Correo" o un formato admitido "@" ');
          return false;
        } else {envio = true}
      }
    } else {envio = true}

    if (envio === true) {
      $.post('form/mail.php', {
        name: nombre.val(),
        secondname: apellido.val(),
        interest: interes.val(),
        telephone: telefono.val(),
        email: correo.val(),
        contactFormSubmitted: 'yes'
      },
      function(data) {
        $("#mensaje_res").html(data);
      })
      return false
    }
    //
  });
});

function init() {

  imgLiquid()
  toggleInput()

}

function imgLiquid() {
  $('.imgLiquid.imgLiquidFill').imgLiquid()
  $('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false})
  $('.imgLiquid.imgLiquidNoFillTop').imgLiquid({fill:false, verticalAlign: 'top'})
  $('.imgLiquid.imgLiquidNoFillLeft').imgLiquid({fill:false, horizontalAlign: 'left'})
}

function toggleInput() {
  $("#boton-seleccion-1, #boton-seleccion-2").on('click', function() {
    if($("#seleccionado-2").hasClass('hidden')) {
      $("#tel").removeAttr('required',false)
      $("#email").attr('required',true)
      $("#seleccionado-1, #seleccionado-2").toggleClass('hidden')
      $(".boton_input div").toggleClass("color-blanco-bg color-primario-0")
    } else if($("#seleccionado-1").hasClass('hidden')) {
      $("#email").removeAttr('required',false)
      $("#tel").attr('required',true)
      $("#seleccionado-1, #seleccionado-2").toggleClass('hidden')
      $(".boton_input div").toggleClass("color-blanco-bg color-primario-0")
    }
  })
}
