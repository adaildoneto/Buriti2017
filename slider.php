
  <div class="col s12 m12 l6">
  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
    <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
      <div class="bloco-slider-noticias">
        <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
      </div>
    </div>
  </a>
  <div class="nocanto2">
    <span class="data-post white-text"> <?php the_time('d.m.Y');?> </span></br>
    <span class="hora-post white-text"> <?php the_time('G:i');?></span></br>

  </div>
  <div class="clearfix"></div>
  </div>
