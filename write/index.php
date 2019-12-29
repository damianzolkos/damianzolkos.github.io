<!DOCTYPE html>
<html>
<head>

	<title>write</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Marcellus+SC|Open+Sans&subset=latin,latin-ext,vietnamese,cyrillic,cyrillic-ext,greek-ext,greek' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src='http://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.1.1/randomColor.min.js'></script>

	<script type="text/javascript">
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

<!--			ilość znaków 			-->
	<script language="JavaScript">
		function StringCount(limit,name,output) {
			document.getElementById(""+output+"").innerHTML = eval("document.getElementsByName('"+name+"')[0].value.length"); 
		}
	</script>

</head>
<body>
<form action="save.php" method="post" onsubmit="target_popup(this)">

	<div id="more">
		+
	<div id="more2">
		<span id="write"><a href="index.php">write</a></span>
		<span id="version">version: 2.0</span>

		<input class="submit" type="submit" value="Save">
	</div>
	</div>

	<p id="h1">
		<input id="title" value="WRITE" class="title" name="title"/>
	</p>

	<div id="hr"></div>

    <textarea wrap="virtual" id="text" placeholder="The simplest text editor ever! Just start typing." onkeyup="StringCount(0,'text','length');" autofocus="true" class="text" name="text"></textarea>

	<span id="length"></span>

	<a href="http://damianzolkos.pl">
		<div class="link">
			&copy DŻ
		</div>
	</a>

</form>

<!--			randomColor 			-->
	<script>
var randomizedColor = randomColor();
document.getElementById("hr").style.borderBottomColor = randomizedColor;
document.getElementById("more2").style.borderColor = randomizedColor;
document.getElementById("version").style.borderBottomColor = randomizedColor;
document.getElementById("more").style.borderColor = randomizedColor;
document.getElementById("fixedtitlemain").style.backgroundColor = randomizedColor;
	</script>

</body>
</html>