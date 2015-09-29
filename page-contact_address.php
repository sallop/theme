<?php
/*
Template Name: contact_address
*/
?>
<doctype html>
<head>
<title>contact address</title>
<style>
<?php
$IDs = [
	'legio'	=> 466,
	'school' => 467,
	'mass' => 468,
	'pigeon' => 464,
	'music' => 465,
];
$id = $IDs['mass'];
$background_image = wp_get_attachment_image_src( $id )[0];
?>

body {
    width: 95%;
	color: #556B2F; /* DarkOliveGreen */
    background-color: #ffffee;
	background-image: url('<?= $background_image; ?>');
    background-repeat: repeat-x;
    padding-top: 70px;
}
</style>

</head>
<body>
<?php
	echo __FILE__.'<br/>';
	global $post;
	get_post();
	echo get_the_title();
	echo get_the_content();
	echo $post->post_content;
	the_content();
?>
</body>
</html>
