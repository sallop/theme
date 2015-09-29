<?php
/*
Template Name: school
*/
echo __FILE__.'<br/>';
?>
<doctype html>
<head>
<style>
<?php
//wp_enqueue_style('style-name', get_stylesheet_uri());
$IDs = [
	'legio'	=> 466,
	'school' => 467,
	'mass' => 468,
	'pigeon' => 464,
	'music' => 465,
];
$id = $IDs['school'];
$background_image = wp_get_attachment_image_src( $id )[0];
?>
body {
	background-image: url('<?php echo $background_image; ?>');
	color: #006666;
}
</style>
</head>
<body <?php body_class(); ?>>
<?php
// echo wp_enqueue_style('style-name', get_stylesheet_uri());
$post = get_post();
echo $post->post_content;
$args = [
	//'post_type' => 'post',
	//'category_name' => 'school',
	'tax_query' => [
		[
		'taxonomy' => 'category',
		'field' => 'name',
		'terms' => ['school'],
		]
	],
	//'author_name'=>'tyccuser'
	//'category' => 'school'
	//'post_type' => 'post',
	//'tax_query' => [
	//	'taxonomy' => 'category',
	//	//'field' => 'term_id',
	//	'field' => 'slug',
	//	//'slug' => 'background',
	//	'terms' => 'alfonso',
	//],
];

$query = new WP_Query( $args );
echo '<table border=1>';
while ( $query->have_posts() ){
	$query->the_post();
	echo '<tr>';
	echo '<td>'; echo the_title(); echo '</td>';
	echo '<td>'; echo the_date('Y年n月j日'); echo '</td>';
	echo '<td>'; echo the_content(); echo '</td>';
	echo '</tr>';
}
wp_reset_postdata();
echo '</table>';
?>
</body>
</html>
