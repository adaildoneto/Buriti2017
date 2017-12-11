<?php
/*
Template Name: Pagína do IMC
*/
?>
<?php get_header(); ?>
<div class="row header">
  <div class="container"  style="padding: 0 10px; margin-top: 120px;">
          <div id="menu-topo" class="col s3 hide-on-med-and-down menu-topo valign no-padding">
         <div class="menu-menu-categorias-container"><ul id="menu-menu-categorias" class="ul-menu-categorias">
           <li id="menu-item-263822" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-263822"><a href="http://sema.ac.gov.br/wps/portal/sema/sema/principal" class="white-text">SEMA</a></li>
 <li id="menu-item-263823" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-263823"><a href="http://imc.ac.gov.br/"  class="white-text">IMC</a></li>
 <li id="menu-item-262903" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-262903"><a href="http://cdsa.agisbrasil.com.br/#!/inicio"  class="white-text">CDSA</a></li>

 </ul></div>    </div>
        <div class="col s7 no-padding hide-on-med-and-down">
              <a href="#" class="white-text"><span class="titulo-floresta"> Floresta habitada, produtiva e conservada</span></a>
            </div>
     <div class="col s2 no-padding hide-on-med-and-down">
         <a href="#" class="white-text"><span class="icon-aldeia-04 right" style="font-size:25px;padding-top:20px;height:60px;"></span></a>
     </div>

     <div class="divider col s12 hide-on-med-and-down"></div>

     <div id="RedeAldeia" class="col s12 l6 redealdeia no-padding">
         <div class="btn-aldeia hide-on-med-and-down">
             <a href="https://www.youtube.com/channel/UC-5zKVjuaKfxYlfKBW8WZXw" class="waves-effect waves-teal btn-flat lighten-1 white-text" style="">
                 <span class="icon-aldeia-01 "></span>TV Aldeia</a>
             <a href="javascript:abrir('http://aldeiafm.acre.gov.br/')" class="waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="icon-aldeia-02 "></span> Aldeia FM</a>
             <a href="javascript:abrir('http://difusora.ac.gov.br')" class="waves-effect waves-teal btn-flat lighten-1 white-text">
                 <span class="icon-aldeia-03 "></span> Difusora Acreana</a>
         </div>
         <div class="hide-on-large-only" >
             <a href="https://www.youtube.com/channel/UC-5zKVjuaKfxYlfKBW8WZXw" class="waves-effect waves-lighten btn green lighten-1">
                 <span class="icon-aldeia-01 tamanho-icones "></span></a>
             <a href="http://aldeiafm.acre.gov.br/" class="waves-effect waves-lighten btn green lighten-1">
                 <span class="icon-aldeia-02 tamanho-icones "></span></a>
             <a href="http://difusora.ac.gov.br)" class="waves-effect waves-lighten green btn lighten-1">
                 <span class="icon-aldeia-03 tamanho-icones "></span></a>
         </div>
     </div>


     <div class="col s12 l6 redealdeia no-padding" >
         <i class="fa fa-bolt red-text darken-5-text left" aria-hidden="true" style="font-size:18px; line-height:30px;"></i>
         <div class="mod-chips">
           <div class="menu-menu-trends-container"><ul id="menu-menu-trends" class="mod-chips"><li id="menu-item-262904" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-262904"><a href="http://www.agencia.ac.gov.br/?s=Indios%20isolados">Indios isolados</a></li>
 <li id="menu-item-262905" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-262905"><a href="http://www.agencia.ac.gov.br/?s=Redução%20desmatamento">Redução desmatamento</a></li>
 <li id="menu-item-262906" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-262906"><a href="http://www.agencia.ac.gov.br/?s=Transplante">Transplante</a></li>
 <li id="menu-item-262907" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-262907"><a href="http://www.agencia.ac.gov.br/?s=Mecanização">Mecanização</a></li>
 <li id="menu-item-262908" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-262908"><a href="http://www.agencia.ac.gov.br/?s=Concurso">Concurso</a></li>
 <li id="menu-item-279292" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-279292"><a href="/categoria/meio-ambiente/">Meio Ambiente</a></li>
 <li id="menu-item-279293" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-279293"><a href="/categoria/producao/">Produção</a></li>
 <li id="menu-item-279294" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-279294"><a href="/cat/mandioca/">Mandioca</a></li>
 </ul></div>        </div>
     </div>
   </div>

</div>

<div class="container">
<!-- INICIO - Módulo - Slider -->
<div class="row">
    <div class="header-espaco">

  </div>
