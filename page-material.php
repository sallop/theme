<?php
/*
Template Name: material
 */
global $post;
echo __FILE__.'<br/>';
echo "$post->post_title";
echo "$post->post_content";
echo "$post->post_status";
echo "$post->post_name";
var_dump( $post );
//var_dupm( $post );
//	$args = [
//		'authors' => '',
//		'child_of' => 0,
//		'date_format' => get_option('date_format'),
//		'depth' => 0,
//		'echo' => 0,
//		'exclude' => '',
//		'include' => '',
//		'link_after' => '',
//		'link_before' => '',
//		'post_type' => 'page',
//		'post_status' => 'publish',
//		'show_date' => '',
//		'sort_column' => 'menu_order, post_title, DESC',
//		'sort_order' => '',
//		//'title_li' => __('Pages'),
//		//'title_li' => '<p>',
//		'title_li' => '<ul>',
//		'' => new Walker_Page
//];
//$args = [
//		'post_type' => 'attachment',
//];
//$out = wp_list_pages( $args );
//echo $out;
//$attachments = new WP_Query('post_type=attachment');
//$attachments = query_posts('post_type=attachment');
//$attachments = get_posts('post_type=attachment'); // work
// $images = get_children([
// //		'post_parent' => $post->ID,
// 		'post_status' => 'inherit',
// 		'post_type' => 'attachment',
// 		'post_mime_type' => 'image',
// 		'order' => 'ASC',
// 		'orderby' => 'menu_order'
// ]);
// $args = [
// 	'post_type=attachment',
// 	'post_mime_type=image'
// ];
// $images =& get_children( $args );
// if ( empty($image)){
// 	echo "No image";
// } else {
// 	foreach ($images as $attachment_id => $attachment ){
// 		echo wp_get_attachment_image( $attachment_id, 'full');
// 	}
// }
// show the first image associated with the post
function echo_first_image( $postID ){
	$args = [
		'numberposts' => 1,
		'order' => 'ASC',
		'post_mime_type' => 'image',
		'post_parent' => $postID,
		'post_status' => null,
		'post_type' => 'attachment',
	];

	var_dump( $args );

	$attachments = get_children( $args );

	if ( $attachments ){
		foreach ( $attachments as $attachment ) {
			$image_attributes = wp_get_attachment_image_src( $attachment->ID, 'thumbnail' )
				? wp_get_attachment_image_src( $attachment->ID, 'thumbnail' )
				: wp_get_attachment_image_src( $attachment->ID, 'full');
			echo '<img src="'. wp_get_attachment_thumb_url( $attachment->ID ) . '"class="current">';
		}
	}
}
$ID = 493;

echo "echo_first_image( $ID );";
echo_first_image( $ID );

echo "echo_wp_get_attachment_link( $ID )";
echo wp_get_attachment_link( $ID );

echo "<br/>";

$IDs = [
	517, 515, 516, 514, 513, 512, 509, 510, 511, 506, 507,
	508, 503, 504, 505, 500, 501, 502, 496, 497, 498, 499,
	495, 493, 494, 490, 491, 492, 487, 488, 489, 484, 485,
	486, 481, 482, 483, 478, 479, 480, 475, 476, 477, 472,
	473, 474, 469, 470, 471, 466, 467, 468, 463, 464, 465,
	459, 460, 461, 462, 456, 457, 458
];

echo '<table>';
foreach ( $IDs as $ID ){
	echo '<tr>';
	echo '<td>';
	echo $ID;
	echo '</td>';
	echo '<td>';
	echo wp_get_attachment_link( $ID );
	echo '</td>';
	echo '</tr>';
}
echo '</table>';
?>
