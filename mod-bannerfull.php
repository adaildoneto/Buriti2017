
  <div class="parallax-container">
      <div class="parallax"><img src="http://www.agencia.ac.gov.br/wp-content/uploads/2018/11/AH3K2917.jpg"></div>
<div class="container" style="margin-top:60px">

  <div class="shadowcss grande white-text flow-text center-align"><img class="responsive-img" src="http://www.agencia.ac.gov.br/wp-content/uploads/2018/11/PRONTOPARAOFUTURO.png" alt="Pronto para o futuro">
      </div>

  <div class="center-align">
   <div class="row hide-on-med-and-down" >
     <?php

      $myargs = array (
        'pagination'             => true,
        'tag'							       => array ('prontoparaofuturo'),
        'posts_per_page'         => 3,
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $myquery = new WP_Query( $myargs );

      // The Loop
      while ( $myquery->have_posts() ) {

          $myquery->the_post();



          get_template_part( 'destaque', 'quadrado' );


                wp_reset_postdata();

        }

      ?>


  </div>
  <div class="row hide-on-med-and-up" >
    <?php

     $myargs = array (
       'pagination'             => true,
       'tag'							       => array ('prontoparaofuturo'),
       'posts_per_page'         => 1,
       'ignore_sticky_posts'    => true,

     );
     // The Query
     $myquery = new WP_Query( $myargs );

     // The Loop
     while ( $myquery->have_posts() ) {

         $myquery->the_post();



         get_template_part( 'destaque', 'quadrado' );


               wp_reset_postdata();

       }

     ?>


 </div>

  <div class="row no-padding">

         <div class="col s6"> </div>
         <div class="col s6" style="padding-top: -20px;">
         <a class="right white-text" href="http://www.agencia.ac.gov.br/tag/prontoparaofuturo/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
     </a>
         </div>


  </div>
</div>

    </div>

</div>
