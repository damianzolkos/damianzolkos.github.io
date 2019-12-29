<head>

	<title>write</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="eq1zb75gwmbsxq2"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext,vietnamese,cyrillic,cyrillic-ext,greek-ext,greek' rel='stylesheet' type='text/css'>

<style>
body {
	font-family: 'Open Sans', sans-serif;
	background-color: #f8f8f8;
}
.content {
	text-align: center;
	font-size: 15px;
}
a:link, a:visited {
	color: #111;
	text-decoration: none;
}
a:hover {
	color: #111;
	text-decoration: underline;
}
.saved {
	display: block;
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 40px;
}
</style>
</head>

<?php 

$title = $_POST['title'];
$text = $_POST['text'];

$save = $title.'

'.$text;

$link = losowy_ciag(8);

$file = $link.'.txt';
$fp = fopen($file, "a");
fwrite($fp, $save);
fclose($fp);

function losowy_ciag($dlugosc){
  $string = md5(time());
  $string = substr($string,0,$dlugosc);
  return($string);
}

echo "
<br>
<div class='content'>

<span class='saved'>Your file was saved!</span>

<a target='_blanc' href='open.php?link=$link' onClick='window.close()'>File's permalink</a>
<br><br>
<a href='$file' class='dropbox-saver' onClick='window.close()'></a>
</div>
";

?>