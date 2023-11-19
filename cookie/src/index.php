<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EHC's home</title>
</head>
<body>
<?php

    $cookie_name = "flag";
    $cookie_value = "Tm8=";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

    if ($_COOKIE[$cookie_name] === 'WWVz') {
        echo "EHC{F12_To_See_Some_Magic}";
    } else {
    	echo "Nothing here";
    }
?>
</body>
</html>

