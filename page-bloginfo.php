<?php
/*
Template Name: bloginfo
*/
?>
<doctype html>
<head>
<?php 
//$background_image_uri = get_attached_file(464);
//$background_image_uri = get_attachment_link(464);
//$background_image = wp_get_attachment_image(464);
$background_image = wp_get_attachment_image_src(464, 'full');
$background_image_uri = $background_image[0];

echo "$background_image_uri";
?>
<title>page-bloginfo.php</title>
<style>
body {
	background-color: #b0c4de;
<?php
echo $background_image_uri;
?>
	background-image: url('back001.jpg')
}
</style>
</head>
<body>
<img src="<?php echo $background_image;?>">1</img>
<img src="/home/sallop/var/www/wp_taniyama/wp-content/uploads/2015/07/back001.jpg">2</img>
<img src="var/www/wp_taniyama/wp-content/uploads/2015/07/back001.jpg">3</img>
<img src="wp_taniyama/wp-content/uploads/2015/07/back001.jpg">5</img>
<img src="/wp-content/uploads/2015/07/back001.jpg">6</img>
<img src="/wp_taniyama/wp-content/uploads/2015/07/back001.jpg">4 it work!</img>
<img src="wp-content/uploads/2015/07/back001.jpg">7 it work!</img>
<?php
$background_image = wp_get_attachment_image(464);

echo $background_image;
$shows = [
	'name',
	'description',
	'wpurl',
	'url',
	'admin_email',
	'charset',
	'version',
	'html_type',
	'text_direction',
	'language',
	'stylesheet_url',
	'stylesheet_directory',
	'template_url',
	'template_directory',
	'pinkback_url',
	'atom_url',
	'rdf_url',
	'rss_url',
	'rss2_url',
	'comments_atom_?url',
	'comments_rss2_url',
	'siteurl',
	'home',
];

echo '<table border="1">';
foreach( $shows as $show ){
	$bloginfo = get_bloginfo( $show, 'raw' );
	echo '<tr>';
	echo '<td>'. $show .'</td>';
	echo '<td>'. $bloginfo .'</td>';
	echo '</tr>';
}
echo '</table>';

$functions = [
	'wp_get_attachment_image_src',
	'get_background_image',
	'get_stylesheet',
	'get_stylesheet_uri',
	'get_theme_roots',
	'get_theme_root',
	'get_template_directory_uri',
	'get_template_directory',
	'get_template',
	'get_stylesheet_directory_uri',
	'get_stylesheet_directory',
	'get_attached_file',
	'wp_get_attachment_uri',
	'wp_get_attachment_link',
	'get_theme_roots',
];

// get_image_tag( $id, $alt, $title, $align, $size );
// get_attached_file( $attachment_id, $unfiltered );

// get_children(),
// get attached media(),
// the_attachment_link(),
// get_attachment_link(),
//  wp_get_attachment_link(),
// wp_get_attachment_image(),
// wp_get_attachment_image_src(),
// wp_get_attachment_url(),
//  wp_get_attachment_thumb_file(),
// wp_get_attachment_thumb_url(),
// is_attachment(), 
// wp_get_attachment_metadata()

echo '<table border="1">';
foreach( $functions as $function ) {
	echo '<tr>';
	echo '<td>';
	echo $function;
	echo '</td>';
	echo '<td>';
	echo $function();
	echo '</td>';
	echo '</tr>';
}
echo '</table>';
?>
	<!--img src="/home/sallop/var/www/wp_taniyama/wp-content/uploads/2015/07/back001.jpg">Within imag</img -->
	<img src="wp_taniyama/wp-content/uploads/2015/07/back001.jpg">Within imag</img>
	<img src="<?php echo $background_image; ?>"></img>
</body>
</html>
