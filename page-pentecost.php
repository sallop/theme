<?php
/*
Template Name: pentecost
*/
echo __FILE__.'<br/>';
?>
<doctype html>
<head>
<title>
page-pentecost
</title>
<style>
<?php
$IDs = [
	'none' => 0,
	'legio'	=> 466,
	'school' => 467,
	'mass' => 468,
	'pigeon' => 464,
	'music' => 465,
];
$id = $IDs['none'];
$background_image = wp_get_attachment_image_src( $id )[0];
?>
body {
	background-color: #b0c4de;
	background-image: url('<?php echo $background_image; ?>');
	color: #556B2F; /* DarkOliveGreen */
}
</style>
</head>
<body>
<?php
//$post = get_post();
//var_dump( $post );
echo $post->post_title.'<br/>';
echo $post->post_content;

function show_attachment_file_list( $cat )
{
	$args = [
		'post_type' => 'attachment',
		'numberposts' => -1,
		'post_status' => null,
		'category_name' => $cat
	];
	$attachments = get_posts( $args );
	foreach( $attachments as $attachment ):
		echo '<ul>';
?>
<a href='<?php echo get_attachment_link( $attachment->ID ); ?>'>
<?php echo $attachment->post_title ?>
<?php echo get_attached_file( $attachment->ID ); ?>
</a>
<?php
		echo '</ul>';
endforeach;
}

show_attachment_file_list( 'pentecost' );
// show_attachment_file_list( 'alfonso' );

?>
</body>
</html>
