<?php

//Load inc
require_once('inc/custom_nav.php');
require_once('inc/widgets.php');
require_once('inc/js_to_fo.php');
require_once('inc/enqueue.php');

//HTML5 Markup
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// Lato
add_action( 'wp_enqueue_scripts', 'custom_google_fonts' );
function custom_google_fonts() {
      wp_enqueue_style( 'google-fonts', "//fonts.googleapis.com/css?family=Lato:400,300");
}

//Register Nav Menus
        register_nav_menus( array(
    		'primary' => __( 'Primary Menu', 'Primary Menu' ),
) );

//Feeds Links
add_theme_support( 'automatic-feed-links' );

//Hiding WP Version
function so_remove_version() {
	return '';
}
add_filter('the_generator', 'so_remove_version');

//HTML5 Markup
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// custom excerpt length
function custom_excerpt_length( $length ) {
   return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// add more link to excerpt
function custom_excerpt_more($more) {
   global $post;
   return '<a class="more-link" href="'. get_permalink($post->ID) . '"> Continue Reading...</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}



?>
