<div class="col s12 m4 l4 grid-item">
    <div class="card painel-noticias">
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque2' ); ?>
        <div class="bloco-img-noticias2 especiais-img img-slider efeito" style="background: url('<?php echo $image[0]; ?>');">

        </div>  </a>
   <div class="categoria nocanto1">
            <?php $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                  echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                  }?>
        </div>
        <div class="bloco-des-noticias2">
            <div class="card-content">
                <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="white-text destaque-fonte">
                  <?php
                  $tituloPost = get_the_title();
                  $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                  if(empty($tituloCapa)){
                     $titulo = $tituloPost;
                  }else{
                    $titulo = $tituloCapa;
                  }
                  echo $titulo;
                  ?>
                </a>
            </div>
        </div>
        <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
        </div>
    </div>

  <div class="clearfix"></div>
</div>
