<?php
/*
Template Name: legiomariae
*/
echo __FILE__.'<br/>';
?>
<doctype html>
<head>
<title>
page-legiomariae
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
$id = $IDs['legio'];
$background_image = wp_get_attachment_image_src( $id )[0];
?>
body {
	background-color: #b0c4de;
	background-image: url('<?= $background_image; ?>');
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
