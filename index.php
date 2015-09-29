<html>
  <head>
	<title>
	  合唱団のあるカトリック教会：谷山カトリック教会のホームページ[聖アルフォンソ・ファミリー]
	</title>
	<style type="text/css">
body {
	color: #666666;
	background-color: #ffffee;
	text-align: center;
}

img.photo001 {
float: left
}

h2 {
margin-top: 20px;
}

h3 {
color: #99cc00;
}

h1 {
font-size: 40px;
font-family: 'MS Pゴシック', Osaka;
color: #336633
}

span.Taniyama {
font-weight: bold;
color: #666666;
}

span.name {
font-weight: bold
}

p {
	margin-top: 20px;
	width: 60%;
	line-height: 150%;
	background-color: #f7ffcc;
	border-style: solid;
	border-width: 7px;
	border-top-color: #ffff99;
	border-right-color: green;
	border-bottom-color: green;
	border-left-color: #ffff99;
	padding: 4px;
	margin-bottom: 20px;
}

p.counter {
	border-style: solid;
	border-width: 3px;
}

table {
	empty-cells: show;
}

strong {
	font-weight: bold;
	color: crimson;
	background-color: #ffff99;
}

div.shintorenraku {
	clear: left;
}

div.copy {
	background-color: #33cc66;
	color: white;
	font-size: smaller;
	padding: 2px;
	margin-top: 20px;
}

a:link {
	color: #0066ff;
}
a:visited {
	color: #00aaff;
}
a:hover	{
	color: #ff6699;
}
a:active {
	color: #008000;
}

a.mail {
	text-decoration: none;
}
a.mail:link	{
	color: #ffffff;
}
a.mail:visited {
	color: #ffffff;
}	
a.mail:hover {
	color: #ffff00;
}
a.mail:active {
	color: #008000;
}
</style>
<script language="JavaScript">
function PassLink(){
	PassWord=document.pass.word.value;
	location.href=""+PassWord+".html";
}
</script>

</head>
	<body>


	<!--img src="jpg/church.jpg" class="photo001" width="394" height="341" alt="谷山カトリック教会"--> 
	<!--img
	src="<?php echo get_attachment_link(472); ?>"
	class="photo001"
	width="394"
	height="341"
	alt="谷山カトリック教会"-->
	<img
	src="<?php echo wp_get_attachment_url(472); ?>"
	class="photo001"
	width="394"
	height="341"
	alt="谷山カトリック教会">


<!--?php echo wp_get_attachment_image(472); ?-->
<!--?php echo wp_get_attachment_url(472); ?-->

	<div text-align:center>
	<h2>谷山カトリック教会のホームページ</h2>
	<h3>(Taniyama Catholic Church, Kagoshima, Japan)<h3>
	<h1>聖アルフォンソ・ファミリー</h1>

	<p text-align:center><span class="name">聖アルフォンソ・ファミリーへ　ようこそ！</span><br>
	開かれた教会、私たちの<br><span class="Taniyama">谷山カトリック教会</span>&ensp;を
	ご紹介します。</p><br>
	<h6>主任司祭は、ドイツ語・英語・スペイン語・<br>イタリヤ語・フランス語が通じます<br>
	Our parish father can talk German, English, Spanish, Italian and French.</h6>
	<table border='1' cellpadding='7' cellspacing='0' width=60%>
	<caption><strong>直近更新日：&ensp;8月2日</strong></caption>
	<tbody>
<?php
$category_parents = [
	'activity',
	'circle',
	'material',
	'contact',
];
foreach( $category_parents as $category_parent ){
	$args = [
		'post_type' => 'page',
		'tax_query' => [
			[
				'taxonomy' => 'category',
				'field' => 'slug',
				'terms' => $category_parent,
			]
		]
	];
	$postslist = get_posts( $args );
	echo '<tr>';
	echo '<td>';
	echo $category_parent;
	echo '</td>';
	foreach( $postslist as $post ){
		echo '<td>';
		echo '<a href="';
		echo get_page_link( $post->ID );
		echo '">';
		echo $post->post_title;
		echo '</a>';
		echo '</td>';
	}
	echo '</tr>';
}
?>
</tbody>
</table>
<p class="counter">あなたは&emsp;<img src="/cgi-bin/Count.cgi?df=tycc.dat">&emsp;番目の訪問者です。</p>
<div class="shintorenraku">
<form name="pass"> 谷山小教区の皆さんへは <strong>急ぎの連絡</strong> があります<strong>
</strong><br>パスワードを入力して⇒
<input type="PassWord" name="word" size="20">
<input type="button" value="このボタンををクリック！" onClick="PassLink()">
</form>
</div>

<div class="copy">
Copyright(C)聖アルフォンソ・ファミリー<br>
E-Mail:
<a href="mailto:taniyama-cc@lagoon.ocn.ne.jp" class="mail">taniyama-cc@lagoon.ocn.ne.jp</a>
</div>
</body>
</html>
