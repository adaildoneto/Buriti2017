<?php get_header(); ?>

<!-- pop up que abre uma vez por dia

<div id="modal1" class="modal">
    <div class="modal-content">
      <a href="http://www.agencia.ac.gov.br/resultados-2017/">  <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/12/banner-resultados2017.png" class="responsive-img sem-margem"></a>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
    </div>
  </div>

   fim do pop up -->

<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row"  style="padding: 0 10px;">
     <?php include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div>
<!-- FIM - Módulo - Chips -->
<!-- INICIO - Módulo - Slider -->
  <div class="row">
   <div class="slider-noticias-container">
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=slider');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >

      <div class="slider-noticias img-slider" style="background: url('<?php the_post_thumbnail_url('slider-noticias');; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=slider&offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >

      <div class="slider-noticias img-slider" style="background: url('<?php the_post_thumbnail_url('slider-noticias');; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=slider&offset=2');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >

      <div class="slider-noticias img-slider" style="background: url('<?php the_post_thumbnail_url('slider-noticias');; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=slider&offset=3');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >

      <div class="slider-noticias img-slider" style="background: url('<?php the_post_thumbnail_url('slider-noticias');; ?>');">
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
  <!-- FIM - Módulo - Slider -->
</div>

<!-- INICIO - Módulo - Notícias -->
<div class="row">
<div class="container">
  <?php dynamic_sidebar( 'publicidade-topo' ); ?>

</div>
</div>
<!-- FIM - Módulo - Notícias -->

<!-- INICIO - Módulo - Notícias -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-destaque-noticias.php');?>
</div>
<!-- FIM - Módulo - Notícias -->

<!-- Banner full -->
<?php include(TEMPLATEPATH.'/mod-bannerfull.php'); ?>

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-noticias.php');?>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->
<!-- INICIO - Módulo - Especiais -->
<div id="especiais" class="container" style="padding: 0px 10px;">
 	<?php include(TEMPLATEPATH.'/mod-especiais.php');?>
</div>
<!-- FIM - Módulo - Especiais -->
<!-- INICIO - Módulo - Vídeos -->
<div id="especiais" class="container" style="padding: 0px 10px;">
  <?php include(TEMPLATEPATH.'/mod-videos.php');?>
</div>
<!-- FIM - Módulo - Vídeos -->
<!-- INICIO - Módulo - Agenda Cultural -->
<div id="especiais" class="container no-padding">
  <?php include(TEMPLATEPATH.'/mod-eventos.php');?>
</div>
<!-- FIM - Módulo - Agenda Cultural -->
<?php get_footer(); ?>
