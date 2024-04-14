<?php

$names = [
    'ivan' => 'petrov',
    'zhuka' => 'simonov',
    'belya' => 'bratelovich',
];

$arr = ['ivanov', 'petrov'];
$arr[5] = 'sidorov';
$arr[] = 'doo';
//print_r($arr);

foreach ($names as $value) {
    echo $value . "<br>";
}

///как вывести ключи
foreach ($names as $key => $name) {
    echo "name: $key, family: $name . <br>";
}

///break continue
/*for ($i = 0; $i <= 30 ; $i++)
{
    echo $i . "<br>";
    if ($i ==5){
        echo 'Found';
        break;
    }
}
*/
for ($i = 0; $i <= 30 ; $i++)
{
    if ($i >= 10 && $i<= 20) continue;///чтобы не вывело от 10 до 20
    echo $i . "<br>";
}