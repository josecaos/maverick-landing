
</main>

<footer class="footer grid-x p-t-2 p-b-2 color-secundario-5-bg color-secundario-1">

  <div class="footer-item small-12 medium-4 h-a text-center">
    <i class="icono-footer fa fa-globe"> </i>&nbsp; <a href="#" target="_blank">Visita nuestio sitio</a>
  </div>
  <div class="footer-item small-12 medium-4 h-a text-center">
    Maverick&nbsp;&nbsp;<i class="fa fa-copyright"></i>&nbsp;&nbsp;2017. All right reserved
  </div>
  <div class="small-12 medium-4 h-a text-center">
    <?php
    $iconos = array(
      'facebook',
      'instagram',
      'linkedin'
    );
    $links = array(
      'http://facebook.com/maverick.brandagency',
      'http://instagram.com/maverick_brandagency',
      'http://linkedin.com/company/16178731'
    );
    for ($i=0; $i < 3; $i++):
      ?>
        <a href="<?php echo $links[$i];?>" target="_blank">
          <i class="icono-footer p-l-1-2 fa fa-<?php echo $iconos[$i];?>"></i>
        </a>

    <?php endfor; ?>
  </div>

</footer>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/what-input/dist/what-input.js"></script>
<script src="bower_components/foundation-sites/dist/js/foundation.js"></script>
<script src="bower_components/imgLiquid/js/imgLiquid-min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
