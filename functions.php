<?php

@ini_set( 'upload_max_size' , '2048K' );
@ini_set( 'post_max_size', '2048K');
@ini_set( 'max_execution_time', '400' );

add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 100, 100, true );
add_image_size( "slider-noticias2", 580, 400, array ( 'center', 'top' ) );
add_image_size( "slider-post", 1200, 400, array ( 'center', 'top' ) );
add_image_size( "thumbnews", 375, 200, array ( 'center', 'top' ) );
add_image_size( "agenda-cultural", 275, 320, true );


//shortcode para comparar duas imagens

// Add Shortcode
function compare_images( $atts ) {
	extract(
	// Attributes
	shortcode_atts(
		array(
			'antes' => '',
			'depois' => '',
		),
		$atts
	));
return
'<div class="ba-slider">
	  <img src="'.$antes.' " alt="">
	  <div class="resize">
	    <img id="no-responsive" src="'.$depois.'" alt="">
	  </div>
	  <i class="handle"></i>
	</div>' ;

}
add_shortcode( 'compare', 'compare_images' );

//shortcode para aspas

// Add Shortcode
function aspas_images( $atts ) {
	extract(
	// Attributes
	shortcode_atts(
		array(
			'fala' => '',
			'imagem' => '',
			'autor' => '',
			'cargo' => '',
		),
		$atts
	));
return
'
<div id="quotes" class="row">

									 <i class="fa fa-quote-left fa-3x deep-orange-text left" aria-hidden="true" style="margin-left:20px;"></i>

									 <h2 >'.$fala.'</h2>
									 <i class="fa fa-quote-right fa-2x orange-text right" aria-hidden="true"style="margin-right:20px;"></i>
									 <br>

										 <div class="right">

										 		<div class="circle left aspasimg" style="background-image:url('.$imagem.');background-size: cover;"></div>

      								<span class="title">'.$autor.'</br></span><span>'.$cargo.'</span>




									 </div> </div>
				'
 ;

}
add_shortcode( 'aspas', 'aspas_images' );

// Add Shortcode
function aspas_images2( $atts ) {
	extract(
	// Attributes
	shortcode_atts(
		array(
			'fala' => '',
			'imagem' => '',
			'autor' => '',
			'cargo' => '',
		),
		$atts
	));
return
'
<div id="quotes" class="row orange darken-3"><div class="col" style="padding:10px">

									 <i class="fa fa-quote-left fa-3x white-text left" aria-hidden="true" style="margin-left:20px;"></i>

									 <h2 class="white-text">'.$fala.'</h2>
									 <i class="fa fa-quote-right fa-2x white-text right" aria-hidden="true"style="margin-right:20px;"></i>
									 <br>

										 <div class="alignright">


      									<div class="circle left aspasimg" style="background-image:url('.$imagem.');background-size: cover;"></div>
      								<span class="title white-text">'.$autor.'</br></span><span class="white-text">'.$cargo.'</span>




									 </div> </div></div>
				'
 ;

}
add_shortcode( 'aspas2', 'aspas_images2' );






// Pagination
function wp_pagination($pages = '', $range = 9)
{
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('page','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'show_all' => false,
        'type' => 'list'
    );
    if ( $wp_rewrite->using_permalinks() ) $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
    if ( !empty($wp_query->query_vars['s']) ) $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
    echo '<div class="wp_pagination">'.paginate_links( $pagination ).'</div>';
}


//Limitando a 80 caracteres #Destaque1
function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 80);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	return $excerpt;
}

function title_excerpt($maxchars) {
    $title = get_the_title($post->ID);
    $title = substr($title,0,$maxchars);
    echo $title;
}

// Registrando Menu principal e Menu topo
//if ( function_exists('register_nav_menu')){
//register_nav_menu('menu-noticias', 'Menu Notícias');
//register_nav_menu('menu-trends', 'Menu trends');
//register_nav_menu('menu-categorias', 'Menu categorias');}

// Registrando Menu principal e Menu topo
//if ( function_exists('register_nav_menu')){
//register_nav_menu('menu-noticias', 'Menu Notícias');
//register_nav_menu('menu-trends', 'Menu trends');
//register_nav_menu('menu-categorias', 'Menu categorias');}

