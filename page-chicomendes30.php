<?php
/*
Template Name: Chico Mendes
*/
?>
<?php get_header(teste); ?>
<div class="row header">
  <div class="container"  style="padding: 0 10px; margin-top: 20px;">

        <div class="col s8 no-padding valign-wrapper center-align">
              <a href="#" class="white-text"><img src="http://www.agencia.ac.gov.br/wp-content/uploads/2018/10/chico30-blank.png" class="responsive-img"> <!--- <span class="titulo-floresta flow-text"> Narcotráfico, uma emergência nacional</span>--></a>
            </div>
     <div class="col s2 no-padding hide-on-med-and-down">
         <a href="http://www.ac.gov.br/" class="white-text"><span class="icon-aldeia-04 right" style="font-size:25px;padding-top:20px;height:60px;"></span></a>
     </div>

     <div class="divider col s12"></div>

     <div id="RedeAldeia" class="col s12  redealdeia no-padding">
         <div class="btn-aldeia">
					<div class="col s12 m3 l3"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdWm8ay2H3-u8wBj-XqE5AA1LMitVgqe-jT35GscsKMf79ShA/viewform?vc=0&c=0&w=1" class="waves-effect waves-teal btn-flat lighten-1 white-text" style="">
                 <span class="fa fa-check-square-o"></span> Credenciamento</a></div>
					<div class="col s12 m3 l3"> <a href="#modal4" class="waves-effect waves-teal btn-flat lighten-1 white-text modal-trigger">
                 <span class="fa fa-file"></span> Programação</a></div>
					<div class="col s12 m3 l3"><a href='#' data-activates='encontro' class="dropdown-button waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="fa fa-plus-square"></span> Mais informações</a></div>
            		<div class="col s12 m3 l3"><a href="#!" data-activates='imprensa' class="dropdown-button waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="fa fa-newspaper-o"></span> Imprensa</a></div>

         </div>

     </div>


   </div>

</div>

<div id="modal4" class="modal" style="width: 400px;">
   <div class="modal-content orange darken-4">
    <img src="http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/22690395_1688953817801587_1713758859_o-1.jpg" class="responsive-img">
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

<ul id='encontro' class='dropdown-content'>
    <li><a href="http://www.agencia.ac.gov.br/acre-sedia-encontro-de-governadores-do-brasil-pela-seguranca-e-controle-das-fronteiras/" target="_blank">Release do Evento</a></li>
    <li><a href="http://www.agencia.ac.gov.br/encontro-de-governadores-do-brasil-abre-credenciamento2017/" target="_blank">Nota do Credenciamento Imprensa</a></li>
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
    <?php query_posts('showposts=1&tag=chico30');?>
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
    <?php query_posts('showposts=1&tag=chico30&offset=1');?>
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
    <?php query_posts('showposts=1&tag=chico30&offset=2');?>
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
    <?php query_posts('showposts=1&tag=chico30&offset=3');?>
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

         <h5><i class="icon-logo-agencia2017-01"></i> Sobre o encontro</h5>
          </div>
          <div class="col s6" style="padding-top: 30px;">
          <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/tag/chico30/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
      </a>
          </div>


   </div>

  <div class="no-padding">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=3&tag=chico30&offset=4');?>
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

