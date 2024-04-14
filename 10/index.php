<?php


$arr = array('belya',1);

$arr2 = ['Zhenya', 'Marina', ['banan', 'apple']];

$arr3 = [2 =>'Zhenya', 'human'=>'Marina', 'Belya'];

echo "<pre>";
print_r($arr);
print_r($arr2[2][0]);///банан
print_r($arr3);
$result = array_keys($arr2);
print_r($result);
echo "</pre>";

////count
echo count($arr3 ) . "<br>";
echo count($arr2, 1);///выведет 5


///array_diff
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
///покажет blue

///array_intersect использует схождения массивов...противоположна diff
///array_key_exists Проверяет, существует ли в массиве заданный ключ или индекс
///array_keys — Возвращает все или некоторое подмножество ключей массива
/// array_keys — Возвращает все или некоторое подмножество ключей массива
/// array_merge — Сливает один или несколько массивов
/// array_rand — Выбирает один или несколько случайных ключей из массива
/// array_reverse — Возвращает массив с элементами в обратном порядке
/// compact — Создаёт массив, содержащий названия переменных и их значения
/// extract — Импортирует переменные массива в текущую таблицу символов..а по русски создает переменныее
/// 