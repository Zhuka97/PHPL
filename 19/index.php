<?php
/*str_replace — Заменяет вхождения строки поиска строкой замены
$str = '[i]Hello[/i] my name [b]Belya[/b]';
$search = ['[i]','[/i]','[b]','[/b]'];
$replace = ['<i>','</i>','<b>','</b>'];
$str = str_replace($search, $replace, $str);//можно как в массив так и сразу в функцию прописать
echo $str;
*/

///str_ireplace заменяет символы без учета регистра

///strip_tags — Удаляет теги HTML и PHP из строки
/*$str = '<b>Hello</b>> my name Belya <script>alert("xss")</script>';
echo strip_tags($str,'<b>');//второй параметр который не вырезать
*/

///strlen — Получает длину строки(байты)
$str = 'привет';
echo strlen($str) . "<br>";
echo mb_strlen($str);















?>