<div class="row">
   <div class="container">
   <div class="col s12 no-padding">

          <div class="col s6">

         <h5><i class="fa fa-youtube-play"></i> Vídeos</h5>
          </div>
          <div class="col s6" style="padding-top: 30px;">
          <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/categoria/videos/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
      </a>
          </div>


   </div>

   <div class="col s12 m4 l4 no-padding">

       <a href="#modal1" class="modal-trigger"  data-video="http://www.youtube.com/embed/81iNm9_PBOE" title="Clique aqui!">
           <div class="box-especiais-g especiais-img2 b1" style="background: url('http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/IMG-20171020-WA0011-1.jpg');">
         <span class="titulo-especiais white-text">Dados sobre drogas e narcotráfico</span>
       </div>
     </a>
     </div>

      <div class="col s12 m4 l4 no-padding">

          <a href="#modal1" class="modal-trigger"  data-video="http://www.youtube.com/embed/rjJIE5dCH_0" title="Clique aqui!">
              <div class="box-especiais-g especiais-img2 b1" style="background: url('http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/image_6483441-1-1.jpg');">
            <span class="titulo-especiais white-text">"Não tem como adiar uma solução para o problema do narcotráfico e a violência" - Tião Viana</span>
          </div>
        </a>
        </div>

        <div class="col s12 m4 l4 no-padding">

            <a href="#modal1" class="modal-trigger" data-video="http://www.youtube.com/embed/FHNklLD809g" title="Clique aqui!">
              <div class="box-especiais-g especiais-img2 b1" style="background: url('http://www.agencia.ac.gov.br/wp-content/uploads/2017/10/unnamed-11-1-1.jpg');">
              <span class="titulo-especiais white-text">Coletiva - Governador Tião Viana fala sobre o Encontro de Governadores do Brasil pela Segurança</span>
            </div>
          </a>
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



<!--infograficos -->
<div class="row header2 valign-wrapper" style="padding: 0 10px; margin-top: 20px;">

  <div class="container">
    <div class="col s12 center-align" style="margin: 20px;">
      <h4 class="white-text titulo-floresta">Infográficos</h4>
          <span class="white-text titulo-especias" width="75%">A criminalidade nas fronteiras e o efeito devastador das drogas são temáticas debatidas no Encontro de Governadores do Brasil pela Segurança e Controle das Fronteiras – Narcotráfico, uma Emergência Nacional, que ocorre no dia 27 deste mês, em Rio Branco. Além de gestores estaduais, o presidente da República, Michel Temer, confirmou presença no evento.</span>
    </div>


        <div class="col s12 m4 l4 center-align">
      <a href="#extensao" class="btn waves-effect green darken-3 white-text"  style="margin: 5px;">
<i class="fa fa-map-signs" aria-hidden="true"></i> Extensões de Fronteiras</a>
    </div>
    <div class="col s12 m4 l4 center-align">
    <a href="#mercado" class="btn waves-effect orange darken-3 white-text"  style="margin: 5px;">
      <i class="fa fa-line-chart" aria-hidden="true"></i> Mercado da Cocaína </a>
    </div>
    <div class="col s12 m4 l4 center-align">
    <a href="#atlas" class="btn waves-effect blue darken-3 white-text"  style="margin: 5px;">
        <i class="fa fa-map" aria-hidden="true"></i> Atlas da Violência</a>
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

<!-- fim dos infograficos -->

<!-- Clipping -->

<div class="row" style="">
  <div class="container">
<div class="col s12 no-padding">

          <div class="col s6">

         <h5><i class="icon-logo-agencia2017-01"></i> Clipping</h5>
          </div>
          <div class="col s6" style="padding-top: 30px;">
          <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/categoria/imprensa-nacional/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
      </a>
          </div>


   </div>

  <div class="no-padding">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=3&cat=20452&offset=0');?>
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

<!-- Segurança no Acre-->
<div class="row" style="">
  <div class="container">
<div class="col s12 no-padding">

          <div class="col s6">

         <h5><i class="icon-logo-agencia2017-01"></i> Segurança no Acre</h5>
          </div>
          <div class="col s6" style="padding-top: 30px;">
          <a class="right grey-text text-darken-3" href="http://www.agencia.ac.gov.br/categoria/seguranca/">Ver todos <i class="fa fa-long-arrow-right" style="font-size: 12px;" aria-hidden="true"></i>
      </a>
          </div>


   </div>

  <div class="no-padding">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=3&tag=seguranca&offset=0');?>
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
    <div class="col s12">
    <a href="http://www.agencia.ac.gov.br/categoria/noticias" class="btn orange btn-mais">Mais notícias</a>
  </div>

</div>
</div>
</div>


<?php get_footer(); ?>
