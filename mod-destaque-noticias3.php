<div class="row">
    <div class="container">

      <div class="col s12">
     <ul class="tabs">
       <li class="tab col s3"><a href="#test1">Destaques</a></li>
       <li class="tab col s3"><a class="active" href="#test2">Carnaval</a></li>
       <li class="tab col s3"><a href="#test3">Segurança</a></li>
       <li class="tab col s3"><a href="#test4">Artigos</a></li>
     </ul>
    </div>

   <div id="test1" class="col s12">

     <?php


    $args = array (
      'pagination'             => false,
      'showposts'              => 5,
      'tag'                    => array ('destaque1, destaque2, destaque3, destaque4, destaque5'),
      'ignore_sticky_posts'    => true,

    );
    // The Query
    $query = new WP_Query( $args );

    // The Loop
    while ( $query->have_posts() ) {

        $query->the_post();

        if ( $query->current_post == 0  ) {  // first post

                   get_template_part ('destaque', 'grande');

        }
        if ( $query->current_post == 1  ) {  // first post

                   get_template_part ('destaque', 'quadrado');

        }
        if ( $query->current_post == 2  ) {  // first post

                   get_template_part ('normal', '');

        }
        if ( $query->current_post == 3  ) {  // first post

                   get_template_part ('destaque', 'colorido');

        }
        if ( $query->current_post == 4 ) {  // first post

                   get_template_part ('normal', '');

        }

        wp_reset_postdata();

      }
    ?>

  </div>

   <div id="test2" class="col s12">
     <?php


      $args = array (
        'pagination'             => false,
        'showposts'              => 5,
        'tag'                    => array ('carnaval'),
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $query = new WP_Query( $args );

      // The Loop
      while ( $query->have_posts() ) {

          $query->the_post();

          if ( $query->current_post == 0  ) {  // first post

                     get_template_part ('destaque', 'grande');

          }
          if ( $query->current_post == 1  ) {  // first post

                     get_template_part ('destaque', 'quadrado');

          }
          if ( $query->current_post == 2  ) {  // first post

                     get_template_part ('destaque', 'colorido');

          }
          if ( $query->current_post == 3  ) {  // first post

                     get_template_part ('destaque', 'quadrado');

          }
          if ( $query->current_post == 4 ) {  // first post

                     get_template_part ('destaque', 'colorido');

          }

          wp_reset_postdata();

        }
      ?>

   </div>

   <div id="test3" class="col s12">

     <?php


      $args = array (
        'pagination'             => false,
        'showposts'              => 5,
        'cat'                    => array ('seguranca'),
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $query = new WP_Query( $args );

      // The Loop
      while ( $query->have_posts() ) {

          $query->the_post();

          if ( $query->current_post == 0  ) {  // first post

                     get_template_part ('destaque', 'grande');

          }
          if ( $query->current_post == 1  ) {  // first post

                     get_template_part ('destaque', 'quadrado');

          }
          if ( $query->current_post == 2  ) {  // first post

                     get_template_part ('destaque', 'colorido');

          }
          if ( $query->current_post == 3  ) {  // first post

                     get_template_part ('destaque', 'grande');

          }


          wp_reset_postdata();

        }
      ?>
   </div>

   <div id="test4" class="col s12">

     <?php


      $args = array (
        'pagination'             => false,
        'showposts'              => 5,
        'cat'                    => array ('artigo'),
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $query = new WP_Query( $args );

      // The Loop
      while ( $query->have_posts() ) {

          $query->the_post();

          if ( $query->current_post == 0  ) {  // first post

                     get_template_part ('destaque', 'grande');

          }
          if ( $query->current_post == 1  ) {  // first post

                     get_template_part ('destaque', 'colorido');

          }
          if ( $query->current_post == 2  ) {  // first post

                     get_template_part ('destaque', 'colorido');

          }
          if ( $query->current_post == 3  ) {  // first post

                     get_template_part ('destaque', 'colorido');

          }
          if ( $query->current_post == 4 ) {  // first post

                     get_template_part ('destaque', 'colorido');

          }

          wp_reset_postdata();

        }
      ?>
   </div>



    </div>



</div>
