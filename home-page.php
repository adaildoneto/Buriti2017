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

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->
<div class="container">
	<?php include(TEMPLATEPATH.'/mod-noticias-teste.php');?>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->
<!-- INICIO - Módulo - Especiais -->
<div id="especiais" class="" style="padding: 0px 10px;">
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
