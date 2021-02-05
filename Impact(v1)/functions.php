<?php

function load_js(){




	wp_register_script('slick-config', get_template_directory_uri() . '/js/slick-config.js.',false,true);
	wp_enqueue_script('slick-config');
	wp_register_script('script', get_template_directory_uri() . '/js/script.js.',array(),false,true);
	wp_enqueue_script('script');

	wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js',false,true);
	wp_enqueue_script('slick');

}

add_action('wp_enqueue_scripts','load_js');


function my_scripts() {
	
	wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', NULL, '1.11.0', false);
	wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );


}


add_action( 'wp_enqueue_scripts', 'my_scripts' );
function load_stylesheets(){
	wp_register_style('style', get_template_directory_uri() . '/css/slick.css', false, 'all');
	wp_enqueue_style('style');

	wp_register_style('slick-style', get_template_directory_uri() . '/style.css', false, 'all');
	wp_enqueue_style('slick-style');


	wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap', false);
	wp_enqueue_style('fonts');

}
add_action('wp_enqueue_scripts','load_stylesheets');





//menus
add_theme_support('menus');

register_nav_menus(
array(
    'nav-top-menu' => 'Header Top Menu Location',
    'nav-bottom-menu' => 'Header Bottom Menu Location',
    'footer-menu' => 'Footer Menu Location',
    )
);



//Header and footer support

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


