<div class="col s12 m6 l4 grid-item">
      <div class="card painel-noticias">

        <a href="#<?php $post_id = get_the_ID(); echo $post_id; ?>" title="<?php the_title();?>" class="modal-trigger">


          <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php the_post_thumbnail_url('thumbnews'); ?>');">
          </div></a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">   <?php echo get_post_meta( $post->ID,'chamada', true )?> </span>
              <a href="#<?php $post_id = get_the_ID(); echo $post_id; ?>" title="<?php the_title();?>" class="modal-trigger destaque-fonte orange-text darken-2">
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
          <div class="nocanto2">
            <span class="data-post white-text"> <?php the_time('d.m.Y');?> </span></br>
            <span class="hora-post white-text"> <?php the_time('G:i');?></span></br>

          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>

    <div class="clearfix"></div>
  </div>
  <!-- modal -->
  <div id="<?php $post_id = get_the_ID(); echo $post_id; ?>" class="modal">
    <div class="modal-content">
      <?php  if (has_excerpt() ) { ?>
      <h2><?php the_excerpt(); ?></h2>
      <?php } ?>
            <p><?php the_content(__('Leia mais'));?></p>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
  </div>
