<div class="col s12 m6 l4">
    <div class="card painel-noticias">
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

        <div class="bloco-img-noticias2 especiais-img img-slider efeito" style="background: url('<?php the_post_thumbnail_url('slider-noticias'); ?>');">

        </div>  </a>
   <div class="categoria nocanto1">
            <?php $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                  echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                  }?>
        </div>
        <div class="bloco-des-noticias2">
            <div class="card-content">

            </div>
        </div>
        <div class="nocanto2">
          <span class="data-post white-text"> <?php the_time('d.m.Y');?> </span></br>
          <span class="hora-post white-text"> <?php the_time('G:i');?></span></br>

        </div>
        <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
        </div>
    </div>

  <div class="clearfix"></div>
</div>
