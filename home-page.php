<?php
/*
Template Name: Teste novaHome
*/
?>


<?php

get_header(teste);

?>



<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row"  style="padding: 0 10px;">
     <?php include(TEMPLATEPATH.'/menu-integracao-teste.php');?>
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

          if ( in_category( 'esp' ) ) {  // destaque foto

        		 						 get_template_part( 'slider', 'grande' );


        			 } else {

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
	<?php include(TEMPLATEPATH.'/mod-destaque-noticias.php');?>
</div>

<?php include(TEMPLATEPATH.'/mod-bannerfull.php');?>

<!-- FIM - Módulo - Notícias -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-noticias-teste.php');?>
</div>

<!-- INICIO - Módulo - Agenda Cultural -->

  <?php include(TEMPLATEPATH.'/mod-eventos-teste.php');?>

<!-- FIM - Módulo - Agenda Cultural -->

<!-- INICIO - Módulo - Vídeos -->

  <?php include(TEMPLATEPATH.'/mod-videos2-teste.php');?>

<!-- FIM - Módulo - Vídeos -->

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->

<!-- FIM - Módulo - Mais Notícias e Sidebar -->
<!-- INICIO - Módulo - Especiais -->
<div id="especiais" class="" style="padding: 0px 10px;">
 	<?php include(TEMPLATEPATH.'/mod-especiais-teste.php');?>
</div>
<!-- FIM - Módulo - Especiais -->


<?php get_footer(); ?>
