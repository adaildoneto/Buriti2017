<?php
/*
Template Name: Página do Resultados 2017
*/
?>
<?php get_header(); ?>
<div class="row header img-slider" style="width:100%; height: 720px; background: url('<?php the_post_thumbnail_url(); ?>'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <?php while (have_posts()) : the_post();?>
<div class="container">
  <div class="col s12 m12 l8 offset-l2">
    <div class="aligncenter" style="margin-top:400px;margin-botom:50px;">
        <h1 class="tituloefeito3d grande white-text"><?php the_title(); ?></h1>
    </div>

  </div>

  <div class="col s12 m12 l10 no-padding post offset-l1">
      <div id="post" class="card postex" style="">




          <div class="card-action info-post">
            <div class="right flow-text">
            <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
            <div class="left">
              <span class="data-post"> <?php the_time('d.m.Y');?> </span>
              <span class="hora-post"> <?php the_time('G:i');?></span>

            </div>


                        </div>
          <div class="card-content">

              <?php the_content();?>




<?php include(TEMPLATEPATH.'/mod-btncurtiu.php');?>

          </div>
      </div>
  </div>

</div>


   </div>

<?php endwhile; ?>


<!-- INICIO - Módulo - Slider -->
<div class="container">
    <div class="col s12">
<h4>Veja aqui:</h4>
  </div>

<div class="row">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=9&tag=resultados2017');?>
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
<div class="col s12">
<a href="http://www.agencia.ac.gov.br/categoria/noticias" class="btn orange btn-mais">Mais notícias</a>
</div>

<!-- BoTão de mais notícias -->


</div>
</div>




<!-- BoTão de mais notícias -->




<?php get_footer(); ?>
