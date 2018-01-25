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


	<?php include(TEMPLATEPATH.'/mod-especiais-teste.php');?>
  
<div id="especiais" class="container no-padding">
  <?php include(TEMPLATEPATH.'/mod-eventos-teste.php');?>
</div>

  <?php include(TEMPLATEPATH.'/mod-videos2-teste.php');?>



<?php get_footer(); ?>
