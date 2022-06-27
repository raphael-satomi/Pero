<?php
function rp_theme_styles() {
	wp_enqueue_style('template_css', get_template_directory_uri().'/assets/css/style.css?v=2');

	wp_enqueue_script('script_js', get_template_directory_uri().'/assets/js/script.js', array('jquery'), false, true);
}

function rp_after_setup() {
	add_theme_support("post-thumbnails");
	add_theme_support("title-tag");
	add_theme_support("custom-logo");
	add_theme_support("post-formats", array(
		'video', 'audio'
	));

	register_nav_menu("primary", "Menu Primário");
	register_nav_menu("top", "Menu Superior");
}

function rp_widgets() {
	
}