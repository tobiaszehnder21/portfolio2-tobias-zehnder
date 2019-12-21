<?php
if ($_POST['von']!="" and $_POST['von2']!="" and $_POST['mail']!="" and $_POST['betreff']!="" and $_POST['nachricht']!="") {
$empf = "zehnder.tobias2002@gmail.com";
$betreff = $_POST['betreff'];
$from = "From: ";
$from .= $_POST['von'];
$from .= $_POST['von2'];
$from .= " <";
$from .= $_POST['mail'];
$from .= ">/n";
$from .= "Reply-To: ";
$from .= $_POST['mail'];
$from .= "\n";
$from .= "Content-Type: text/html\n";
$text = $_POST['nachricht'];

mail($empf, $betreff, $text, $from);
echo "Your Mail has been received, We will contact you soon.";
} else {
echo "Please fill in the required fields.";
}



?>