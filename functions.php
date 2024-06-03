<?php

add_action('after_setup_theme', 'first_theme');
function first_theme()
{

	register_nav_menu('main-menu', 'Main menu');
}


function home_page_design()
{
	wp_enqueue_style('css-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'home_page_design');