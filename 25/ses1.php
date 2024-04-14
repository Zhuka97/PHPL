<?php

session_start();
//$_SESSION['name']= 'Zhenya';
echo $_SESSION['name'];
unset($_SESSION['name']);
///session_unset(); удаляет все переменные
///session_destroy(); убивает файл сессии