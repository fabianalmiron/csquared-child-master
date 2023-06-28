<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );



/// recent posts template part made in to shortcode  [recent_posts]
function recent_posts_shortcode() {
    ob_start(); // Start output buffering
    get_template_part('template-parts/recent-posts'); // Replace 'recent-posts' with the correct path to your template part file
    return ob_get_clean(); // Return the output buffer content and clear it
}
add_shortcode('recent_posts', 'recent_posts_shortcode');

/// show all posts template part made in to shortcode  [show_all_posts]

function show_all_posts_shortcode() {
    ob_start(); // Start output buffering
    get_template_part('template-parts/show-all-posts'); // Replace 'recent-posts' with the correct path to your template part file
    return ob_get_clean(); // Return the output buffer content and clear it
}
add_shortcode('show_all_posts', 'show_all_posts_shortcode');