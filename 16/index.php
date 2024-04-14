
<?php
require_once 'inc.php';
header('Content-Type: text/html');
header('refresh: 5; url=inc.php');
exit;///после die  код не работает
?>


<!doctype html>
<html lang="en">
<head>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
По русски
<?=$test?>
</body>
</html>








