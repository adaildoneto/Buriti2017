<div class="row">




   <div class="col s12 m6 l8 right">
     <div class="col s12 no-padding">

            <div class="col s6">

           <h2><i class="icon-logo-agencia2017-01"></i> Especiais</h2>
            </div>
            <div class="col s6" style="padding-top: 30px;">
            <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/categoria/especiais/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
        </a>
            </div>


     </div>

   <?php query_posts('showposts=1');?>
   <?php if (have_posts()): while (have_posts()) : the_post();?>
     <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

        <div class="col s12 m12 no-padding">
          <div class="box-especiais-g especiais-img2 b1" style="background: url('<?php the_post_thumbnail_url( 'thumbnews' ); ?>'); height:400px;">
            <span class="titulo-especiais white-text"><?php the_title();?></span>
          </div>
        </div>
      </a>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>

    <?php query_posts('showposts=1&offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

         <div class="col s12 m12 no-padding">
           <div class="box-especiais-g especiais-img2 b1" style="background: url('<?php the_post_thumbnail_url( 'thumbnews' ); ?>');">
             <span class="titulo-especiais white-text"><?php the_title();?></span>
           </div>
         </div>
       </a>
     <?php endwhile;endif;?>
     <div class="clearfix"></div>

    <?php query_posts('showposts=4offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
      <a href="<?php the_Permalink()?>" title="<?php the_title();?>">

   <div class="col s12 m6 no-padding">
     <div class="box-especiais-p especiais-img2 b1" style="background: url('<?php the_post_thumbnail_url( 'thumbnews' ); ?>');">
       <span class="titulo-especiais white-text"><?php the_title();?></span>
     </div>
   </div>
 </a>
 <?php endwhile;endif;?>
 <div class="clearfix"></div>



</div>

<div class="col s12 m6 l4 left">
  <div class="row no-padding">

         <div class="col s6">

        <h2><i class="icon-logo-agencia2017-01"></i> Artigos</h2>
         </div>
         <div class="col s6" style="padding-top: 30px;">
         <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/categoria/especiais/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
     </a>
         </div>
</div>

  <div class="row">
    <div id="gabinetes">
      <div class="card orange darken-4">
        <h1 class="white-text">Testeando</h1>

    </div>
    <div class="card orange darken-4">
      <h1 class="white-text">Testeando</h1>

  </div>
  <div class="card orange darken-4">
    <h1 class="white-text">Testeando</h1>

  </div>
  <div class="card orange darken-4">
    <h1>Testeando</h1>

  </div>


      </div>

  </div>




</div>



</div>
