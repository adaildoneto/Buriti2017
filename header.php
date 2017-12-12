<!DOCTYPE html>
<html lang="en">
    <head data-collapsible class="collapsible">
	      <meta name="theme-color" content="#f57c00 ">
	<meta property="fb:pages" content="127618923973927" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="google-site-verification" content="dwIxvgYnMoodRsCmpVlgHexcPJO7Xf8iIIApX-J8klQ" />
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

	 <?php wp_head()?>
    </head>
    <body class="grey lighten-3">
	<!-- Modulo Facebook -->
	<div id="fb-root"></div>


      <!-- INICIO - Módulo - Navegação -->
        <div class="navbar-fixed">
        <nav class="orange darken-2" style="" role="navigation">
            <div class="nav-wrapper container">
                <div class="brand-logo">
                    <a id="logo-container" href="<?php echo site_url(); ?>" title="<?php bloginfo('name');?>"><span class="icon-logo-agencia2017-02 logo-icone"></span><span class="hide-on-small-only logo-nome">Notícias do Acre</span></a>
                </div>
                <ul class="right">
                  <form id="search" action="/" method="get">
                                  <div class="" id="label">
                                    <label for="search" id="search-label">search</label></div>
                                  <div class="" id="input">
                                    <input name="s" id="search-terms" placeholder="Digite sua busca" type="text"></div>
                              </form>
                </ul>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" style="font-size:30px;">menu</i></a>
            </div>
        </nav>
      </div>
        <!-- FIM - Módulo - Navegação -->

       <ul id="mobile-demo" class="side-nav collapsible" data-collapsible="accordion" style="border:none;">
         <div class="userView" style="height: 210px">
           <div class="background">
             <?php
             $imgID = get_option ('odin_general');
             $imgMENU = wp_get_attachment_image_src( $imgID['imagemmenu'], 'artigo');
             ?>
             <img width="300" src="<?php echo $imgMENU[0]?>">

           </div>
<div id="weather"></div>
         <div class="row" style="padding-top: 80px;">

         </div>
         </div>
         <li class="no-padding">
 		<li class="bold"><a href="http://www.agencia.ac.gov.br" class="waves-effect waves-teal">Início</a></li>
           <ul class="collapsible collapsible-accordion">
             <li class="bold"><a class="collapsible-header waves-effect waves-orange">
               Notícias
               <span class="badge">
                 <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 16px;"></i>
               </span>
             </a>
               <div class="collapsible-body" style="">
                 <?php wp_nav_menu( array( 'menu' => 'menu-noticias','theme-location'=>'menu-noticias', 'container'=>'div', 'container-class'=>'menu-noticias', 'menu_class'=>'ul-menu-noticias' )); ?>
               </div>
             </li>
             <li class="bold"><a href="/categoria/concursos/" class="waves-effect waves-teal">Concursos</a></li>
             <li class="bold"><a href="/categoria/especiais/" class="waves-effect waves-teal">Especiais</a></li>
             <li class="bold"><a href="/categoria/especiais/" class="waves-effect waves-teal">Artigos</a></li>
             <li class="bold"><a href="/eventos/" class="waves-effect waves-teal">Agenda Cultural</a></li>

           </ul>
         </li>
       </ul>
