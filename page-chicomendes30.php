<?php
/*
Template Name: Chico Mendes
*/
?>
<?php get_header(teste); ?>
<div class="row header">
  <div class="container"  style="padding: 0 10px; margin-top: 20px;">

        <div class="col s8 no-padding valign-wrapper center-align">
              <a href="#" class="white-text"><img src="http://www.agencia.ac.gov.br/wp-content/uploads/2018/12/Chico-Mendes-logo-2018.png" class="responsive-img"> <!--- <span class="titulo-floresta flow-text"> Narcotráfico, uma emergência nacional</span>--></a>
            </div>
     <div class="col s2 no-padding hide-on-med-and-down">
         <a href="http://www.ac.gov.br/" class="white-text"><span class="icon-aldeia-04 right" style="font-size:25px;padding-top:20px;height:60px;"></span></a>
     </div>

     <div class="divider col s12"></div>

     <div id="RedeAldeia" class="col s12  redealdeia no-padding">
         <div class="btn-aldeia">
					<div class="col s12 m3 l3"><a href="https://docs.google.com/forms/d/e/1FAIpQLSdWm8ay2H3-u8wBj-XqE5AA1LMitVgqe-jT35GscsKMf79ShA/viewform?vc=0&c=0&w=1" class="waves-effect waves-teal btn-flat lighten-1 white-text" style="">
                 <span class="fa fa-check-square-o"></span> Credenciamento</a></div>
					<div class="col s12 m3 l3"> <a href="http://www.agencia.ac.gov.br/wp-content/uploads/2018/12/1544317239346-min.pdf" class="waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="fa fa-file"></span> Programação</a></div>
					<div class="col s12 m3 l3"><a href='#' data-activates='' class="dropdown-button waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="fa fa-plus-square"></span> Mais informações</a></div>
            		<div class="col s12 m3 l3"><a href="mailto:chicomendesheroidobrasil@gmail.com" class="waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="fa fa-newspaper-o"></span> Imprensa</a></div>

         </div>

     </div>


   </div>

</div>

<div id="modal4" class="modal" style="width: 400px;">
   <div class="modal-content orange darken-4">
     <object data="http://www.agencia.ac.gov.br/wp-content/uploads/2018/12/1544317239346-min.pdf" type="application/pdf">
    <p>Seu navegador não tem um plugin pra PDF</p>
</object>

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




<?php get_footer(); ?>
