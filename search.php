<?php get_header(); ?>

<div class="container header">
<!-- INICIO - Módulo - Chips -->
  <div class="row">
     <?php include(TEMPLATEPATH.'/menu-integracao.php');?>
  </div>
</div>

<div class="container">


                       <div>
                            <h2><?php printf( __( 'Resultados da busca por: <strong style="color:#333;">%s</strong>', '' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                        </div>

                        <div class="row no-padding">

                        <!-- Noticias 1 // Inicio do Loop -->

                        <?php if (have_posts()): while (have_posts()) : the_post();

                          get_template_part ('normal','');
                        ?>
                        <div class="clearfix"></div>



                        </div>



                   <!-- BoTão de mais notícias -->
                      <div class="col s12 center">
                       <?php wp_pagination(); ?>
                   </div>

                </div>



<?php get_footer();?>
