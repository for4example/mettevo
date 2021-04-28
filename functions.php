<?php
// Styles + JS
function mettevo_scripts() {
   wp_enqueue_style( 'style', get_stylesheet_uri() );
   wp_register_script( 'particleslider', 'https://particleslider.com/js/particleslider/current/particleslider.js', array(), false, true );
wp_enqueue_script( 'particleslider' );
wp_enqueue_style( 'smooth-scrollbar-css', get_template_directory_uri() . '/css/smooth-scrollbar.css' );
wp_register_script( 'smooth-scrollbar', get_template_directory_uri() . '/js/smooth-scrollbar.js' , array(), false, true);
wp_enqueue_script( 'smooth-scrollbar' );
   wp_register_script( 'mettevo', get_template_directory_uri() . '/js/main.js' , array(), false, true);
   wp_enqueue_script( 'mettevo' );
   wp_register_script( 'animation', get_template_directory_uri() . '/js/animation.js', array(), false, true );
   wp_enqueue_script( 'animation' );
   wp_register_script( 'tilt', get_template_directory_uri() . '/js/tilt.js', array(), false, true  );
   wp_enqueue_script( 'tilt' );

   if(is_single() && !is_page_template('tpl-project.php')  && !is_page_template('tpl-project-new.php')){
	wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
	wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
	wp_register_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' , array(), false, true);
	wp_enqueue_script( 'slick' );
        wp_enqueue_style( 'page-news', get_template_directory_uri() . '/css/page-news.css' );
	}
 if(is_page_template('tpl-dev.php')){
	wp_enqueue_style( 'tpl-dev', get_template_directory_uri() . '/css/style-tpl-dev.css' );
}
if(is_page_template('tpl-how-it-work.php')){
	wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
	wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
	wp_register_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' , array(), false, true);
	wp_enqueue_script( 'slick' );
	wp_enqueue_style( 'tpl-how-it-work', get_template_directory_uri() . '/css/style-tpl-how-it-work.css' );
}
if(is_page_template('tpl-project.php')){
	wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
	wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
	wp_register_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' , array(), false, true);
	wp_enqueue_script( 'slick' );
	wp_enqueue_style( 'tpl-project', get_template_directory_uri() . '/css/style-tpl-project.css' );
	wp_register_script( 'projects', get_template_directory_uri() . '/js/projects.js' , array(), false, true);
	wp_enqueue_script( 'projects' );
}
if(is_page_template('tpl-project-new.php')){
	wp_enqueue_style( 'slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css' );
	wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css' );
	wp_register_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' , array(), false, true);
	wp_enqueue_script( 'slick' );
	wp_enqueue_style( 'tpl-project-new', get_template_directory_uri() . '/css/style-tpl-project-new.css' );
	wp_register_script( 'projects', get_template_directory_uri() . '/js/projects.js' , array(), false, true);
	wp_enqueue_script( 'projects' );
}
if(is_front_page() || is_page_template('fr-tmp.php')){
	wp_register_script( 'jquery',  'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'front-page-js', get_template_directory_uri() . '/js/front-page.js' , array(), false, true);
	wp_enqueue_script( 'front-page-js' );
    wp_enqueue_style( 'style-basic', get_template_directory_uri() . '/css/style-basic.css' );
    wp_enqueue_style( 'front-page', get_template_directory_uri() . '/css/style-front-page.css' );
}
if(!is_front_page() || is_page_template('fr-tmp.php')){
	wp_enqueue_style( 'regular-header', get_template_directory_uri() . '/css/regular-header.css' );
}
if(is_category(17)){
	wp_enqueue_style( 'category-projects', get_template_directory_uri() . '/css/category-projects.css' );
}
if(is_category(5)){
	wp_enqueue_style( 'category-news', get_template_directory_uri() . '/css/category-news.css' );
}
wp_enqueue_style( 'style-basic', get_template_directory_uri() . '/css/style-basic.css' );
}
add_action('wp_enqueue_scripts','mettevo_scripts');


   	//Регистрация меню	
	register_nav_menus( array(
		'menu_top' => 'Top',
	));
    add_theme_support( 'post-thumbnails' );
    add_theme_support('category-thumbnails');
    add_theme_support( 'title-tag' );

    // ACF

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
  }
  
  remove_filter( 'the_content', 'wpautop' );// для контента
  remove_filter( 'the_excerpt', 'wpautop' );// для анонсов
  remove_filter( 'comment_text', 'wpautop' );// для комментарий

  add_filter( 'excerpt_length', function(){  return 25; } );
  add_filter('excerpt_more', function($more) {  return '...'; });

