<?php
/*
Template Name: Página do Resultados 2017
*/
?>
<?php get_header(); ?>
<div class="row header img-slider" style="width:100%; height: 720px; background: url('<?php the_post_thumbnail_url( 'slider-noticias' ); ?>'); background-repeat: no-repeat; background-position: bottom;">




   </div>




<!-- INICIO - Módulo - Slider -->
<div class="container">
    <div class="header-espaco">
<h1>RESULTADOS 2017</h1>
  </div>
</div>
<div class="container">
  <div class="row">
   <div class="slider-noticias-container">
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >

      <div class="slider-noticias img-slider" style="background: url('<?php the_post_thumbnail_url( 'slider-post' ); ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >

      <div class="slider-noticias img-slider" style="background: url('<?php the_post_thumbnail_url( 'slider-post' ); ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>


  </div>
  </div>
</div>

<!-- Encontro Segurança -->

<div class="row" style="">
  <div class="container">
<div class="col s12 no-padding">

          <div class="col s6">

         <h5><i class="icon-logo-agencia2017-01"></i> Sobre o Acre na #COP23</h5>
          </div>
          <div class="col s6" style="padding-top: 30px;">
          <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/tag/acrenacop23/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
      </a>
          </div>


   </div>

  <div class="no-padding">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=12');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>


<!-- Noticias 2 -->
<div class="col s12 m4 l4">
    <div class="card painel-noticias">

          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

        <div class="bloco-img-noticias2 especiais-img img-slider efeito" style="background: url('<?php the_post_thumbnail_url('slider-noticias');; ?>');">

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

</div>


<?php endwhile;endif;?>
<div class="clearfix"></div>

<!-- BoTão de mais notícias -->


</div>
</div>
</div>



<!-- BoTão de mais notícias -->
    <div class="col s12">
    <a href="http://www.agencia.ac.gov.br/categoria/noticias" class="btn orange btn-mais">Mais notícias</a>
  </div>

</div>
</div>
</div>


<?php get_footer(); ?>
