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
		'has_archive' 		 => true
	);

	register_post_type('ponentes', $args );
}

/**
 * Custom Post Type Ponentes
 */

add_action( 'init', 'bf_register_conferencia_post_type' );
/**
 * Registro un custom post type 'libro'.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bf_register_conferencia_post_type() {
    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Conferencias', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Conferencia', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Conferencias', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nuevo', 'conferencia', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nueva conferencia', 'text-domain' ),
		'new_item'           => __( 'Nueva conferencia', 'text-domain' ),
		'edit_item'          => __( 'Editar conferencia', 'text-domain' ),
		'view_item'          => __( 'Ver conferencia', 'text-domain' ),
		'all_items'          => __( 'Todas las conferencias', 'text-domain' ),
		'search_items'       => __( 'Buscar conferencias', 'text-domain' ),
		'not_found'          => __( 'No hay conferencias.', 'text-domain' ),
		'not_found_in_trash' => __( 'No hay conferencias en la papelera.', 'text-domain' )
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
		'rewrite'            => array( 'slug' => 'conferencia' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
        'menu_icon'          => 'dashicons-microphone',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
		'show_in_rest'	 	 => true,
		'public' 			 => true,
		'has_archive' 		 => true
	);

	register_post_type( 'conferencias', $args );
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
        register_taxonomy( 'categoria-conferencias',array('conferencia'), $args);
}