function register_my_menus() {
  register_nav_menus(
    array(
      'menu-noticias' => __( 'Menu Notícias' ),
      'menu-trends' => __( 'Menu trends' ),
      'menu-categorias' => __( 'Menu categorias' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// iniciando as orações para criar areas de Widget
function arphabet_widgets_init() {

	register_sidebar(
		array(
		'name'          => 'Publicidade Topo',
		'id'            => 'publicidade-topo',
		'before_widget' => '<div class="col s12 center-align">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="rounded white-text">',
		'after_title'   => '</p>',
	));

	register_sidebar(
		array(
		'name'          => 'Publicidade Lateral',
		'id'            => 'publicidade-lateral',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="rounded white-text">',
		'after_title'   => '</p>',
	));

	register_sidebar(
		array(
		'name'          => 'Rodapé 1',
		'id'            => 'rodape1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="rounded white-text">',
		'after_title'   => '</p>',
	));

	register_sidebar(
		array(
		'name'          => 'Rodapé 2',
		'id'            => 'rodape2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="rounded white-text">',
		'after_title'   => '</p>',
	));

	register_sidebar(
		array(
		'name'          => 'Rodapé 3',
		'id'            => 'rodape3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="rounded white-text">',
		'after_title'   => '</p>',
	));

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



//Iniciando as orações para Odin

//Chamando o Odin
require_once get_template_directory() . '/core/classes/class-metabox.php';
require_once get_template_directory() . '/core/classes/class-post-type.php';
require_once get_template_directory() . '/core/classes/class-taxonomy.php';
require_once get_template_directory() . '/core/classes/class-theme-options.php';
require_once get_template_directory() . '/core/classes/class-options-helper.php';
require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
require_once get_template_directory() . '/core/classes/class-contact-form.php';
require_once get_template_directory() . '/core/classes/class-post-status.php';

// Revisado Status
$args = array(
    'applied_label' 		=> 'Revisado',
    'label' 			=> 'Revisado',
    'public' 			=> false,
    'exclude_from_search'	=> false,
    'show_in_admin_all_list' 	=> true,
    'show_in_admin_status_list' => true,
);

$archive_status = new Odin_Post_Status(
	'Revisado', // Slug do Post Status (obrigatório)
	array('post'), // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (obrigatório)
	$args // Argumentos do register_post_status (obrigatório)
);

// Criando opções do Tema Agencia 2017
$odin_theme_options = new Odin_Theme_Options(
    'noticias-do-acre-2017', // Slug/ID da página (Obrigatório)
    __( 'Opções do tema', 'odin' ), // Titulo da página (Obrigatório)
    'manage_options' // Nível de permissão (Opcional) [padrão é manage_options]
);

// Criando uma aba dentros das opções do Template
$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'odin_general', // ID da aba e nome da entrada no banco de dados.
            'title' => __( 'Configurações', 'odin' ), // Título da aba.
        ),
    )
);

// Setando os campos dentro da aba Configurações da opções do Tema

$odin_theme_options->set_fields(
    array(
        'general_section' => array(
            'tab'   => 'odin_general', // Sessão da aba odin_general
            'title' => __( 'Configurações do Menu', 'odin' ),
            'fields' => array(
                array(
                    'id' => 'imagemmenu',
                    'label' => __( 'Imagem do Menu', 'odin' ),
                    'type' => 'image',
                    'default' => '',
                    'description' => __( 'Imagem que vai aparecer no menu', 'odin' )
                ),
                array(
                    'id' => 'imagemcredito',
                    'label' => __( 'Nome do fotografo', 'odin' ),
                    'type' => 'text',
                    'default' => '',
                    'description' => __( 'A quem pertence a imagem?', 'odin' )
                ),
            )
        ),
    )
);

//Criando o Tipo de Post - Eventos -

function odin_evento_cpt() {
    $evento = new Odin_Post_Type(
        'Evento', // Nome (Singular) do Post Type.
        'eventos' // Slug do Post Type.
    );

    $evento->set_labels(
        array(
            'menu_name' => __( 'Eventos', 'odin' )
        )
    );

    $evento->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail' ),
	    			'menu_icon' => 'dashicons-calendar-alt'
        )
    );
}
add_action( 'init', 'odin_evento_cpt', 1 );

//Criando o Tipo de Post - Artigos -

function odin_artigo_cpt() {
    $artigo = new Odin_Post_Type(
        'Artigo', // Nome (Singular) do Post Type.
        'artigos' // Slug do Post Type.
    );

    $artigo->set_labels(
        array(
            'menu_name' => __( 'Artigos', 'odin' )
        )
    );

    $artigo->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail' ),
	    			'menu_icon' => 'dashicons-format-aside'
        )
    );
}


