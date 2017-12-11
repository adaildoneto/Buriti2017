<div class="row testesidebar">
  <div class="col s12 m12 l12 no-padding">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=9&cat=-15968, -15966, -167,-61, -38, -9, -178, -5, -1, -35');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>


<!-- Noticias 2 -->
    <div class="col s12 m4 l4">
      <div class="card painel-noticias">
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
            <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">

          </div>
        </a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">
                <?php echo get_post_meta( $post->ID,'chamada', true )?>
              </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                  <?php the_title();?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
              <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>
    </div>


<?php endwhile;endif;?>
<div class="clearfix"></div>

<!-- BoTão de mais notícias -->
    <div class="col s12">
    <a href="http://www.agencia.ac.gov.br/categoria/noticias" class="btn orange btn-mais">Mais notícias</a>
  </div>

</div>

</div>
