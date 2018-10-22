<?php
/*
Template Name: Transição 2018
*/
?>
<?php get_header(teste);?>
  <?php while (have_posts()) : the_post();?>
    <div class="row no-padding">

        <div class="especiais-img img-post2" style="background: url('<?php the_post_thumbnail_url('photoswipe_full'); ?>') no-repeat;">
        </div>
    </div>

<div class="container">





        <?php
global $short_url;
// Checar se ja existe um URL encurtado armazenado no banco de dados
if(get_post_meta($post->ID, "short_url", true) != ""){
  //Short URL already exists, pull from post meta
  $short_url = get_post_meta($post->ID, "short_url", true);
}
else {
  // Caso não tenha, vamos criar uma
  $full_url = get_permalink();
  $short_url = make_bitly_url($full_url);
  // Salvar no port_meta
  add_post_meta($post->ID, 'short_url', $short_url, true);
}
?>


    <div class="container testepin">
    <div class="row">
        <div class="col m1 l1"  >
            <div class="btnsocial hide-on-med-and-down">
                <?php include(TEMPLATEPATH.'/mod-btnsocial.php');?>
            </div>
        </div>
        <div class="col s12 m10 l10 no-padding post ">
            <div id="post" class="card" style="">



	     <div class="card-content flow-text">

		          <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>

                  <div class="">
                      <h1><?php the_title();?></h1>
                    </div>

                    <div class="right-align flow-text hide-on-med-and-up">
                      <?php include(TEMPLATEPATH.'/mod-social.php');?>
                    </div>

                </div>
                <div class="card-action info-post">
                    <span class="autor-post">
                      <?php

                          $alias = get_post_meta($post->ID,'author_alias',true);
                      if(empty($alias)){
                        echo  $author = get_the_author_link();
                      }else{
                        echo $author = $alias;
                      }
                      ?>

                    </span></br>
                    <span class="data-post"> <?php the_time('d.m.Y');?> </span>
                    <span class="hora-post"> <?php the_time('G:i');?></span>

                    	 <div class="clearfix"></div>
                </div>
                <div class="card-content">

                    <p><?php the_content(__('Leia mais'));?></p>




  <?php include(TEMPLATEPATH.'/mod-btncurtiu.php');?>

                </div>
            </div>
        </div>
    </div>


</div>





</div>

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->
<div class="row">


<div id="grid" class="container">

  <?php $args = array(
    'showposts' => 15,
    'tag' => array (especial2018),
    );
  $query = new WP_Query( $args );

  // The Loop
  while ( $query->have_posts() ) {

      $query->the_post();

     if  ( has_tag( 'grande' ) ) {  // Destaque Retangular


        get_template_part( 'destaque', 'grande' );

    }

       else if ( has_tag( 'quadrado' ) ) {  // Destaque GRande


            get_template_part( 'destaque', 'quadrado' );

          }

         else {

      get_template_part( 'normal', '' );
    }


    wp_reset_postdata();

  }

  ?>

    <?php endwhile;?>

  <div class="grid-sizer col s12 m6 l4">

  </div>
</div>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->

<?php get_footer();?>
