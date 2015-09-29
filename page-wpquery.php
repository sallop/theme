<?php
/*
Template Name: wpquery
*/
echo __FILE__.'<br/>';
?>
<doctype html>
<head>
<title>
page-wpquery
</title>
<style>
<?php
$IDs = [
	'legio'	=> 466,
	'school' => 467,
	'mass' => 468,
	'pigeon' => 464,
	'music' => 465,
];
$id = $IDs['pigeon'];
$background_image = wp_get_attachment_image_src( $id )[0];
?>
body {
	color: 556B2F; /* DarkOliveGreen */
	background-color: #b0c4de;
	background-image: url('<?php echo $background_image; ?>');
}
</style>
</head>
<body>
<?php

echo $post->post_title.'<br/>';
// echo $post->post_content;

//  $args = [
//  	'post_type' => 'post',
//  	// 'post_type' => 'page',
//  	'tax_query' => [
//  		[
//  			'taxonomy' => 'category',
//  			'field' => 'slug',
//  			'terms' => 'school',
//  		],
//  	],
//  ];
//  
// $query = new WP_Query( $args );
// // var_dump( $query );
// while( $query->have_posts() ){
// 	$query->the_post();
// 	the_title();
// 	echo '<br/>';
// }
//  
// $args = [
//  	'post_type' => 'page',
//  	'tax_query' => [
//  		[
//  			'taxonomy' => 'category',
//  			'field' => 'slug',
//  			'terms' => 'school',
//  		],
//  	],
//  ];
//  
// $query = new WP_Query( $args );
// // var_dump( $query );
// while( $query->have_posts() ){
// 	$query->the_post();
// 	the_title();
// 	echo '<br/>';
// }
// // var_dump( $query );
// 
// 
// $args = [
// 	'post_type' => 'attachment',
// 	'tax_query' => [
// 		[
// 			'taxonomy' => 'category',
// 			'field' => 'slug',
// 			'terms' => 'pentecost',
// 		],
// 	],
// ];
// 
// //$attachments = new WP_Query( $args );
// $attachments = new WP_Query('post_type=attachment');
// 
// var_dump( $attachments );
// 
// while  ( $attachments->have_posts() ){
// 	$attachments->the_post();
// 	the_title();
// 	echo $attachments->ID;
// 	echo get_attachment_link( $attachments->ID );
// 	// echo get_attachment_url( ID of the desired attachment );
// }
//var_dump( $attachments );

// $my_query = new WP_Query([
// 	'meta_key' => 'my_hash',
// 	'nopaging' => true,
// 	'orderby' => 'meta_value',
// 	'fields' => 'ids',
// 	'cat' => '60',
// ]);

// $my_query = new WP_Query([
// 	'post_type' => 'attachment'
// ]);

// $args = [
// 	'post_type' => 'attachment',
// 	'post_mime_type' => 'image',
// ];
// $children = get_children( $args );
// var_dump( $children );

// $args = [
// 	//'post_type' => 'attachment',
// 	'category_name' => 'school',
// ];
// $posts = get_posts( $args );
// var_dump( $posts );

// $args = [
// 	'posts_per_page' => -1,
// 	'post_type' => 'attachment',
// 	'category_name' => 'alfonso',
// ];
// $posts = get_posts( $args );
// var_dump( $posts );

$args = [
	'posts_per_page' => 5,
	'post_type' => 'attachment',
	'category_name' => 'pentecost',
];
$posts = get_posts( $args );
// var_dump( $posts );

// foreach( $posts as $post ){
// 	echo $post->post_title.'<br/>';
// }

$args = [
	'post_type' => 'page',
//	'tax_query' => [
//		[
//			'taxonomy' => 'category',
//			'field' => 'slug',
//			'terms' => 'pentecost'
//		],
//	],
];

$query = new WP_Query( $args );
if ( $query->have_posts() ){
	echo "Within in the if nest";
	while ( $query->have_posts() ){
		$query->the_title();
		$query->the_content();
	}
}

//var_dump( $query );


//var_dump( $myquery  );

// echo get_the_term_list( $post->ID, 'category' );
// the_terms( $post->ID, 'category', 'foo bar baz');

// $terms = get_the_terms( $post->ID, 'category' );
// // var_dump( $terms );
// foreach( $terms as $term ){
// 	echo $term->name;
// 	echo $term->term_id;
// }
// ?>
</body>
</html>
