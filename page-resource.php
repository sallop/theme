<?php
/*
Template Name: resource
*/
echo __FILE__.'<br/>';
?>
<doctype html>
<head>
<title>
page-resource
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
	background-color: #b0c4de;
	background-image: url('<?php echo $background_image; ?>');
	/*
color: #A3AE7E;
	color: #5C604D;
	color: #CBFFFA;
	color: #21B6A8;
	color: #7F1917;
	color: #7F3D17;
	color: yellow;
	color: green;
*/
	color: 556B2F; /* DarkOliveGreen */
}
</style>
</head>
<body>
<?php
//$post = get_post();
//var_dump( $post );
echo $post->post_title.'<br/>';
echo $post->post_content;
?>
</body>
</html>
