<?php
// require_once('foo.php');
// echo home_url();
// echo plugin_dir_url();
// echo plugin_dir_path();
// echo admin_url();
// echo get_template_directory();
// echo get_template_directory_uri();
// echo get_stylesheet_directory();
// echo get_stylesheet_directory_uri();
//function wptp_add_categories_to_attachments(){
function wptp_add_taxonomy_to_attachments(){
	register_taxonomy_for_object_type('category', 'attachment');
	register_taxonomy_for_object_type('post_tag', 'attachment');
	register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'wptp_add_taxonomy_to_attachments');

// apply tags to attachments
// function wptp_add_tags_to_attachments() {
// 	register_taxonomy_for_object_type('post_tag', 'attachment');
// }
// add_action('init', 'wptp_add_tags_to_attachments');
// 
// function wptp_add_categories_to_page(){
// 	register_taxonomy_for_object_type('category', 'page');
// }
// add_action('init', 'wptp_add_categories_to_page');


add_theme_support('custom-background');

$args = [
	'default-color' => '666666',
	'default-' => '%1$s/images/back001.jpg',
];
add_theme_support('custom-background', $args );

function theme_name_scripts() {
	wp_enqueue_style('style-name', get_stylesheet_uri() );
	echo get_stylesheet_uri();
}

add_action('wp_enqueue_scripts', 'theme_name_scripts');



?>
