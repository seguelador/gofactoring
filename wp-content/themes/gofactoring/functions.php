<?php

require_once('functions/slider_post_type.php');
add_theme_support('post-thumbnails');





function theme_styles() {

	wp_enqueue_style( 'fontawesome', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://use.fontawesome.com/ea786a6c52.css' );
	wp_enqueue_style( 'bootstrap', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'Stroke-Gap-Icons-Webfont_css', get_template_directory_uri() . '/css/Stroke-Gap-Icons-Webfont.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/main_style.css' );
	wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'fonts', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://fonts.googleapis.com/css?family=Raleway:400,300,300italic,400italic,500,500italic,600,600italic,700,700italic%7COpen+Sans:400,600,700,400italic' );

}

add_action ('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js', true, null);
	wp_enqueue_script( 'bootstrapcdn', 'http' . ($_SERVER['SERVER_PORT'] == 443 ? 's' : '') . '://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery.easing_js', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'jquery.nav_js', get_template_directory_uri() . '/js/jquery.nav.js', array('jquery'), '', true );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

}

add_action ('wp_enqueue_scripts', 'theme_js');

?>