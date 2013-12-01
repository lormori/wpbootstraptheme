<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
add_post_type_support( 'page', 'excerpt' );

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150 );
}


function theme_setup() {
  add_image_size( 'theme-custom-size', 100, 100, true );
  add_image_size( 'category-thumb', 400, 9999, true ); 
  add_image_size( 'portfolio-thumb', 400, 400, true ); 
}
add_action( 'after_setup_theme', 'theme_setup' );
?>