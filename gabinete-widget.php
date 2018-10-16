  <?php
$args = array (
  'pagination'             => false,
  'showposts'              => 1,
  'category'               => array ('61'),
  'ignore_sticky_posts'    => true,

);
// The Query
$query = new WP_Query( $args );

// The Loop
while ( $query->have_posts() ) {

    $query->the_post();


               get_template_part ('destaque', 'gabinete');


    wp_reset_postdata();

  }
?>
