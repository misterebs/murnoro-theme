<?php
//Load JS scripts
function customjs_scripts() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.7',true); // Conditionizr
    wp_enqueue_script('bootstrap');
    wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-custom.min.js', array('jquery'), '',true); // Modernizr
    wp_enqueue_script('modernizr');
    wp_register_script('prism', get_template_directory_uri() . '/js/prism-default.js', array('jquery'), '',true); // Custom scripts
    wp_enqueue_script('prism');
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '',true); // Custom scripts
    wp_enqueue_script('main');
    wp_register_script('velocity', get_template_directory_uri() . '/js/velocity.min.js', array('jquery'), '',true); // Custom scripts
    wp_enqueue_script('velocity');
    wp_register_script('fastclick', get_template_directory_uri() . '/js/fastclick.js', array('jquery'), '',true); // Custom scripts
    wp_enqueue_script('fastclick');
    wp_register_script('jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '',true); // Custom scripts
    wp_enqueue_script('jqueryeasing');
    wp_register_script('jquerymagnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '',true); // Custom scripts
    wp_enqueue_script('jquerymagnificpopup');
    wp_register_script('easyresponsivetabs', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array('jquery'), '',true); // Custom scripts
    wp_enqueue_script('easyresponsivetabs');
}
add_action('wp_enqueue_scripts', 'customjs_scripts');

// Load CSS styles
function murnoro_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!
    wp_register_style('murnoro', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('murnoro'); // Enqueue it!
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.6.3', 'all');
    wp_enqueue_style('fontawesome'); // Enqueue it!
    wp_register_style('prism', get_template_directory_uri() . '/css/prism-default.css', array(), '1.0', 'all');
    wp_enqueue_style('prism'); // Enqueue it!
}
add_action( 'wp_enqueue_scripts', 'murnoro_styles' );
?>
