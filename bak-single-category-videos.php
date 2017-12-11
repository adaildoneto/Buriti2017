<?php get_header(single);?>
<div class="row grey darken-3">
<div class="container">



      <?php while (have_posts()) : the_post();?>

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

    <div class="row no-padding">

		<div class="header-post"></div>
<div class="col s12 m10 l8 offset-l2 offset-m1">
    <div class="video-container">
      <?php $videoid = get_post_meta( $post->ID,'videoid', true ); ?>
        <iframe width="560" height="315" src="  https://www.youtube.com/embed/<?php echo $videoid ?>" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
        </div>
    </div>

  </div>
    <div class="container">
    <div class="row">
        <div class="col m1 l1 push-l1"  >
            <div class="btnsocial hide-on-med-and-down">
                <?php include(TEMPLATEPATH.'/mod-btnsocial.php');?>
            </div>
        </div>
        <div class="col s12 m10 l8 offset-l1 no-padding">
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
                    <span class="data-post"> <?php the_time('d.m.Y');?> </span>
                    <span class="hora-post"> <?php the_time('G:i');?></span>

                    	 <div class="clearfix"></div>
                </div>
                <div class="card-content">

                    <p><?php the_content(__('Leia mais'));?></p>

                  <p> <span class="tag small"><?php the_tags(); ?></span> </p>

  <div class="right tamanho-icones">
      <?php include(TEMPLATEPATH.'/mod-social.php');?>
    </div>
  <?php include(TEMPLATEPATH.'/mod-btncurtiu.php');?>

                </div>
            </div>
        </div>
    </div>

  <?php endwhile;?>
</div>





</div>

<!-- INICIO - Módulo - Mais Notícias e Sidebar -->

<div class="container">
  <h3>Mais notícias</h3>
	<?php include(TEMPLATEPATH.'/mod-noticias-post.php');?>
</div>
<!-- FIM - Módulo - Mais Notícias e Sidebar -->

<?php get_footer(single);?>