add_action( 'init', 'odin_artigo_cpt', 1 );

//Criando categorias personalizadas para Eventos

function odin_evento_taxonomy() {
    $evento = new Odin_Taxonomy(
        'Evento', // Nome (Singular) da nova Taxonomia.
        'evento', // Slug do Taxonomia.
        'eventos' // Nome do tipo de conteúdo que a taxonomia irá fazer parte.
    );

    $evento->set_labels(
        array(
            'menu_name' => __( 'Tipos de evento', 'odin' )
        )
    );
// para ter o formato de categoria use TRUE
    $evento->set_arguments(
        array(
            'hierarchical' => true
        )
    );
}

add_action( 'init', 'odin_evento_taxonomy', 1 );


// Criando a MetaBox Dados Eventos

$evento_metabox = new Odin_Metabox(
    'eventos', // Slug/ID do Metabox (obrigatório)
    'Dados do Evento', // Nome do Metabox  (obrigatório)
    'eventos', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)
);

//Criando os Campos da Metabox Evento

$evento_metabox->set_fields(
    array(
			// Campo Data variavel tipo texto
        array(
            'id'          => 'data',
            'label'       => __( 'Data', 'odin' ),
            'type'        => 'text',
            'description' => __( 'ex. 7 a 9 de fevereiro', 'odin' )
        ),
		// Campo Hora variavel tipo texto
        array(
            'id'          => 'hora',
            'label'       => __( 'Hora', 'odin' ),
            'type'        => 'text',
            'description' => __( 'ex. 19h', 'odin' )
        ),
		//  Campo Local  variavel tipo texto
				array(
            'id'          => 'local',
            'label'       => __( 'Local', 'odin' ),
            'type'        => 'text',
            'description' => __( 'Onde fica o evento? ex. Centro Cultural Lígia Hammes', 'odin' )
        )
    )
);

// Criando a MetaBox Dados Artigos

$artigo_metabox = new Odin_Metabox(
    'artigos', // Slug/ID do Metabox (obrigatório)
    'Dados do Artigo', // Nome do Metabox  (obrigatório)
    'artigos', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
    'high' // Prioridade (opções: high, core, default ou low) (opcional)
);

//Criando os Campos da Metabox Artigo

