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
<?php


/*$i = 10;
while ($i >= 1){
    echo $i . '<br>' ;
    $i--;
}
*/


/*$i = 1;
 echo "<table border=\"1\" \n>";
while ($i <= 10){
    echo "<tr>";

    $n =1;
    while ($n <= 3) {
        echo "<td>Row $i | Col $n </td>";
        $n++;
    }

    echo "</tr>";
    $i++;
}
echo "</table>";
*/


/*$i = 1900;
echo '<select>';
    while ($i <=2024) {
        echo "<option value='$i'>$i </option>";
        $i++;
    }
echo '</select>';

*/
///таблица умножения
$cols = 5;
$rows = 5;
$tr = 1;
echo "<table border='1'>";
while ($tr <= $rows){
    echo "<tr>";

    $td = 1;
    while ($td <= $cols) {
        echo "<td>" . $tr * $td . "</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo "</table>";













?>
</body>
</html>
