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

	<title>Editing - $title - write</title>
	<meta charset='utf-8'>
	<link rel='shortcut icon' href=''/>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>

	<link href='http://fonts.googleapis.com/css?family=Marcellus+SC|Open+Sans&subset=latin,latin-ext,vietnamese,cyrillic,cyrillic-ext,greek-ext,greek' rel='stylesheet' type='text/css'>
	<link rel='stylesheet' type='text/css' href='style.css'>

	<script src='http://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.1.1/randomColor.min.js'></script>

	<script type='text/javascript'>
		function target_popup(form) {
    		window.open('', 'formpopup', 'width=300, height=200, resizeable, scrollbars');
    		form.target = 'formpopup';
		}
	</script>

	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js'></script> <!-- jQuery -->
	<script src='http://pastebin.com/raw.php?i=i98Sj1Td'></script>	<!-- jquery.autosize.js -->

<!--			autosize 				-->
	<script>
		$(function(){
			$('.text').autosize();
		});
	</script>

</head>
<body>

	<div class='space'></div>

<form action='doedit.php' method='post' onsubmit='target_popup(this)'>

<div id='fixedtitle'>
TITLE:
</div>

	<div id='more'>
		+
	<div id='more2'>
		<span id='write'><a href='index.php'>write</a></span>
		<span id='version'>version: 2.0</span>
		<input class='submit' type='submit' value='Save as new file'>
	</div>
	</div>

	<div id='hr'></div>
	<div id='hr2'></div>

	<textarea wrap='virtual' id='text' onkeyup='StringCount(0,'text','length');' autofocus='true' class='text' name='text'>$text</textarea>

	<a href='http://damianzolkos.pl'>
		<div class='link'>
			&copy DŻ
		</div>
	</a>


</form>

<!--			randomColor 			-->
	<script>
var randomizedColor = randomColor();
document.getElementById('hr').style.borderBottomColor = randomizedColor;
document.getElementById('more2').style.borderColor = randomizedColor;
document.getElementById('version').style.borderBottomColor = randomizedColor;
document.getElementById('more').style.borderColor = randomizedColor;
document.getElementById('fixedtitle').style.backgroundColor = randomizedColor;
document.getElementById('hr2').style.borderColor = randomizedColor;
	</script>

</body>
</html>

	";

	?>

