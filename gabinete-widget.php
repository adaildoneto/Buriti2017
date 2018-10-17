  <?php
$myargs = array (
  'pagination'             => false,
  'showposts'              => 1,
  'category'               => array ('61'),
  'ignore_sticky_posts'    => true,

);
// The Query
$myquery = new WP_Query( $myargs );

// The Loop
while ( $myquery->have_posts() ) {

    $myquery->the_post();


               get_template_part ('destaque', 'gabinete');


    wp_reset_postdata();

  }
?>
