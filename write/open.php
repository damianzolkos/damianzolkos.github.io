	<?php

	$link = $_GET['link'];

	$file = $link.'.txt';
	$fp = fopen($file, "a");
	$text = file_get_contents("$file");
	fclose($fp);

	$content = file($file);
	$title = $content[0];

echo "

<!DOCTYPE html>
<html>
<head>

	<title>$title - write</title>
	<meta charset='utf-8'>
	<link rel='shortcut icon' href=''/>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>

	<link href='http://fonts.googleapis.com/css?family=Marcellus+SC|Open+Sans&subset=latin,latin-ext,vietnamese,cyrillic,cyrillic-ext,greek-ext,greek' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' type='text/css' href='style.css'>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.1.1/randomColor.min.js'></script>
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script> <!-- jQuery -->

	<script type='text/javascript' src='https://www.dropbox.com/static/api/2/dropins.js' id='dropboxjs' data-app-key='eq1zb75gwmbsxq2'></script>

</head>
<body>

	<div id='more'>
		+
	<div id='more2'>
		<span id='write'><a href='index.php'>write</a></span>
		<span id='version'>version: 2.0</span>
		<div class='space'></div>
		<a href='$file' class='dropbox-saver'></a>
		<div class='space'></div>
		<a href='edit.php?link=$link'>EDIT!</a>
		<div class='space'></div>
	</div>
	</div>

	<p id='h1'>
	<p id='title' class='title' name='title'>$title</p>
	</p>

	<div id='hr'></div>
	";

	$linie = file($file);

	echo "<div class='space2'></div>
	<p id='text' class='text' name='text'>";

	for ($i=2; $i<=10000; $i++) {
	$textcontent = $linie[$i];
	$formatedlinie = nl2br($textcontent);
	echo "$formatedlinie";
	}

	echo "

	</p>

<!--			randomColor 			-->
	<script>
var randomizedColor = randomColor();
document.getElementById('hr').style.borderBottomColor = randomizedColor;
document.getElementById('more2').style.borderColor = randomizedColor;
document.getElementById('version').style.borderBottomColor = randomizedColor;
document.getElementById('more').style.borderColor = randomizedColor;
	</script>

</body>
</html>
";

	?>