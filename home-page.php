<?php
/*
Template Name: Teste novaHome
*/
?>


<?php

get_header();

?>



<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row"  style="padding: 0 10px;">
     <?php include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div>
<!-- FIM - Módulo - Chips -->
<!-- INICIO - Módulo - Slider -->
  <div class="row">
   <div class="slider-noticias-container">
     <?php

 			$args = array (
 			  'pagination'             => true,
 				'tag'										 => array ('slider'),
 			  'posts_per_page'         => 4,
 			  'ignore_sticky_posts'    => true,

 			);
 			// The Query
 			$query = new WP_Query( $args );

 			// The Loop
 			while ( $query->have_posts() ) {

 		      $query->the_post();

 		 {  // Destaque Retangular


 						get_template_part( 'slider', '' );

 				}


 		    wp_reset_postdata();

 }
 			?>


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
	<?php include(TEMPLATEPATH.'/mod-destaque-noticias-teste.php');?>
</div>

<div class="row">
  <div class="parallax-container">
      <div class="parallax"><img src="http://www.agencia.ac.gov.br/wp-content/uploads/2018/01/DJI_0014.jpg"></div>
<div style="margin-top:100px">
  <h1 class="tituloefeito3d grande white-text flow-text center-align">Monitoramento</br> dos Rios 2018</h1>
  <div class="center-align">
    <a class="waves-effect waves-light btn orange darken-5 " href="#http://www.agencia.ac.gov.br/monitoramento-dos-rios/"><i class="material-icons left">arrow_drop_down_circle</i>Acesse agora!</a>

  </div>
</div>

    </div>

</div>
<!-- FIM - Módulo - Notícias -->

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-noticias-teste.php');?>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->
<!-- INICIO - Módulo - Especiais -->
<div id="especiais" class="container" style="padding: 0px 10px;">
 	<?php include(TEMPLATEPATH.'/mod-especiais-teste.php');?>
</div>
<!-- FIM - Módulo - Especiais -->
<!-- INICIO - Módulo - Vídeos -->
<div id="especiais" class="container" style="padding: 0px 10px;">
  <?php include(TEMPLATEPATH.'/mod-videos2.php');?>
</div>
<!-- FIM - Módulo - Vídeos -->
<!-- INICIO - Módulo - Agenda Cultural -->
<div id="especiais" class="container no-padding">
  <?php include(TEMPLATEPATH.'/mod-eventos.php');?>
</div>
<!-- FIM - Módulo - Agenda Cultural -->
<?php get_footer(); ?>
