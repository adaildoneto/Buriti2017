<div class="row">
  <div id="grid" class="container">
<div class="grid-sizer col s12 m6 l4">

</div>
<!-- Noticias 1 // Inicio do Loop -->



<?php $args = array(
  'showposts' => 15,
  'cat' => array (-20452,-15968,-15966,-167,-61,-38,-9,-178,-5,-1,-35),
  'tag__not_in'  => array(18910,18911,18912,18913,18918,18907,19572,20142,20949,21042,21301),
);
$query = new WP_Query( $args );

// The Loop
while ( $query->have_posts() ) {

    $query->the_post();

   if  ( has_tag( 'rios2018' ) ) {  // Destaque Retangular


      get_template_part( 'destaque', 'quadrado' );

  }


  else if (  has_tag( 'destaque2' ) ) {  // Destaque GRande


       get_template_part( 'destaque', 'quadrado' );

     }

     else if ( in_category( 'governo' ) ) {  // Destaque GRande


          get_template_part( 'destaque', 'grande' );

        }
        else if ( in_category( 'seguranca' ) ) {  // Destaque GRande


             get_template_part( 'destaque', 'quadrado' );

           }
           else if ( in_category( '55' ) ) {  // Destaque GRande


                get_template_part( 'destaque', 'colorido' );

              }


  else if (  has_tag( 'destaque4' ) ) {  // destaque foto

           get_template_part( 'destaque', 'colorido' );


 } else {

    get_template_part( 'normal', '' );
  }

  if ( is_dynamic_sidebar('publicidade-teste') ) {
					if ( $query->current_post == 3 ) {  // first post

							dynamic_sidebar('publicidade-teste');
              dynamic_sidebar('publicidade-banner');

            get_template_part('tempo','widget');


			 								}
					}



  wp_reset_postdata();

}
?>



<!-- BoTão de mais notícias -->


</div>
<div class="col s12">
<a href="http://www.agencia.ac.gov.br/categoria/noticias/" class="btn orange btn-mais">Mais notícias</a>
</div>

</div>
