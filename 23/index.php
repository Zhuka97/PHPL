<?php
if (isset($_POST['send'])){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
if (isset($_Get['send'])){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <p>
            <input type="text" name="name">
        </p>
        <p>
            <textarea name="text"></textarea>
        </p>

        <p>
            <input type="checkbox" name="remember">
        </p>
        <p>
          <button type="submit" name="send" value="test">Send</button>
        </p>
    </form>

    <p> Введенное имя: <?php
        if (isset($_POST['name'])){
        echo $_POST['name'];
        }else echo 'нехуя нет';
        ?></p>

    <!-- <p>введеный текст:<?php if (isset($_POST['text']))
            echo nl2br($_POST['text']);else echo 'нехуя нет'; ?>
    </p>-->
    <p>Введенный текст: <?php  echo isset($_POST['text']) ?  nl2br($_POST['text']) : 'нехуя нет'?></p>

</body>
</html>
