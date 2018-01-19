<div class="row">


  <div class="container no-padding">

         <div class="col s6">

        <h2><i class="icon-logo-agencia2017-01"></i> Especiais</h2>
         </div>
         <div class="col s6" style="padding-top: 30px;">
         <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/categoria/especiais/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
     </a>
         </div>


  </div>

</div>

<div class="row">
   <?php
   $args = array(
       'showposts' => 2,
       'category' => array ('especiais'),
       'tag__not_in'  => array(),
   );
        query_posts($args);?>
   <?php if (have_posts()): while (have_posts()) : the_post();?>
     <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

        <div class="col s12 m6 l6 no-padding">
          <div class="box-especiais-g especiais-img2 b1" style="background: url('<?php the_post_thumbnail_url( 'slider-noticias' ); ?>'); height:400px;">
            <span class="titulo-especiais white-text"><?php the_title();?></span>
          </div>
        </div>
      </a>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>

   <?php
        $args = array(
          'showposts' => 3,
          'category' => array ('especiais'),
          'offset'  => 2,
          'tag__not_in'  => array(),
      );
        query_posts('showposts=3');?>
   <?php if (have_posts()): while (have_posts()) : the_post();?>
     <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

        <div class="col s12 m4 l4 no-padding">
          <div class="box-especiais-g especiais-img2 b3" style="background: url('<?php the_post_thumbnail_url( 'slider-noticias' ); ?>'); height:250px;">
            <span class="titulo-especiais white-text"><?php the_title();?></span>
          </div>
        </div>
      </a>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>

</div>
