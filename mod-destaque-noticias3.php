<div class="row">
    <div class="container">

      <div class="col s12">
     <ul class="tabs">
       <li class="tab col s3"><a class="active orange-text darken-4-text" href="#test1">Destaques</a></li>
       <li class="tab col s3"><a class="orange-text darken-4-text" href="#test2">Segurança</a></li>
       <li class="tab col s3"><a class="orange-text darken-4-text" href="#test3">Saúde</a></li>
       <li class="tab col s3"><a class="orange-text darken-4-text" href="#test4">Educação</a></li>
     </ul>
    </div>

   <div id="test1" class="col s12">

      <?php
    $args = array (
      'pagination'             => false,
      'showposts'              => 1,
      'tag'                    => array ('destaque1'),
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

        wp_reset_postdata();

      }
    ?>

    <?php
  $args = array (
    'pagination'             => false,
    'showposts'              => 1,
    'tag'                    => array ('destaque2'),
    'ignore_sticky_posts'    => true,

  );
  // The Query
  $query = new WP_Query( $args );

  // The Loop
  while ( $query->have_posts() ) {

      $query->the_post();

      if ( $query->current_post == 0  ) {  // first post
                 get_template_part ('destaque', 'quadrado');
      }

      wp_reset_postdata();

    }
  ?>

  <?php
$args = array (
  'pagination'             => false,
  'showposts'              => 1,
  'tag'                    => array ('destaque3'),
  'ignore_sticky_posts'    => true,

);
// The Query
$query = new WP_Query( $args );

// The Loop
while ( $query->have_posts() ) {

    $query->the_post();

    if ( $query->current_post == 0  ) {  // first post
               get_template_part ('destaque', 'colorido');
    }

    wp_reset_postdata();

  }
?>

<?php
$args = array (
'pagination'             => false,
'showposts'              => 1,
'tag'                    => array ('destaque4'),
'ignore_sticky_posts'    => true,

);
// The Query
$query = new WP_Query( $args );

// The Loop
while ( $query->have_posts() ) {

  $query->the_post();

  if ( $query->current_post == 0  ) {  // first post
             get_template_part ('destaque', 'quadrado');
  }

  wp_reset_postdata();

}
?>

<?php
$args = array (
'pagination'             => false,
'showposts'              => 1,
'tag'                    => array ('destaque5'),
'ignore_sticky_posts'    => true,

);
// The Query
$query = new WP_Query( $args );

// The Loop
while ( $query->have_posts() ) {

  $query->the_post();

  if ( $query->current_post == 0  ) {  // first post
             get_template_part ('destaque', 'colorido');
  }

  wp_reset_postdata();

}
?>

  </div>

   <div id="test2" class="col s12">

     <?php


      $args = array (
        'pagination'             => false,
        'showposts'              => 1,
        'tag'                    => array ('boletimseguranca'),
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $query = new WP_Query( $args );

      // The Loop
      while ( $query->have_posts() ) {

        $query->the_post();

        get_template_part ('destaque', 'grande');


        wp_reset_postdata();

      }

       ?>

     <?php


      $args = array (
        'pagination'             => false,
        'showposts'              => 4,
        'cat'                    => array (17),
        'tag__not_in'            => array(21042),
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $query = new WP_Query( $args );

      // The Loop
      while ( $query->have_posts() ) {

          $query->the_post();

          if ( $query->current_post == 0  ) {  // first post

                     get_template_part ('destaque', 'colorido');

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


          wp_reset_postdata();

        }
      ?>


   </div>

   <div id="test3" class="col s12">

     <?php


      $args = array (
        'pagination'             => false,
        'showposts'              => 5,
        'cat'                    => array ('18'),
        'ignore_sticky_posts'    => true,

      );
      // The Query
      $query = new WP_Query( $args );

      // The Loop
      while ( $query->have_posts() ) {

          $query->the_post();

          if ( $query->current_post == 0  ) {  // first post

                     get_template_part ('destaque', 'quadrado');

          }
          if ( $query->current_post == 1  ) {  // first post

                     get_template_part ('destaque', 'grande');

          }
          if ( $query->current_post == 2  ) {  // first post

                     get_template_part ('destaque', 'quadrado');

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
        'cat'                    => array ('19'),
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

                     get_template_part ('destaque', 'quadrado');

          }
          if ( $query->current_post == 3  ) {  // first post

                     get_template_part ('destaque', 'colorido');

          }
          if ( $query->current_post == 4 ) {  // first post

                     get_template_part ('destaque', 'quadrado');

          }

          wp_reset_postdata();

        }
      ?>
   </div>



    </div>



</div>
