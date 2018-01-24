<div class="row blue-grey darken-4">
  <div class="col s6 no-padding">
    <h2 class="oranget-text darken-4-text"><i class="fa fa-play-circle oranget-text darken-4-text" aria-hidden="true"></i> Vídeos</h2>
  </div>
  <div class="col s6" style="padding-top: 30px;">
  <a class="right grey-text text-darken-3" href="/categoria/videos">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i></a>
  </div>
</div>
<div class="row">

  <!-- <div id="videos-youtube"></div> -->

<?php query_posts('showposts=3');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>
  <div class="col s12 m4 no-padding">


    <a  href="<?php the_Permalink(); ?>" title="<?php the_title();?>">

    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
    <div class="box-videos especiais-img efeito img-slider b3" style="background: url('<?php echo $image[0]; ?>');border-radius: 2px 0 0 2px;">
      <i class="material-icons white-text">play_circle_outline</i>

      <span class="titulo-especiais white-text"> <?php the_title();?> </span>
    </div>
    </a>

  </div>
  <?php if ( is_dynamic_sidebar('publicidade-teste') ) {
          if ( $query->current_post == 0 ) {  // first post

              dynamic_sidebar('publicidade-teste');


                      }
          }



  wp_reset_postdata(); ?>

<?php endwhile;endif;?>
<div class="clearfix"></div>

<!-- Modal de Vídeos -->


<!-- Descrição do Modal -->




</div>

  </div>
