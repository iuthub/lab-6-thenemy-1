<?php

$pattern="";
$text="";
$replaceText="";
$replacedText="";

$match="Not checked yet.";

if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $text=$_POST["text"];
    $replaceText="";

    if(!empty($text)) {
        $replacedText = preg_replace('/\s/','', $text);
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valid Form</title>
</head>
<body>
<form action="regex_valid_form.php" method="post">
    <dl>

        <dt>Text</dt>
        <dd><input type="text" name="text" value="<?= $text ?>"></dd>




        <dt>Replaced Text</dt>
        <dd> <code><?=	$replacedText ?></code></dd>

        <dt>&nbsp;</dt>
        <dd><input type="submit" value="Check"></dd>
    </dl>
</form>
</body>
</html>