$artigo_metabox->set_fields(
    array(
			// Campo Data variavel tipo texto
        array(
            'id'          => 'nome',
            'label'       => __( 'Nome do Autor', 'odin' ),
            'type'        => 'text',
            'description' => __( 'ex. Plácido de Castro', 'odin' )
        ),
		// Campo Hora variavel tipo texto area
				array(
						'id'          => 'bio', // Obrigatório
						'label'       => __( 'Pequena Biografia', 'odin' ), // Obrigatório
						'type'        => 'textarea', // Obrigatório
						'attributes'  => array( // Opcional (atributos para input HTML/HTML5)
											'placeholder' => __( 'Escreva aqui!' )
														),
						'default'     => 'Escreva aqui!', // Opcional
						'description' => __( 'Ex. José Plácido de Castro foi um político, militar idealista brasileiro, líder da Revolução Acreana e que governou o Estado Independente do Acre.', 'odin' ), // Opcional
					),
		//  Campo Local  variavel tipo imagem
		array(
					'id'          => 'fotoartigo', // Obrigatório
					'label'       => __( 'Foto do Autor', 'odin' ), // Obrigatório
					'type'        => 'image', // Obrigatório
					'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
					'description' => __( 'Selecione o avatar do Autor', 'odin' ), // Opcional
					)
    )
	);
	// Criando a MetaBox Chamada

	$chamada_metabox = new Odin_Metabox(
	    'chamadas', // Slug/ID do Metabox (obrigatório)
	    'Chamada do Título', // Nome do Metabox  (obrigatório)
	    'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
	    'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
	    'high' // Prioridade (opções: high, core, default ou low) (opcional)
	);


	// Criando os campos Meta Box para chamada do titulo

	$chamada_metabox->set_fields(
	    array(
				// Campo Data variavel tipo texto
	        array(
	            'id'          => 'chamada',
	            'label'       => __( 'Chamada do título', 'odin' ),
	            'type'        => 'text',
	            'description' => __( 'No máximo duas palavras ou 25 toques', 'odin' )
	        ),

					array(
	            'id'          => 'titulo-capa',
	            'label'       => __( 'Título específico para Capa', 'odin' ),
	            'type'        => 'text',
	            'description' => __( 'Caso essa campo seja preenchido o título vai aparecer na capa ', 'odin' )
	        ),

					array(
	            'id'          => 'chamada-destaque1',
	            'label'       => __( 'Chamada do Destaque 1', 'odin' ),
	            'type'        => 'textarea',
	            'description' => __( 'Chamada após o título do Destaque 1. Até 120 toques ', 'odin' )
	        ),

          array(
              'id'          => 'txt-facebook',
              'label'       => __( 'Facebook // Whatsapp', 'odin' ),
              'type'        => 'textarea',
              'description' => __( 'Chamada para o Facebook e Whatsapp. Texto que vai abaixo da foto quando o usuario clicar pra compartilhar. ', 'odin' )
          ),


					array(
	            'id'          => 'tweet',
	            'label'       => __( 'Twitter', 'odin' ),
	            'type'        => 'textarea',
	            'description' => __( 'Defina o tweet da sua matéria, não esqueça de colocar #hastags. Até 120 toques ', 'odin' )
	        )

	    )
		);

		// Criando a MetaBox Imagem destacada do post

		$destaquepost_metabox = new Odin_Metabox(
				'destaqueposts', // Slug/ID do Metabox (obrigatório)
				'Imagem Destacada do Post', // Nome do Metabox  (obrigatório)
				'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
				'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
				'high' // Prioridade (opções: high, core, default ou low) (opcional)
		);


		// Criando os campos Meta Box Imagem destacada do post

		$destaquepost_metabox->set_fields(
				array(
					// Campo Data variavel tipo foto
					array(
								'id'          => 'destaquepost', // Obrigatório
								'label'       => __( 'Imagem Destacada do post', 'odin' ), // Obrigatório
								'type'        => 'image', // Obrigatório
								'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
								'description' => __( 'Selecione a imagem que vai abrir a matéria', 'odin' ), // Opcional
								)
					)
			);


      // Criando a MetaBox Video do post

  		$destaquepost_metabox = new Odin_Metabox(
  				'idvideo', // Slug/ID do Metabox (obrigatório)
  				'Video do Youtube', // Nome do Metabox  (obrigatório)
  				'post', // Slug do Post Type, sendo possível enviar apenas um valor ou um array com vários (opcional)
  				'normal', // Contexto (opções: normal, advanced, ou side) (opcional)
  				'high' // Prioridade (opções: high, core, default ou low) (opcional)
  		);


  		// Criando os campos Meta Box Vídeo do post

  		$destaquepost_metabox->set_fields(
  				array(
  					// Campo Data variavel tipo foto
  					array(
  								'id'          => 'videoid', // Obrigatório
  								'label'       => __( 'Id do video do youtube', 'odin' ), // Obrigatório
  								'type'        => 'text', // Obrigatório
  								'default'     => '', // Opcional (deve ser o id de uma imagem em mídia)
  								'description' => __( 'Selecione o id do vídeo que vai abrir a matéria. Ex: youtube.com/watch?v=ak8jzShE3Vk o id é essa sequencia após o watch?v=', 'odin' ), // Opcional
  								)
  					)
  			);

