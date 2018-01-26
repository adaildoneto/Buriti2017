<div class="col s12 m8 l8 grid-item grid-width">
      <div class="card painel-noticias">

        <div class="background">
          <?php
          $imgID = get_option ('odin_general');
          $imgMENU = wp_get_attachment_image_src( $imgID['imagemmenu'], 'slider-noticias');
                     ?>
          <img width="300" src="<?php echo $imgMENU[0]?>">

        </div>
<div id="weather"></div>
      <div class="row" style="padding-top: 80px;">

      </div>
      </div>
</div>
