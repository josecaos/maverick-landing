
$( document ).ready(function() {
  init()

  //
  $("#hello").submit(function() {
    // if ($("#g-recaptcha-response").val()) {
    $.post('form/mail.php', {
      name: $('#nombre').val(),
      interest: $('#interes').val(),
      telephone: $('#tel').val(),
      email: $('#email').val(),
      // message: $('#inputMessage').val(),
      // captchaResponse: $('#g-recaptcha-response').val(),
      contactFormSubmitted: 'yes'
    },
    function(data) {
      console.log(data);
      $("#mensaje_res").html(data);
    });
    // alert("asgsd g respuesta ")
    return false;

    // } else {
    //   $("#formResponse").html('Sorry, the verification code is incorrect. Try again').fadeIn('2000');
    //   return false;
    // }
  });
  //
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

// alert("SUSHIII")
      $("#seleccionado-1, #seleccionado-2").toggleClass('hidden')
      $(".boton_input div").toggleClass("color-blanco-bg color-primario-0")

    })

  }
