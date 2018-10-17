<div class="container">
  <div class="col s12 no-padding">

         <div class="col s6">

        <h4><i class="icon-logo-agencia2017-01"></i> No Gabinete</h4>
         </div>
         <div class="col s6" style="padding-top: 30px;">
         <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/categoria/no-gabinete/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
     </a>
         </div>


  </div>
 <div class="container" >
   <?php

    $myargs = array (
      'pagination'             => true,
      'cat'							       => array ('61'),
      'posts_per_page'         => 3,
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $myquery = new WP_Query( $myargs );

    // The Loop
    while ( $myquery->have_posts() ) {

        $myquery->the_post();



        get_template_part( 'destaque', 'gabinete' );


              wp_reset_postdata();

      }

    ?>


</div>
</div>
