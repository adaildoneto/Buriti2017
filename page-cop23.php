<?php
/*
Template Name: Página da COP23
*/
?>
<?php get_header(); ?>
<div class="row header">
  <

  <div class="container"  style="padding: 0 10px; margin-top: 20px;">

        <div class="col s12 no-padding valign-wrapper center-align">
            <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/11/banner-cop23-agencia54.png" alt="">

            </div>


</div>
      <div id="RedeAldeia" class="container redealdeia no-padding">
         <div class="btn-aldeia">

					<div class="col s12 m4 l4"> <a href="http://www.amazonbonn.org/" class="waves-effect waves-teal btn-flat lighten-1 white-text modal-trigger">
                 <span class="fa fa-file"></span> Amazon Bonn</a></div>
					<div class="col s12 m4 l4"><a href='#' data-activates='documentos' class="dropdown-button waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="fa fa-plus-square"></span> Documentos</a></div>
            		<div class="col s12 m4 l4"><a href="#modal4" data-activates='' class="waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="fa fa-newspaper-o"></span> Identidade</a></div>

         </div>

     </div>

   </div>

</div>

<div id="modal4" class="modal">
   <div class="modal-content orange darken-4">
    <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/11/folder-bonn-cartariobranco.jpg" class="responsive-img">
   </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
   </div>
 </div>

  <ul  id='imprensa' class="collection dropdown-content tamanho">
      <li class="collection-item avatar">
    <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/avatar-julie.png" width="150" height="150" alt="" class="circle">
        <span class="title">Julie Messias</span>
        <p><i>Coordenadora da Assessoria de Comunicação</i> <br>
          +55 (68) 99226-0812 <br>
          juliemessias@hotmail.com
        </p>
      </li>
      <li class="divider"></li>
      <li class="collection-item avatar">
      <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/avatar-01.png" width="150" height="150" alt="" class="circle">
        <span class="title">Vássia Silveira</span>
        <p><i>Jornalista</i> <br>
          +55 (68) 99907 - 2515
        </p>
      </li>
      <li class="collection-item avatar">
        <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/avatar-02.png" width="150" height="150" alt="" class="circle">
        <span class="title">Caio Fulgêncio </span>
        <p><i>Jornalista</i> <br>
          +55 (68) 98115 - 4923
        </p>
      </li>
      <li class="collection-item avatar">
        <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/avatar-03.png" width="150" height="150" alt="" class="circle">
        <span class="title">Melissa B. Jares </span>
        <p><i>Jornalista</i> <br>
          +55 (68) 99988 - 7373
        </p>
      </li>


    </ul>

<ul id="documentos" class="dropdown-content collection tamanho">
    <li class="collection-item"><a href="http://www.agencia.ac.gov.br/acre-apresenta-caminho-para-desenvolvimento-sustentavel-durante-conferencia-do-clima-na-alemanha/" target="_blank">Acre apresenta caminho para desenvolvimento sustentável durante Conferência do Clima, na Alemanha</a></li>
    <li class="collection-item"><a href="http://www.agencia.ac.gov.br/acre-presents-a-way-to-sustainable-development-during-the-climate-conference-in-germany/" target="_blank">Acre presents a way to sustainable development during the Climate Conference, in Germany</a></li>
    <li class="collection-item"><a href="http://www.agencia.ac.gov.br/acre-presenta-un-camino-para-el-desarrollo-sostenible-durante-la-conferencia-de-cambio-climatico-en-alemania/" target="_blank">Acre presenta un camino para el desarrollo sostenible durante la Conferencia de Cambio Climático en Alemania</a></li>
    <li class="divider"></li>
  </ul>


<!-- INICIO - Módulo - Slider -->
<div class="container">
    <div class="header-espaco">

  </div>
</div>
<div class="container">
  <div class="row">
   <div class="slider-noticias-container">
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=acrenacop23');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=acrenacop23&offset=1');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=acrenacop23&offset=2');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&tag=acrenacop23&offset=3');?>
    <?php if (have_posts()): while (have_posts()) : the_post();?>
	<a href="<?php the_Permalink()?>" title="<?php the_title();?>" >
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias2' ); ?>
      <div class="slider-noticias img-slider" style="background: url('<?php echo $image[0]; ?>');">
        <div class="bloco-slider-noticias">
          <h2><span class="line-text orange darken-2"></span><?php the_title();?></h2>
        </div>
      </div>
	</a>
<?php endwhile;endif;?>
<div class="clearfix"></div>
    </div>
  </div>
  </div>
</div>

<!-- Encontro Segurança -->

<div class="row" style="">
  <div class="container">
<div class="col s12 no-padding">

          <div class="col s6">

         <h5><i class="icon-logo-agencia2017-01"></i> Sobre o Acre na #COP23</h5>
          </div>
          <div class="col s6" style="padding-top: 30px;">
          <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/tag/acrenacop23/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
      </a>
          </div>


   </div>

  <div class="no-padding">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=3&tag=acrenacop23&offset=4');?>
<?php if (have_posts()): while (have_posts()) : the_post();?>


<!-- Noticias 2 -->
    <div class="col s12 m4 l4">
      <div class="card painel-noticias">
        <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="">
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
            <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">

          </div>
        </a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">
                <?php echo get_post_meta( $post->ID,'chamada', true )?>
              </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                  <?php the_title();?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
              <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>
    </div>


<?php endwhile;endif;?>
<div class="clearfix"></div>

<!-- BoTão de mais notícias -->


</div>
</div>
</div>



 <!-- Modal Structure -->

   <div id="modal1" class="modal"  tabindex="-1">
     <div class="modal-content black">
          <div class="video-container">

         </div>
     </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close btn-flat"><i class="material-icons">close</i></a>
   </div>
   </div>


   <div class="row" style="">
     <div class="container">
   <div class="col s12 m10 l10 offset-m1 offset-l1">
          <a href="https://amazonbonn.org/" target="_blank">  <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/11/amazonbon.png" alt="" class="responsive-img"></a>
      </div>
    </div>
  </div>


<!--infograficos -->
<div class="row header2 valign-wrapper" style="padding: 0 10px; margin-top: 20px;">

  <div class="container">
  <div class="col s12 m8 l10 offset-l1 offset-m2">
    <div class="video-container">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/watch?v=RZIyg9zk9vg&list=PLaUNG7Bkd6v8rBIsv-QHqVKILd2UJWugj" frameborder="0" allowfullscreen></iframe>
    </div>

  </div>


  </div>




   </div>


   <div id="extensao" class="modal"  tabindex="-1">
     <div class="modal-content black">
          <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/infosgrafos-04.png" class="responsive-img" alt="">
     </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close btn-flat"><i class="material-icons">close</i></a>
   </div>
   </div>

   <div id="mercado" class="modal"  tabindex="-1">
     <div class="modal-content black">
          <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/infosgrafos-02.png" class="responsive-img" alt="">
     </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close btn-flat"><i class="material-icons">close</i></a>
   </div>
   </div>

   <div id="atlas" class="modal"  tabindex="-1">
     <div class="modal-content black">
          <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/infosgrafos-03.png" class="responsive-img" alt="">
     </div>
   <div class="modal-footer">
     <a href="#!" class="modal-action modal-close btn-flat"><i class="material-icons">close</i></a>
   </div>
   </div>




<?php get_footer(); ?>
