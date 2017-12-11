
$( document ).ready(function() {
    init()
});

function init() {

  imgLiquid()

}

function imgLiquid() {
  $('.imgLiquid.imgLiquidFill').imgLiquid()
  $('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false})
  $('.imgLiquid.imgLiquidNoFillTop').imgLiquid({fill:false, verticalAlign: 'top'})
  $('.imgLiquid.imgLiquidNoFillLeft').imgLiquid({fill:false, horizontalAlign: 'left'})

}
