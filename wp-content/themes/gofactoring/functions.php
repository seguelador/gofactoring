<?php

function theme_styles() {

	wp_enqueue_style( 'Stroke-Gap-Icons-Webfont_css', get_template_directory_uri() . '/css/Stroke-Gap-Icons-Webfont.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css' );

}

add_action ('wp_enqueue_scripts', 'theme_styles');

function theme_js() {
	
	wp_enqueue_style( 'jquery.easing_js', get_template_directory_uri() . 'js/jquery.easing.min.js', array('jquery'), '', true );
	wp_enqueue_style( 'jquery.nav_js', get_template_directory_uri() . 'js/jquery.nav.js', array('jquery'), '', true );
	wp_enqueue_style( 'custom_js', get_template_directory_uri() . 'js/custom.js', array('jquery'), '', true );

}

add_action ('wp_enqueue_scripts', 'theme_js');

?>