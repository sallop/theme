<?php
/*
Template Name: stylesheet
*/

$functions = [
	'get_template_directory_uri',
	'get_stylesheet_directory_uri',
	'get_stylesheet_directory',
	'get_attached_file',
	'wp_get_attachment_uri',
	'wp_get_attachment_link',
];

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
