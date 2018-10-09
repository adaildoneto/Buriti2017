  <div class="col s12 m4 l4">

    <div id="sidebar">
    <div class="card painel-noticias" style="margin-bottom: 23px;">
      <?php query_posts('showposts=1&cat=5');?>
      <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
          <div class="bloco-img-noticias3 especiais-img linha-video" style="background: url('<?php echo $image[0]; ?>');">
            <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip darken-3 left  red" style="position: absolute;  left: 0px; "><i class="fa fa-video-camera white-text" aria-hidden="true"></i></span>Vídeos</span>
        </div></a>
        <div class="bloco-des-video">
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="red-text center-align">
                <?php the_title();?>
            </a>
        </div>
        <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social.php');?>
        </div>
      <?php endwhile;endif;?>
      <div class="clearfix"></div>
    </div> <!-- Fim do Vídeo Giro de Notícias -->

    <div class="nogabinetes">
      <?php query_posts('showposts=1&cat=69');?>
      <?php if (have_posts()): while (have_posts()) : the_post();?>
        <div>
          <div class="card painel-artigo orange">
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'artigo' ); ?>
          <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">
              <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip left  orange" style=" position: absolute;  left: 0px; "><i class="fa white-text fa-file-text" aria-hidden="true"></i></span>Artigo</span>
          </div></a>

          <div class="bloco-des-artigo">
              <a class="white-text" href="<?php the_Permalink()?>" title="<?php the_title();?>"><?php the_title();?></a>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
          </div>
        <?php endwhile;endif;?>
        <div class="clearfix"></div>
      </div>
    <!-- Fim div Artigo -->
    </div>
      </div> <!-- Fim div Sidebar -->

    <div class="card painel-noticias2" style="margin-bottom: 23px;">
      <?php query_posts('showposts=1&cat=61');?>
      <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
          <div class="bloco-img-noticias3 especiais-img linha-nogabinete" style="background: url('<?php echo $image[0]; ?>');">
            <span class="chip z-depth-1-half nocanto1 espaco1"><span class="chip green darken-4 left " style=" position: absolute;  left: 0px; "><i class="fa fa-camera-retro white-text" aria-hidden="true"></i></span>No Gabinete</span>
        </div></a>
        <div class="bloco-des-nogabinete">

        </div>
        <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
        </div>
      <?php endwhile;endif;?>
      <div class="clearfix"></div>
    </div> <!-- Fim do No Gabinete -->

    <div>
  <?php dynamic_sidebar( 'publicidade-lateral' ); ?>
    </div>


  </div>
</div>
