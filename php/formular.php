<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formular</title>
</head>

<body>
	<?php
		$empf = "zehnder.tobias2002@gmail.com";
		$betrerff = "Neuen Eintrag";
		$from = "From: Tobias Zehnder <itzspecificmc@gmail.com>\n";
		$from .= "Reply-To: itzspecificmc@gmail.com\n";
		$from .= "Content-Type: text/html\n";
		$text = "<p> Hi </p>";
	
		mail ($empf, $betrerff, $text, $from)
	?>
	
</body>
</html>