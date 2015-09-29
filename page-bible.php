<?php
/*
Template Name: bible
*/
echo __FILE__.'<br/>';
?>
<doctype html>
<head>
<title>
page-bible
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
$id = $IDs['mass'];
$background_image = wp_get_attachment_image_src( $id )[0];
?>

body {
    width: 95%;
	color: #556B2F; /* DarkOliveGreen */
    background-color: #ffffee;
	background-image: url('<?php echo $background_image; ?>');
    background-repeat: repeat-x;
    padding-top: 70px;
}

p {
    /*width: 69%;*/
    width: 60%;
    line-height:1.5;
    text-align: left;
    margin-left: auto;
    margin-right: auto;
}

p.nyuumonn2 {
    /*width: 69%;*/
    width: 60%;
    color: green;
    text-indent: 1em;
    font-weight: bold;
    text-align: left;
}

em {
    font-size:1.2em;
}

strong {
    color:crimson;
    background-color:khaki;
}

hr {
    height:4px;
    background-color:#33cc66;
    width:90%;
    margin-top:10px
}

a:link {
    color: #0066ff;
}

a:visited {
    color: #0066ff;
}

a:hover {
    color: #ff6699;
}

a:active {
    color: #008000;
}

h4 {
    width:67%;
    color:green;
    margin-top:10px;
    text-align:left;
    line-height:1.5;
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
