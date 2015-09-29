<?php
/*
Template Name: alfonso
 */
?>
<doctype html>
<head>
<title>聖アルフォンソ合唱団</title>
</head>
<style type="text/css">
<?php
$IDs = [
	'legio'	=> 466,
	'school' => 467,
	'mass' => 468,
	'pigeon' => 464,
	'music' => 465,
];
$id = $IDs['music'];
$background_image = wp_get_attachment_image_src( $id )[0];
?>
body {
	color: #333333;
	background-color: #ffffee;
	background-image: url('<?php echo $background_image; ?>');
}

p {
	width: 700;
	text-align: left;
	text-indent: 1em;
	line-height: 2;
	padding: 20px;
	border-style: dotted;
	border-width: 2px;
	border-color: #66cc33;
}

img.chamberor {
	float: left;
	margin-right: 20px;
}

strong {
	font-weight: 900;
	color: crimson;
	background-color: yellow;
}

span {
	color: crimson;
}

a.botan	{
	color: white;
	background-color: #336633;
}

a:link {
	color: #0066ff;
}
a:visited {
	color: #0066ff;
}
a:hover	{
	color: #ff6699
}
a:active {
	color: #008000;
}
</style>
<body>
<?php 
var_dump( $post->post_content );
echo $post->post_content;
$args = [
	'post_type' => 'post',
	'tax_query' => [
		[
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'alfonso'
		]
	]
];

$posts = get_posts( $args );
//$posts = new WP_Query( $args );

//var_dump( $posts );
?>
<table border="1" frame="hsides" rules="rows" width="80%">
<?php foreach( $posts as $post ): ?>
	<tr>
	<td> <?php echo get_the_date('Y年m月j日', $post->id); ?> </td>
	<td> <?= $post->post_title; ?></td>
	<td> <?= $post->post_content; ?></td>
	<td> <a href="wav/Kyrie2.wav" class="botan">試聴ボタン</a></td>
	<td><br><img src="jpg/pastral.jpg" alt="パストラール・ミサ" width="250" height="250"></td>
	<td><a href="box.html">CDご希望の方は<br>ご連絡ください</a></td>
	</tr>
<?php endforeach; ?>
</table>

<?php
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
		$urls = [
			get_attachment_link( $attachment->ID ),
				get_attached_file( $attachment->ID ),
			];
	echo '<table>';
	echo '<tr>';
?>
<!--a href='<?php echo get_attachment_link( $attachment->ID ); ?>-->
<a href='<?php echo get_attached_file( $attachment->ID ); ?>'>
<?php echo $attachment->post_title ?>
</a>
<?php
	foreach( $urls as $url ){
		echo '<td>';
		echo $url;
		echo '</td>';
	}
	echo '</tr>';
	echo '</table>';
endforeach;
}

show_attachment_file_list( 'alfonso' );
?>
</body>
</html>