//   function true_jquery_register() {
// 	if ( !is_admin() ) {
// 		wp_deregister_script( 'jquery' );
// 		wp_register_script( 'jquery',  'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js' );
// 		wp_enqueue_script( 'jquery' );
// 	}
// }
// add_action( 'init', 'true_jquery_register' );



class Menu_With_Description extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0){
		global $wp_query;

		$indent = ( $depth ) ? str_repeat( "t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

// get user defined attributes for thumbnail images
		$attr_defaults = array(
			'class' => 'nav_thumb',
			'alt'   => esc_attr( $item->attr_title ),
			'title' => esc_attr( $item->attr_title )
		);
		$attr          = isset( $args->thumbnail_attr ) ? $args->thumbnail_attr : '';
		$attr          = wp_parse_args( $attr, $attr_defaults );

		$item_output = $args->before;

// thumbnail image output
		$item_output .= ( isset( $args->thumbnail_link ) && $args->thumbnail_link ) ? '<a' . $attributes . '>' : '';
		$item_output .= apply_filters( 'menu_item_thumbnail', ( isset( $args->thumbnail ) && $args->thumbnail ) ? get_the_post_thumbnail( $item->object_id, ( isset( $args->thumbnail_size ) ) ? $args->thumbnail_size : 'thumbnail', $attr ) : '', $item, $args, $depth );
		$item_output .= ( isset( $args->thumbnail_link ) && $args->thumbnail_link ) ? '</a>' : '';

// menu link output
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

// menu description output based on depth
		// $item_output .= ( $args->desc_depth >= $depth ) ? '<br /><span class="sub">' . $item->description . '</span>' : '';

// close menu link anchor
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

add_filter( 'wp_nav_menu_args', 'my_add_menu_descriptions' );
function my_add_menu_descriptions( $args ) {
	$args['walker']         = new Menu_With_Description;
	// $args['desc_depth']     = 0;
	$args['thumbnail']      = true;
	$args['thumbnail_link'] = true;
	$args['thumbnail_size'] = 'nav_thumb';
	$args['thumbnail_attr'] = array( 'class' => 'nav_thumb my_thumb', 'alt' => 'test', 'title' => 'test' );

	return $args;
}
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }

//   add categories and tag for page
function wpschool_register_taxonomy() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
    register_taxonomy_for_object_type( 'category', 'page' );
}

function wpschool_display_taxonomy( $wp_query ) {
  
    if ( ( ( is_archive() || is_search() ) && $wp_query->get( 'tag' ) ) && ( ! $wp_query->get( 'post_type' ) ) ) {
    $wp_query->set( 'post_type', 'any' );
    } 
 
 
    if ( ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) ) && ( ! $wp_query->get( 'post_type' ) ) ) {
    $wp_query->set( 'post_type', 'any' );
    }
}

add_action( 'pre_get_posts', 'wpschool_display_taxonomy' );
add_action( 'init', 'wpschool_register_taxonomy' );

function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');
function webp_is_displayable($result, $path) {
    if ($result === false) {
        $displayable_image_types = array( IMAGETYPE_WEBP );
        $info = @getimagesize( $path );

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);
//add uploade woff woff2
add_filter('upload_mimes', 'add_custom_upload_mimes');
  function add_custom_upload_mimes($existing_mimes) {
  	$existing_mimes['otf'] = 'application/x-font-otf';
  	$existing_mimes['woff'] = 'application/x-font-woff';
	  $existing_mimes['woff2'] = 'application/x-font-woff2';
  	$existing_mimes['ttf'] = 'application/x-font-ttf';
  	$existing_mimes['svg'] = 'image/svg+xml';
  	$existing_mimes['eot'] = 'application/vnd.ms-fontobject';
  	return $existing_mimes;
  }