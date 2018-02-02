<div class="row">
    <div class="container">

      <?php

       $args = array (
         'pagination'             => false,
         'showposts'         => 5,
         'ignore_sticky_posts'    => true,

       );
       // The Query
       $query = new WP_Query( $args );

       // The Loop
       while ( $query->have_posts() ) {

           $query->the_post();

           if ( $query->current_post == 0  ) {  // first post
                if ( has_tag('destaque1') ) {
                      get_template_part ('destaque', 'grande');
                }
           }
           if ( $query->current_post == 1  ) {  // first post
                if ( has_tag('destaque2') ) {
                      get_template_part ('destaque', 'quadrado');
                }
           }
           if ( $query->current_post == 2  ) {  // first post
                if ( has_tag('destaque3') ) {
                      get_template_part ('normal', '');
                }
           }
           if ( $query->current_post == 3  ) {  // first post
                if ( has_tag('destaque4') ) {
                      get_template_part ('destaque', 'colorido');
                }
           }
           if ( $query->current_post == 4 ) {  // first post
                if ( has_tag('destaque5') ) {
                      get_template_part ('normal', '');
                }
           }

           wp_reset_postdata();

         }
       ?>

    </div>



</div>