</div>
  <div class="row">
   <div class="slider-noticias-container">
    <div class="col s12 m12 l6">
    <?php query_posts('showposts=1&cat=15imc');?>
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
    <?php query_posts('showposts=1&cat=15imc&offset=1');?>
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
    <?php query_posts('showposts=1&cat=15imc&offset=2');?>
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
    <?php query_posts('showposts=1&cat=15imc&offset=3');?>
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

  <!-- fim do slider -->


<div class="row">
    <div class="container center-align">

  </div>
</div>
<div class="row">
<div class="col s12 m8 l8">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&cat=15&offset=4');?>
        <?php if (have_posts()): while (have_posts()) : the_post();?>


          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque1' ); ?>
		<div class="bloco-img-noticias especiais-img" style="background: url('<?php echo $image[0]; ?>');">

          </div></a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias">
              <span class="destaque-chamada">
                    <?php echo get_post_meta( $post->ID,'chamada', true )?>
                </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-titulo orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
              <span class="destaque-resumo hide-on-med-and-down"><?php $DestaqueChamada = get_post_meta( $post->ID,'chamada-destaque1', true ); echo $DestaqueChamada;?></span>
          </div>
          <div class="nocanto4 tamanho-icones">
            <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
        <?php endwhile;endif;?>
        <div class="clearfix"></div>
      </div>
</div>


  <div class="col s12 m4 l4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&cat=15imc&offset=5');?>



        <?php if (have_posts()): while (have_posts()) : the_post();?>
            <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'destaque2' ); ?>
          <div class="bloco-img-noticias2 especiais-img img-slider efeito" style="background: url('<?php echo $image[0]; ?>');">

          </div>  </a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias2">
              <div class="card-content">
                  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="white-text destaque-fonte">
                    <?php
                    $tituloPost = get_the_title();
                    $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                    if(empty($tituloCapa)){
                       $titulo = $tituloPost;
                    }else{
                      $titulo = $tituloCapa;
                    }
                    echo $titulo;
                    ?>
                  </a>
              </div>
          </div>
          <div class="nocanto4 tamanho-icones">
              <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

</div>

<div class="row">

<div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&cat=15imc&offset=6');?>



        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
          <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">
          </div></a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">   <?php echo get_post_meta( $post->ID,'chamada', true )?> </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  <div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&cat=15imc&offset=7');?>



        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <div class="bloco-img-noticias2 especiais-img orange darken-2">
            <div class="categoria nocanto1">
                <?php $categories = get_the_category();
                  if ( ! empty( $categories ) ) {
                      echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                      }?>
            </div>
          </div>
          <div class="bloco-des-noticias4">
              <div class="card-content">
                  <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="white-text">
                    <?php
                    $tituloPost = get_the_title();
                    $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                    if(empty($tituloCapa)){
                       $titulo = $tituloPost;
                    }else{
                      $titulo = $tituloCapa;
                    }
                    echo $titulo;
                    ?>
                  </a>
              </div>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social-white.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  <div class="col s12 m4">
      <div class="card painel-noticias">
        <?php query_posts('showposts=1&cat=15imc&offset=8');?>

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

        <?php if (have_posts()): while (have_posts()) : the_post();?>
          <a href="<?php the_Permalink()?>" title="<?php the_title();?>">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slider-noticias' ); ?>
          <div class="bloco-img-noticias3 especiais-img" style="background: url('<?php echo $image[0]; ?>');">
          </div></a>
          <div class="categoria nocanto1">
              <?php $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<a class="chip orange white-text z-depth-1-half" href="'. esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                    }?>
          </div>
          <div class="bloco-des-noticias3">
              <span class="destaque-chamada">    <?php echo get_post_meta( $post->ID,'chamada', true )?> </span>
              <a href="<?php the_Permalink()?>" title="<?php the_title();?>" class="destaque-fonte orange-text darken-2">
                <?php
                $tituloPost = get_the_title();
                $tituloCapa = get_post_meta( $post->ID,'titulo-capa', true );
                if(empty($tituloCapa)){
                   $titulo = $tituloPost;
                }else{
                  $titulo = $tituloCapa;
                }
                echo $titulo;
                ?>
              </a>
          </div>
          <div class="nocanto4 tamanho-icones">
                <?php include(TEMPLATEPATH.'/mod-social.php');?>
          </div>
      </div>
    <?php endwhile;endif;?>
    <div class="clearfix"></div>
  </div>

  </div>
</div>
<div class="row">
  <div class="container">
  <div class="col s12 m12 l12 no-padding">

<!-- Noticias 1 // Inicio do Loop -->
<?php query_posts('showposts=9&cat=15&offset=9');?>
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