// adicionando estilos e scripts de forma correta

				function add_estilos_e_scripts() {
				   wp_enqueue_style( 'materialize', get_template_directory_uri() . '/materialize/css/materialize.min.css');
					 wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
					 wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');
					 wp_enqueue_style( 'slicktheme', get_template_directory_uri() . '/assets/slick/slick-theme.css');
					  wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
					 wp_enqueue_script( 'jquery');
					wp_enqueue_script( 'masonry', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.2/masonry.pkgd.js');
					 wp_enqueue_script( 'materialize-script', get_template_directory_uri() . '/materialize/js/materialize.min.js');
					 wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/slick/slick.min.js');
					 wp_enqueue_script( 'YT', get_template_directory_uri() . '/assets/js/scriptyt.js');
 				 	 wp_enqueue_script( 'custom', get_template_directory_uri() . '/custom.js');
					 wp_enqueue_script( 'search', get_template_directory_uri() . '/assets/js/search.js');
					 wp_enqueue_script( 'classie', get_template_directory_uri() . '/assets/js/classie.js');
					 wp_enqueue_script( 'simpleWeather', get_template_directory_uri() . '/tempo3/jquery.simpleWeather.js');
					  wp_enqueue_script( 'tempo', get_template_directory_uri() . '/tempo3/tempo-ok.js');

				}
				add_action( 'wp_enqueue_scripts', 'add_estilos_e_scripts' );

  //Final das orações do odin


  //Resolvendo o problema das imagens nada a ver que carregavam no facebook! Graças a Deus

			function doctype_opengraph($output) {
	    return $output . '
	    xmlns:og="http://opengraphprotocol.org/schema/"
	    xmlns:fb="http://www.facebook.com/2008/fbml"';
	}
	add_filter('language_attributes', 'doctype_opengraph');

	function fb_opengraph() {
	    global $post;

	    if(is_single()) {
	        if(has_post_thumbnail($post->ID)) {
	            $img_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'artigo' );
	        } else {
	            $img_src = get_stylesheet_directory_uri() . '/img/opengraph_image.jpg';
	        }
	        if($excerpt = $post->post_excerpt) {
	            $excerpt = strip_tags($post->post_excerpt);
	            $excerpt = str_replace("", "'", $excerpt);
	        } else {
	            $excerpt = get_bloginfo('description');
	        }
	        ?>

	    <meta property="og:title" content="<?php echo the_title(); ?>"/>
	    <meta property="og:description" content="<?php echo get_post_meta( $post->ID,'txt-facebook', true )?>"/>
	    <meta property="og:type" content="article"/>
	    <meta property="og:url" content="<?php echo the_permalink(); ?>"/>
	    <meta property="og:site_name" content="<?php echo get_bloginfo(); ?>"/>
	    <meta property="og:image" content="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'artigo' ); echo $image[0]; ?>"/>

	<?php
	    } else {
	        return;
	    }
	}
	add_action('wp_head', 'fb_opengraph', 5);

// Diminuindo o link com o bit.ly


function make_bitly_url($url,$format = 'xml',$version = '2.0.1')
{
	//Set up account info
	$bitly_login = 'noticiasdoacre';
	$bitly_api = 'R_898c930a846190dd9fc19cd29e62100c';
  //create the URL
  $bitly = 'http://api.bit.ly/shorten?version='.$version.'&longUrl='.urlencode($url).'&login='.$bitly_login.'&apiKey='.$bitly_api.'&format='.$format;
  $xml = simplexml_load_file($bitly) -> results;
  foreach($xml -> nodeKeyVal as $nodeKeyVal) {
    return (string)$nodeKeyVal -> shortUrl;
  }
}

/* Diferenciando Single-posts por categoria */
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat )
  {
    if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
    }
  }
  return $t;
}

/**
 * Pegando as categorias customizadas
 *
 * @see get_object_taxonomies()
 */
function wpdocs_custom_taxonomies_terms_links() {
    // Get post by post ID.
    $post = get_post( $post->ID );

    // Get post type by post.
    $post_type = $post->post_type;

    // Get post type taxonomies.
    $taxonomies = get_object_taxonomies( $post_type, 'objects' );

    $out = array();

    foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){

        // Get the terms related to post.
        $terms = get_the_terms( $post->ID, $taxonomy_slug );

        if ( ! empty( $terms ) ) {

            foreach ( $terms as $term ) {
                $out[] = sprintf( '<a class="chip orange white-text z-depth-1-half nocanto1" href="%1$s">%2$s</a>',
                    esc_url( get_term_link( $term->slug, $taxonomy_slug ) ),
                    esc_html( $term->name )
                );
            }

        }
    }
    return implode( '', $out );
}


/*
 Customizando a area de login
 */

function custom_login_css() {
echo '<link rel="stylesheet" type="text/css" href="'.get_stylesheet_directory_uri().'/style.css"/>';
}
add_action('login_head', 'custom_login_css');

/*
Corrigindo o carrregamento do plugin PhotoSwipe
*/

function remover_js() {
wp_deregister_script( 'photoswipe' );
wp_deregister_script( 'photoswipe-masonry-js' );
wp_deregister_script( 'photoswipe-ui-default' );
wp_deregister_script( 'photoswipe-masonry' );
wp_deregister_script( 'photoswipe-imagesloaded' );
}
function remover_css() {
wp_deregister_style( 'photoswipe-core-css' );
wp_deregister_style( 'white_theme' );
wp_deregister_style( 'pswp-skin' );
}
if(is_single()){
add_action( 'wp_print_scripts', 'remover_js', 100 );
add_action( 'wp_print_styles', 'remover_css', 100 );
}
