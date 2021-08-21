<?php
//Load Styles
function load_stylesheets(){
    wp_register_style( 'stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style( 'stylesheet');

    wp_register_style( 'custom', get_template_directory_uri() . '/dist/styles.css', '', 1, 'all');
    wp_enqueue_style( 'custom');
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets');

//Load JS
function load_javascript(){
    wp_register_script( 'custom', get_template_directory_uri() . '/dist/app.js', 'jquery', 1, true );
    wp_enqueue_script('custom');

	//Agregar font-awesome
	
	wp_register_script( 'awesome', 'https://use.fontawesome.com/7479d02950.js', '', 1, true );
    wp_enqueue_script('awesome');

	//Agregar JQuery
	wp_enqueue_script('jquery');

	wp_localize_script('custom', 'fet',array(
		'ajaxurl' => admin_url('admin-ajax.php')
	));
}

add_action('wp_enqueue_scripts','load_javascript');

//Add Google Fonts
function wpb_add_google_fonts() {
 
    wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@500;600;700;800&display=swap', false ); 
}
     
    add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
    

//Add support
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails');

register_nav_menus( array(
    'top-menu' => 'Top Menu'
) );

register_nav_menus( array(
    'footer' => 'Footer'
) );


//Add image sizes
add_image_size( 'post_image', 1100, 550, false);

//Add a widget
register_sidebar( array(
    'name' => 'Sidebar de página',
    'id' => 'page-sidebar',
    'class' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>'
));

//Add woocommerce Support
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Custom Post Type Ponentes
 */

add_action( 'init', 'bf_register_custom_post_type' );
/**
 * Registro un custom post type 'libro'.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bf_register_custom_post_type() {
    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Ponentes', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Ponente', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Ponentes', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nuevo', 'ponente', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nuevo ponente', 'text-domain' ),
		'new_item'           => __( 'Nuevo Ponente', 'text-domain' ),
		'edit_item'          => __( 'Editar Ponente', 'text-domain' ),
		'view_item'          => __( 'Ver ponente', 'text-domain' ),
		'all_items'          => __( 'Todos los ponentes', 'text-domain' ),
		'search_items'       => __( 'Buscar ponentes', 'text-domain' ),
		'not_found'          => __( 'No hay ponentes.', 'text-domain' ),
		'not_found_in_trash' => __( 'No hay ponentes en la papelera.', 'text-domain' )
	);

    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'ponente' ),
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'          => 'dashicons-businessman',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'show_in_rest'	 	 => true,
		'public' 			 => true,
		'has_archive' 		 => true,
		'taxonomies'          => array('category','categoria-conferencias')
	);

	register_post_type('ponentes', $args );
}


/**
 * Nueva taxonomia
 */
add_action('init','fetRegisterTax');
function fetRegisterTax(){
    $args = array(
        'hierarchical' => false,
        'labels' => array(
            'name' => 'Categoria de Conferencia',
            'singular_name' => 'Categoria de conferencias'
        ),
        'show_in_nav_menu' => true,
        'show_admin_column' => true,
        'rewrite' => array(
            'slug' => 'categoria-conferencias'
        )
        );
        register_taxonomy( 'categoria-conferencias',array('ponentes'), $args);

	// Filter except length to 35 words.
	// tn custom excerpt length
	function tn_custom_excerpt_length( $length ) {
		return 15;
		}
		add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );
			
}

add_action("wp_ajax_fetFiltroPonencias","fetFiltroPonencias");
add_action("wp_ajax_nopriv_fetFiltroPonencias","fetFiltroPonencias");
function fetFiltroPonencias(){
	$ID = get_the_ID();
	$args = array(
		'post_type' => 'ponentes',
		'post_status' => 'publish',
		'post_per_page' => -1,
		'order' => 'ASC',
		'orderby' => 'title',
		'post__not_in' => array($ID),
	);
	if($_POST['categoria']){
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'categoria-conferencias',
			'field' => 'slug',
			'terms' => $_POST['categoria']
		)
		);
	}
	$posts = new WP_Query($args);

	if($posts->have_posts()){
		$return = array();
		while($posts->have_posts()){
			$posts->the_post();
			$return[] = array(
				'imagen' => get_the_post_thumbnail_url( get_the_id( ), 'large' ),
				'link' => get_the_permalink(),
				'titulo' => get_the_title(),
			);
		}
		wp_send_json($return);
	}
}

